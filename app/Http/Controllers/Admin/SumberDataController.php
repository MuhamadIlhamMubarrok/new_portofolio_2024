<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SumberData;
use App\Services\SumberDataService;
use Illuminate\Http\Request;

class SumberDataController extends Controller
{
   protected $sumberDataService;
    public function __construct(SumberDataService $sumberDataService)
    {
        $this->sumberDataService = $sumberDataService;
    }

    public function indexSumberData()
    {
        try {
            $sumberData = SumberData::first();
            return view('pages.admin.sumber-data.index', compact('sumberData'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get SumberData: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('pages.admin.sumber-data.index')->with($notification);
        }
    }

    public function updateSumberData(Request $request, string $id)
    {
        try {
            $this->sumberDataService->updateSumberData($request, $id);

            $notification = [
                'message' => 'SumberData Updated Successfully',
                'alert-type' => 'success',
            ];
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to Update SumberData: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];
        }

        return redirect()->route('admin.sumber-data.index')->with($notification);
    }
}
