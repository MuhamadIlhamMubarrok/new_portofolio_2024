<?php

namespace App\Services;

use App\Models\Profile;
use Illuminate\Http\Request;
class ProfileService
{
    public function updateProfile(Request $request, string $id)
    {
        $profile = Profile::findOrFail($id);

        $data = [
            'vidio' => $request->vidio,
            'text_profile' => $request->text_profile,
            'visi' => $request->visi,
            'misi' => $request->misi,
        ];

        $profile->update($data);

        return $profile;
    }
}
