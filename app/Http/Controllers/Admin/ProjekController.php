<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projek;
use App\Services\ProjekService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjekController extends Controller
{
    protected $projekService;

    public function __construct(ProjekService $projekService)
    {
        $this->projekService = $projekService;
    }
    public function index(Request $request)
    {
        $search = $request->input('search');

        $projeks = Projek::when($search, function ($query, $search) {
            return $query->where(function ($query) use ($search) {
                $query->where('nama', 'like', '%' . $search . '%')->orWhere('deskripsi', 'like', '%' . $search . '%');
            });
        })
            ->orderBy('created_at', 'desc')
            ->paginate(5);

        return view('pages.admin.project.index', compact('projeks', 'search'));
    }

    public function create()
    {
        return view('pages.admin.project.create');
    }

    public function store(Request $request)
    {
        try {
            $this->projekService->createProjek($request);
            return redirect()->route('admin.projek.index')->with('success', 'Projek Created successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to Create Project: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.projek.index')->with($notification);
        }
    }

    public function edit(Projek $projek)
    {
        return view('pages.admin.project.edit', compact('projek'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->projekService->updateProjek($request, $id);
            return redirect()->route('admin.projek.index')->with('success', 'Project updated successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Project: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.projek.index')->with($notification);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->projekService->delete($id);

            $notification = [
                'message' => 'Project deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.projek.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Project: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.projek.index')->with($notification);
        }
    }
}
