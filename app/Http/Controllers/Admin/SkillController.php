<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use App\Services\SkillsService;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    protected $skillsService;

    public function __construct(SkillsService $skillsService)
    {
        $this->skillsService = $skillsService;
    }
    public function index(Request $request)
    {
        $search = $request->input('search');
        $skills = Skill::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        })
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('pages.admin.skill.index', compact('skills', 'search'));
    }

    public function create()
    {
        return view('pages.admin.skill.create');
    }

    public function store(Request $request)
    {
        try {
            $this->skillsService->createSkills($request);
            return redirect()->route('admin.skill.index')->with('success', 'Skills created successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to create Skills: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('pages.admin.skill.index')->with($notification);
        }
    }

    public function edit(Skill $skill)
    {
        return view('pages.admin.skill.edit', compact('skill'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->skillsService->updateSkills($request, $id);
            return redirect()->route('admin.skill.index')->with('success', 'Skills updated successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Skills: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.skill.index')->with($notification);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->skillsService->delete($id);

            $notification = [
                'message' => 'Skills deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.skill.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Skills: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.skill.index')->with($notification);
        }
    }
}
