<?php

namespace App\Services;

use App\Models\MediaInformasi;
use Illuminate\Support\Facades\Storage;
class MediaInformasiService
{
   public function create($data)
    {
        $image = $data['gambar'];
        $image->storeAs('public/mediaInformasi_images', $image->hashName());
        $data['gambar'] = $image->hashName();

        $dataMediaInformasi = [
           'gambar' => $data['gambar'],
            'judul' => $data['judul'],
            'link' => $data['link'],
        ];

        return MediaInformasi::create($dataMediaInformasi);
    }

     public function getAll()
    {
        return MediaInformasi::all();
    }

     public function update($id, $data)
    {
        $mediaInformasi = MediaInformasi::findOrFail($id);

        if (isset($data['gambar'])) {
            $image = $data['gambar'];
            $image->storeAs('public/mediaInformasi_images', $image->hashName());
            Storage::delete('public/mediaInformasi_images/' . $mediaInformasi->gambar);
            $data['gambar'] = $image->hashName();
        }

        $dataMediaInformasi = [
            'gambar' => $data['gambar'] ?? $mediaInformasi->gambar,
             'judul' => $data['judul'],
            'link' => $data['link'],
           
        ];

        $mediaInformasi->update($dataMediaInformasi);

        return $mediaInformasi;
    }

    public function delete($id)
    {
        $mediaInformasi = MediaInformasi::findOrFail($id);
        Storage::delete('public/mediaInformasi_images/' . $mediaInformasi->gambar);
        return $mediaInformasi->delete();
    }
}
