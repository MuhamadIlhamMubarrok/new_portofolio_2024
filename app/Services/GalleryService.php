<?php

namespace App\Services;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class GalleryService
{
   public function updateGallery( string $id, Request $request)
    {
        $gallery = Gallery::findOrFail($id);

        $data = [];

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $image->storeAs('public/gallery_image', $image->hashName());
            Storage::delete('public/gallery_image/' . $gallery->gambar);
            $data['gambar'] = $image->hashName();
        }

        $gallery->update($data);

        return $gallery;
    }

    public function createGallery($data)
    {
        $image = $data['gambar'];
        $image->storeAs('public/gallery_image', $image->hashName());
        $data['gambar'] = $image->hashName();

        return Gallery::create($data);
    }


    public function delete($id)
    {
        $gallery = Gallery::findOrFail($id);
        Storage::disk('public/gallery_image')->delete($gallery->image);
        return $gallery->delete();
    }
}
