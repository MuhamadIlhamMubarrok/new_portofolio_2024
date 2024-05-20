<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\TestimoniService;
use Illuminate\Http\Request;
use Illuminate\View\View;
class TestimonyController extends Controller
{
    protected $tesimonyService;
    public function __construct(TestimoniService $tesimonyService){
        $this->tesimonyService = $tesimonyService;
    }
   public function index(Request $request)
    {
        try {
             
            $testimony = $this->tesimonyService->getAll();
           
            return view('admin.testimony.index', compact('testimony'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get Testimony: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('admin.testimony.index')->with($notification);
        }
    }

    public function edit(Request $request): View
    {
        return view('admin.testimony.edit', [
            'user' => $request->user(),
        ]);
    }

   
    public function store(Request $request)
    {
        try {
            $this->tesimonyService->create($request->all());
             $notification = [
                'message' => 'Testimony created successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->route('admin.testimony.index')->with($notification);
        }catch(\Exception $e){
            $notification = [
                'message' => 'Failed to create Testimony: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.testimony.index')->with($notification);
        }
    }

   
    public function update(Request $request, string $id)
    {
        try {
            $this->tesimonyService->update($id, $request->all());

            $notification = [
                'message' => 'Testimony updated successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.testimony.index')->with($notification);
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
            $this->tesimonyService->delete($id);

            $notification = [
                'message' => 'Testimony deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.testimony.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Testimony: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.testimony.index')->with($notification);
        }
    }
}
