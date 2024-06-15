<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjekController extends Controller
{
    public function index()
    {
        $projeks = Projek::all();
        return view('pages.admin.project.index', compact('projeks'));
    }

    public function create()
    {
        return view('pages.admin.project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'nullable|image',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
        ]);

        $path = $request->file('gambar') ? $request->file('gambar')->store('projek_images', 'public') : null;

        Projek::create([
            'gambar' => $path,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('pages.admin.projeks.index')->with('success', 'Projek created successfully.');
    }

    public function edit(Projek $projek)
    {
        return view('pages.admin.projeks.edit', compact('projek'));
    }

    public function update(Request $request, Projek $projek)
    {
        $request->validate([
            'gambar' => 'nullable|image',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string|max:1000',
        ]);

        if ($request->hasFile('gambar')) {
            if ($projek->gambar) {
                Storage::disk('public')->delete($projek->gambar);
            }
            $path = $request->file('gambar')->store('projek_images', 'public');
        } else {
            $path = $projek->gambar;
        }

        $projek->update([
            'gambar' => $path,
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('pages.admin.projeks.index')->with('success', 'Projek updated successfully.');
    }

    public function destroy(Projek $projek)
    {
        if ($projek->gambar) {
            Storage::disk('public')->delete($projek->gambar);
        }
        $projek->delete();
        return redirect()->route('pages.admin.projeks.index')->with('success', 'Projek deleted successfully.');
    }
}
