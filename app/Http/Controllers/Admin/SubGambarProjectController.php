<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubGambarProject;
use App\Models\Projek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\SubGambarService;

class SubGambarProjectController extends Controller
{
    protected $subGambarService;

    public function __construct(SubGambarService $subGambarService)
    {
        $this->subGambarService = $subGambarService;
    }
   public function index(Request $request)
{
    $search = $request->input('search');

    $subGambarProjects = SubGambarProject::with(['projek' => function ($query) use ($search) {
        if ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        }
    }])
    ->whereHas('projek', function ($query) use ($search) {
        if ($search) {
            $query->where('nama', 'like', '%' . $search . '%');
        }
    })
    ->paginate(5);

    return view('pages.admin.subGambarProject.index', compact('subGambarProjects', 'search'));
}


    public function create()
    {
        $projeks = Projek::all();
        return view('pages.admin.subGambarProject.create', compact('projeks'));
    }

    public function store(Request $request)
    {
        try {
            $this->subGambarService->create($request);
            return redirect()->route('admin.subGambar.index')->with('success', 'Sub Gambar Project created successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to Create Sub Gambar ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.subGambar.index')->with($notification);
        }
    }

    public function edit(SubGambarProject $subGambar)
    {
        $projeks = Projek::all();
        return view('pages.admin.subGambarProject.edit', compact('subGambar', 'projeks'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->subGambarService->update($request, $id);
            return redirect()->route('admin.subGambar.index')->with('success', 'Sub Gambar Project Updated successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to Update Sub Gambar ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.subGambar.index')->with($notification);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->subGambarService->delete($id);

            $notification = [
                'message' => 'Sub Gambar deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.projek.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Sub Gambar: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.projek.index')->with($notification);
        }
    }
}
