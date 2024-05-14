<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Services\BannerService;
use Illuminate\Http\Request;
class BannerController extends Controller
{
    protected $bannerService;
    public function __construct(BannerService $bannerService)
    {
        $this->bannerService = $bannerService;
    }

    public function indexBanner()
    {
        try {
            $banner = Banner::first();
            return view('pages.admin.banner.index', compact('banner'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get Banner: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('pages.admin.banner.index')->with($notification);
        }
    }

    public function updateBanner(Request $request, string $id)
    {
        try {
            $this->bannerService->updateBanner($request, $id);

            $notification = [
                'message' => 'Banner Updated Successfully',
                'alert-type' => 'success',
            ];
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to Update Banner: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];
        }

        return redirect()->route('admin.banner.index')->with($notification);
    }
}
