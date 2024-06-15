<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Facades\Storage;

class ProjekService
{
    
    public function updateBanner(Request $request, string $id)
    {
        $banner = Banner::findOrFail($id);

        $data = [];

        if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $image->storeAs('public/banner_image', $image->hashName());
            Storage::delete('public/banner_image/' . $banner->banner);
            $data['banner'] = $image->hashName();
        }

        $banner->update($data);

        return $banner;
    }
}
