<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $profileService;
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function indexProfile()
    {
        try {
            $profile = Profile::first();
            return view('pages.admin.profile.index', compact('profile'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get Profile: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('pages.admin.profile.index')->with($notification);
        }
    }

    public function updateHero(Request $request, string $id)
    {
        try {
            $this->profileService->updateProfile($request, $id);

            $notification = [
                'message' => 'Profile Updated Successfully',
                'alert-type' => 'success',
            ];
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to Update Profile: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];
        }

        return redirect()->route('admin.profile.index')->with($notification);
    }
}
