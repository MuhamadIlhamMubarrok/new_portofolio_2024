<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use App\Services\TestimoniService;
use Illuminate\Http\Request;

class TestimonyController extends Controller
{
    protected $testimonyService;

    public function __construct(TestimoniService $testimonyService)
    {
        $this->testimonyService = $testimonyService;
    }
    public function index()
    {
        $testimonies = Testimony::all();
        return view('pages.admin.testimoni.index', compact('testimonies'));
    }

    public function create()
    {
        return view('pages.admin.testimoni.create');
    }

    public function store(Request $request)
    {
        try {
             
            $this->testimonyService->create($request);
            return redirect()->route('admin.testimony.index')->with('success', 'Testimony created successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to create Testimony: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.testimony.index')->with($notification);
        }
    }

    public function edit(string $id)
    {
        $testimony = Testimony::findOrFail($id);
        return view('pages.admin.testimoni.edit', compact('testimony'));
    }

    public function update(Request $request, $id)
    {
         try {
            $this->testimonyService->update($request, $id);
            return redirect()->route('admin.testimony.index')->with('success', 'Testimony updated successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Testimony: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.testimony.index')->with($notification);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->testimonyService->delete($id);

            $notification = [
                'message' => 'Testimony deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.testimony.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Article: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.testimony.index')->with($notification);
        }
    }
}
