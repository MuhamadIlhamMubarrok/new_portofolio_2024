<?php

namespace App\Services;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateService
{
    public function updateCertificate($request, $id)
    {
        $certificate = Certificate::findOrFail($id);
        $data = [
            'nama' => $request->nama,
        ];

        $request->validate([
            'gambar' => 'nullable|image',
            'nama' => 'required|string|max:255',
        ]);

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambar->storeAs('public/logo_certificate/' . $gambar->hashName());
            if ($certificate->gambar) {
                Storage::delete('public/logo_certificate/' . $certificate->gambar);
            }
            $data['gambar'] = $gambar->hashName();
        }

        return $certificate->update($data);
    }

    public function createCertificate($request)
    {
        $request->validate([
            'gambar' => 'nullable|image',
            
        ]);

        
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/logo_certificate', $image->hashName());
            $data['gambar'] = $image->hashName();
        }

        return Certificate::create($data);
    }

    public function delete($id)
    {
        $certificate = Certificate::findOrFail($id);
         if ($certificate->gambar) {
                Storage::delete('public/logo_certificate/' . $certificate->gambar);
            }
        return $certificate->delete();
    }
}
