<?php

namespace App\Services;

use App\Models\Article;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;
class CertificateService
{
    public function getAll()
    {
        return Certificate::all();
    }

    public function update($id, $data)
    {
        $certificate = Certificate::findOrFail($id);

        if (isset($data['pdf'])) {
            $pdf = $data['pdf'];
            $pdf->storeAs('public/pdf', $pdf->hashName());
            Storage::delete('public/pdf/' . $certificate->pdf);
            $data['pdf'] = $pdf->hashName();
        }

        $dataCerticate = [
            'nama' => $data['nama'],
            'pdf' => $data['pdf'] ??  $certificate->pdf,
            'content' => $data['content'],
            'status' => $data['status'],
        ];

        $certificate->update($dataCerticate);

        return $certificate;
    }

    public function create($data)
    {
        $pdf = $data['pdf'];
        $pdf->storeAs('public/pdf', $pdf->hashName());
        $data['pdf'] = $pdf->hashName();

       $dataCerticate = [
            'nama' => $data['nama'],
            'pdf' => $data['pdf'],
            'content' => $data['content'],
            'status' => $data['status'],
        ];

        return Article::create($dataCerticate);
    }

     public function delete($id)
    {
        $certificate = Certificate::findOrFail($id);
        Storage::delete('public/pdf/' .  $certificate->pdf);
        return $certificate->delete();
    }


}
