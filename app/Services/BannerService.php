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
    if ($request->hasFile('banner')) {
        $image = $request->file('banner');
        $image->storeAs('public/banner_file', $image->hashName());

        if ($banner->banner) {
            Storage::delete('public/banner_file/' . $banner->banner);
        }

        $data['banner'] = $image->hashName();
    }

    if (!empty($data)) {
        $banner->update($data);
    }

    return $banner;
}

}
