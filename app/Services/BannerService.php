<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class BannerService
{
    
   public function updateBanner(Request $request, string $id)
{
    $banner = Banner::findOrFail($id);
    $data = [];

    if ($request->hasFile('vidio')) {
        $vidio = $request->file('vidio');
        $vidio->storeAs("public/banner_vidio", $vidio->hashName());

        if ($banner->vidio) {
            Storage::delete('public/banner_vidio/' . $banner->vidio);
        }

         if ($banner->foto) {
            Storage::delete('public/banner_foto/' . $banner->foto);
        }

        $data["vidio"] = $vidio->hashName();
    }

    if ($request->hasFile('foto')) {
        $image = $request->file('foto');
        $image->storeAs('public/banner_foto', $image->hashName());

        if ($banner->foto) {
            Storage::delete('public/banner_foto/' . $banner->foto);
        }

        if ($banner->vidio) {
            Storage::delete('public/banner_vidio/' . $banner->vidio);
        }

        $data['foto'] = $image->hashName();
    }

    if (!empty($data)) {
        $banner->update($data);
    }

    return $banner;
}

}
