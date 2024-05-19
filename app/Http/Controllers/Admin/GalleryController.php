<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Services\GalleryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    protected $galleryService;
    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }
    public function index()
    {
        try {
            $gallery = Gallery::first();
            return view('admin.gallery.index', compact('gallery'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get Gallery: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('admin.galeri.index')->with($notification);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $this->galleryService->createGallery($request->all());

            $notification = [
                'message' => 'Gallery created successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.gallery.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to create Gallery: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.gallery.index')->with($notification);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       try {
            $request->validate([
                'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $this->galleryService->updateGallery($id, $request);

            $notification = [
                'message' => 'Gallery updated successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.gallery.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Gallery: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.gallery.index')->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $this->galleryService->delete($id);

            $notification = [
                'message' => 'Gallery deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.gallery.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Gallery: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.gallery.index')->with($notification);
        }
    }
}
