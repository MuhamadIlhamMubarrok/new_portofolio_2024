<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Projek;
use App\Models\SubGambarProject;
use Illuminate\Support\Facades\Storage;

class ProjekService
{
    public function updateProjek(Request $request, string $id)
    {
        $projek = Projek::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $banner->storeAs('public/fotoProduct/', $banner->hashName());
            Storage::delete('public/fotoProduct/' . $projek->banner);
            $data['banner'] = $banner->hashName();
        }

        $projek->update($data);

        return $projek;
    }

    public function createProjek($request)
    {
        $request->validate([
            'banner' => 'nullable|image',
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $data = [
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
        ];

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $banner->storeAs('public/fotoProduct/', $banner->hashName());
            $data['banner'] = $banner->hashName();
        }

        return Projek::create($data);
    }

    public function delete($id)
    {
        $projek = Projek::findOrFail($id);
       $subGambarProjects = SubGambarProject::where('projek_id', $id)->get();

        foreach ($subGambarProjects as $subGambarProject) {
        if ($subGambarProject->gambar) {
            Storage::delete('public/sub_gambar_projects/' . $subGambarProject->gambar);
        }
        $subGambarProject->delete();
    }
        if ($projek->banner) {
            Storage::delete('public/fotoProduct/' . $projek->banner);
        }
        return $projek->delete();
    }
}
