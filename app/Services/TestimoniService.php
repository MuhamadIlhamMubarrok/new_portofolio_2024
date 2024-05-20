<?php

namespace App\Services;

use App\Models\Testimony;
use Illuminate\Support\Facades\Storage;
class TestimoniService
{
   public function create($data)
    {
        $image = $data['gambar'];
        $image->storeAs('public/testimony_images', $image->hashName());
        $data['gambar'] = $image->hashName();

        $dataTestimony = [
           'gambar' => $data['gambar'],
            'nama' => $data['nama'],
            'tempat_kerja' => $data['tempat_kerja'],
            'text_testimoni' => $data['text_testimoni'],
        ];

        return Testimony::create($dataTestimony);
    }

     public function getAll()
    {
        return Testimony::all();
    }

     public function update($id, $data)
    {
        $testimony = Testimony::findOrFail($id);

        if (isset($data['gambar'])) {
            $image = $data['gambar'];
            $image->storeAs('public/testimony_images', $image->hashName());
            Storage::delete('public/testimony_images/' . $testimony->gambar);
            $data['gambar'] = $image->hashName();
        }

        $dataTestimony = [
            'gambar' => $data['gambar'] ?? $testimony->gambar,
             'nama' => $data['nama'],
            'tempat_kerja' => $data['tempat_kerja'],
            'text_testimoni' => $data['text_testimoni'],
        ];

        $testimony->update($dataTestimony);

        return $testimony;
    }

    public function delete($id)
    {
        $testimony = Testimony::findOrFail($id);
        Storage::delete('public/testimony_images/' . $testimony->gambar);
        return $testimony->delete();
    }
}
