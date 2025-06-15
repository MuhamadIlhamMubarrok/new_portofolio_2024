<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Projek;
use App\Models\SubGambarProject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjekService
{
    public function createProjek($request)
    {

        $request->validate([
            'banner' => 'nullable|image',
            'nama' => 'required|string|max:255', 
            'deskripsi' => 'nullable|string', 
            'members' => 'nullable|array',
            'skillIds' => 'nullable|array',
            'category' => 'required|in:project team,personal project,project at work',
            
        ]);

        $slug = Str::slug($request->input('nama'));
        $originalSlug = $slug;
        $counter = 1;

        // Cek kalau slug sudah ada, tambahkan angka unik di belakang
        while (Projek::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        
        $data = [
            'nama' => $request->nama,
            'alt_banner' => $request->alt_banner,
            'deskripsi' => $request->deskripsi,
            'meta_description' => $request->meta_description,
            'memberId' => $request->members,
            'skillId' => $request->skillIds,
            'slug' => $slug,
            'category' => $request->category, 
        ];


        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $banner->storeAs('public/fotoProject/', $banner->hashName());
            $data['banner'] = $banner->hashName();
        }


        return Projek::create($data);
    }

    public function updateProjek(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'memberId' => 'array',
            'skillId' => 'array', 
            'banner' => 'nullable|image|mimes:webp|max:2048',
            'category' => 'required',
        ]);

        $projek = Projek::findOrFail($id);

        $slug = Str::slug($request->input('title'));
        $originalSlug = $slug;
        $counter = 1;

        // Cek kalau slug sudah ada, tambahkan angka unik di belakang
        while (Projek::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        $data = [
            'nama' => $request->nama,
            'alt_banner' => $request->alt_banner,
            'deskripsi' => $request->deskripsi,
            'meta_description' => $request->meta_description,
            'memberId' => $request->members,
            'skillId' => $request->skillIds,
            'slug' => $slug,
            'category' => $request->category, 
        ];

        if ($request->hasFile('banner')) {
            $banner = $request->file('banner');
            $banner->storeAs('public/fotoProject/', $banner->hashName());
            if ($projek->banner) {
                Storage::delete('public/fotoProject/' . $projek->banner);
            }
            $data['banner'] = $banner->hashName();
        }

        $projek->update($data);

        return $projek;
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
            Storage::delete('public/fotoProject/' . $projek->banner);
        }
        return $projek->delete();
    }
}
