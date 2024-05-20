<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use App\Models\Pengurus;

class PengurusService
{
    public function create($data)
    {
        $image = $data['gambar'];
        $image->storeAs('public/pengurus_images', $image->hashName());
        $data['gambar'] = $image->hashName();

        $dataPengurus = [
           'gambar' => $data['gambar'],
            'nama' => $data['nama'],
            'jabatan' => $data['jabatan'],
        ];

        return Pengurus::create($dataPengurus);
    }

     public function getAll()
    {
        return Pengurus::all();
    }

     public function update($id, $data)
    {
        $pengurus = Pengurus::findOrFail($id);

        if (isset($data['gambar'])) {
            $image = $data['gambar'];
            $image->storeAs('public/pengurus_images', $image->hashName());
            Storage::delete('public/pengurus_images/' . $pengurus->gambar);
            $data['gambar'] = $image->hashName();
        }

        $dataPengurus = [
            'gambar' => $data['gambar'] ?? $pengurus->gambar,
             'nama' => $data['nama'],
            'jabatan' => $data['jabatan'],
           
        ];

        $pengurus->update($dataPengurus);

        return $pengurus;
    }

    public function delete($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        Storage::delete('public/pengurus_images/' . $pengurus->gambar);
        return $pengurus->delete();
    }
}
