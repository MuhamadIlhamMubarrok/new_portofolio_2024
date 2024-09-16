<?php

namespace App\Services;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemberService
{
    public function updateMembers($request, $id)
    {
        $members = Member::findOrFail($id);
        $data = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ];

        $request->validate([
            'gambar' => 'nullable|image',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/logo_members/' . $gambar->hashName());
            if ($members->gambar) {
                Storage::delete('public/logo_members/' . $members->gambar);
            }
            $data['gambar'] = $gambar->hashName();
        }

        return $members->update($data);
    }

    public function createMembers($request)
    {
        $request->validate([
            'gambar' => 'nullable|image',
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
        ]);

        $data = [
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ];
        
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/logo_members', $image->hashName());
            $data['gambar'] = $image->hashName();
        }

        return Member::create($data);
    }

    public function delete($id)
    {
        $members = Member::findOrFail($id);
         if ($members->gambar) {
                Storage::delete('public/logo_members/' . $members->gambar);
            }
        return $members->delete();
    }
}
