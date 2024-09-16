<?php

namespace App\Services;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SkillsService
{
    public function updateSkills($request, $id)
    {
        $skills = Skill::findOrFail($id);
        $data = [
            'nama' => $request->nama,
        ];

        $request->validate([
            'gambar' => 'nullable|image',
            'nama' => 'required|string|max:255',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/logo_skills/' . $gambar->hashName());
            if ($skills->gambar) {
                Storage::delete('public/logo_skills/' . $skills->gambar);
            }
            $data['gambar'] = $gambar->hashName();
        }

        return $skills->update($data);
    }

    public function createSkills($request)
    {
        $request->validate([
            'gambar' => 'nullable|image',
            'nama' => 'required|string|max:255',
        ]);

        $data = [
            'nama' => $request->nama,
        ];
        
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/logo_skills', $image->hashName());
            $data['gambar'] = $image->hashName();
        }

        return Skill::create($data);
    }

    public function delete($id)
    {
        $skills = Skill::findOrFail($id);
         if ($skills->gambar) {
                Storage::delete('public/logo_skills/' . $skills->gambar);
            }
        return $skills->delete();
    }
}
