<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\MediaInformasiService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MediaInformasiController extends Controller
{
    protected $mediaInfomasiService;
    public function __construct(MediaInformasiService $mediaInfomasiService){
        $this->mediaInfomasiService = $mediaInfomasiService;
    }
   public function index(Request $request)
    {
        try {
             
            $mediaInformasi = $this->mediaInfomasiService->getAll();
           
            return view('admin.media-informasi.index', compact('mediaInformasi'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get MediaInformasi: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('admin.media-informasi.index')->with($notification);
        }
    }

    public function edit(Request $request): View
    {
        return view('admin.media-informasi.edit', [
            'user' => $request->user(),
        ]);
    }

   
    public function store(Request $request)
    {
        try {
            $this->mediaInfomasiService->create($request->all());
             $notification = [
                'message' => 'MediaInformasi created successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->route('admin.media-informasi.index')->with($notification);
        }catch(\Exception $e){
            $notification = [
                'message' => 'Failed to create MediaInformasi: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.media-informasi.index')->with($notification);
        }
    }

   
    public function update(Request $request, string $id)
    {
        try {
            $this->mediaInfomasiService->update($id, $request->all());

            $notification = [
                'message' => 'MediaInformasi updated successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.media-informasi.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update MediaInformasi: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.media-informasi.index')->with($notification);
        }
    }

    
    public function destroy(string $id)
    {
        try {
            $this->mediaInfomasiService->delete($id);

            $notification = [
                'message' => 'MediaInformasi deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.media-informasi.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete MediaInformasi: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.media-informasi.index')->with($notification);
        }
    }
}
