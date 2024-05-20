<?php

namespace App\Services;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;
class DocumentService
{
   public function create($data)
    {
        $image = $data['gambar'];
        $image->storeAs('public/document_images', $image->hashName());
        $data['gambar'] = $image->hashName();

        $dataDocument = [
           'gambar' => $data['gambar'],
            'judul' => $data['judul'],
            'pdf' => $data['pdf'],
        ];

        return Document::create($dataDocument);
    }

     public function getAll()
    {
        return Document::all();
    }

     public function update($id, $data)
    {
        $document = Document::findOrFail($id);

        if (isset($data['gambar'])) {
            $image = $data['gambar'];
            $image->storeAs('public/document_images', $image->hashName());
            Storage::delete('public/document_images/' . $document->gambar);
            $data['gambar'] = $image->hashName();
        }

        $dataDocument = [
            'gambar' => $data['gambar'] ?? $document->gambar,
            'judul' => $data['judul'],
            'pdf' => $data['pdf'],
        ];

        $document->update($dataDocument);

        return $document;
    }

    public function delete($id)
    {
        $document = Document::findOrFail($id);
        Storage::delete('public/document_images/' . $document->gambar);
        return $document->delete();
    }
}
