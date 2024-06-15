<?php

namespace App\Services;

use App\Models\Testimony;
use Illuminate\Support\Facades\Storage;
class TestimoniService
{
    public function create($request)
    {
        $data = [
            'nama' => $request->nama,
            'text_testimoni' => $request->text_testimoni,
        ];
        $request->validate([
            'gambar' => 'required|image',
            'nama' => 'required|string|max:255',
            'text_testimoni' => 'required|string',
        ]);

        $gambar = $request->file('gambar');
        $gambar->storeAs('public/testimony_foto/' . $gambar->hashName());
        $data['gambar'] = $gambar->hashName();

        return Testimony::create($data);
    }

    public function getAll()
    {
        return Testimony::all();
    }

    public function update($request, $id)
    {
        $testimony = Testimony::findOrFail($id);
        $data = [
            'nama' => $request->nama,
            'text_testimoni' => $request->text_testimoni,

        ];
        $request->validate([
            'nama' => 'required|string|max:255',
            'text_testimoni' => 'required|string',
        ]);

        if (isset($request['gambar'])) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/testimony_foto/' . $gambar->hashName());
            if ($testimony->gambar) {
                Storage::delete('public/testimony_foto/' . $testimony->gambar);
            }
            $data['gambar'] = $gambar->hashName();
        }
        $testimony->update($data);

        return $testimony;
    }

    public function delete($id)
    {
        $testimony = Testimony::findOrFail($id);
        if ($testimony->gambar) {
            Storage::delete('public/testimony_foto/' . $testimony->gambar);
        }
        return $testimony->delete();
    }
}
