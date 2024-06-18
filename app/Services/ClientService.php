<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Client;

class ClientService
{
    public function updateClient($request, $id)
    {
        $client = Client::findOrFail($id);
        $data = [
            'nama' => $request->nama,
        ];

        $request->validate([
            'gambar' => 'nullable|image',
            'nama' => 'required|string|max:255',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/logo_client/' . $gambar->hashName());
            if ($client->gambar) {
                Storage::delete('public/logo_client/' . $client->gambar);
            }
            $data['gambar'] = $gambar->hashName();
        }

        return $client->update($data);
    }

    public function createClient($request)
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
            $image->storeAs('public/logo_client', $image->hashName());
            $data['gambar'] = $image->hashName();
        }

        return Client::create($data);
    }

    public function delete($id)
    {
        $client = Client::findOrFail($id);
         if ($client->gambar) {
                Storage::delete('public/logo_client/' . $client->gambar);
            }
        return $client->delete();
    }
}
