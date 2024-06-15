<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubGambarProject;
use App\Models\Projek;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SubGambarProjectController extends Controller
{
   public function index()
    {
        $subGambarProjects = SubGambarProject::with('projek')->get();
        return view('pages.admin.subGambarProject.index', compact('subGambarProjects'));
    }

    public function create()
    {
        $projeks = Projek::all();
        return view('pages.admin.subGambarProject.create', compact('projeks'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'projek_id' => 'required|exists:projeks,id',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('gambar');
        $imagePath = $image->store('public/sub_gambar_projects');

        SubGambarProject::create([
            'projek_id' => $validatedData['projek_id'],
            'gambar' => basename($imagePath),
        ]);

        return redirect()->route('admin.subGambarProjects.index')->with('success', 'Sub Gambar Project created successfully.');
    }

    public function edit(SubGambarProject $subGambarProject)
    {
        $projeks = Projek::all();
        return view('admin.subGambarProjects.edit', compact('subGambarProject', 'projeks'));
    }

    public function update(Request $request, SubGambarProject $subGambarProject)
    {
        $validatedData = $request->validate([
            'projek_id' => 'required|exists:projeks,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imagePath = $image->store('public/sub_gambar_projects');
            Storage::delete('public/sub_gambar_projects/' . $subGambarProject->gambar);
            $subGambarProject->gambar = basename($imagePath);
        }

        $subGambarProject->projek_id = $validatedData['projek_id'];
        $subGambarProject->save();

        return redirect()->route('admin.subGambarProjects.index')->with('success', 'Sub Gambar Project updated successfully.');
    }

    public function destroy(SubGambarProject $subGambarProject)
    {
        Storage::delete('public/sub_gambar_projects/' . $subGambarProject->gambar);
        $subGambarProject->delete();
        return redirect()->route('admin.subGambarProjects.index')->with('success', 'Sub Gambar Project deleted successfully.');
    }
}
