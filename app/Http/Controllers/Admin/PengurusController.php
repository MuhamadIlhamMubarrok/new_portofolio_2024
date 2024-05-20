<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\PengurusService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PengurusController extends Controller
{
    protected $pengurusService;
    public function __construct(PengurusService $pengurusService){
        $this->pengurusService = $pengurusService;
    }
   public function index(Request $request)
    {
        try {
             
            $pengurus = $this->pengurusService->getAll();
           
            return view('admin.pengurus.index', compact('pengurus'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get Pengurus: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('admin.pengurus.index')->with($notification);
        }
    }

    public function edit(Request $request): View
    {
        return view('admin.pengurus.edit', [
            'user' => $request->user(),
        ]);
    }

   
    public function store(Request $request)
    {
        try {
            $this->pengurusService->create($request->all());
             $notification = [
                'message' => 'Pengurus created successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->route('admin.pengurus.index')->with($notification);
        }catch(\Exception $e){
            $notification = [
                'message' => 'Failed to create Pengurus: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.pengurus.index')->with($notification);
        }
    }

   
    public function update(Request $request, string $id)
    {
        try {
            $this->pengurusService->update($id, $request->all());

            $notification = [
                'message' => 'Pengurus updated successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.pengurus.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Pengurus: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.pengurus.index')->with($notification);
        }
    }

    
    public function destroy(string $id)
    {
        try {
            $this->pengurusService->delete($id);

            $notification = [
                'message' => 'Pengurus deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.pengurus.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Pengurus: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.pengurus.index')->with($notification);
        }
    }
}
