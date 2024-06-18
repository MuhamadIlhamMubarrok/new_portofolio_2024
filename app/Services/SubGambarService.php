<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\SubGambarProject;
use Illuminate\Support\Facades\Storage;

class SubGambarService
{
    public function update(Request $request, string $id)
    {
        $subGambar = SubGambarProject::findOrFail($id);

        $data = [
            'projek_id' => $request->projek_id,
        ];
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/sub_gambar_projects/', $gambar->hashName());
            Storage::delete('public/sub_gambar_projects/' . $subGambar->gambar);
            $data['gambar'] = $gambar->hashName();
        }

        $subGambar->update($data);

        return $subGambar;
    }

    public function create($request)
    {
        $data = [
            'projek_id' => $request->projek_id,
        ];

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/sub_gambar_projects/', $gambar->hashName());
            $data['gambar'] = $gambar->hashName();
        }

        return SubGambarProject::create($data);
    }

    public function delete($id)
    {
        $subGambarProjects = SubGambarProject::findOrFail($id);

        if ($subGambarProjects->gambar) {
            Storage::delete('public/sub_gambar_projects/' . $subGambarProjects->gambar);
        }
        return $subGambarProjects->delete();
    }
}
