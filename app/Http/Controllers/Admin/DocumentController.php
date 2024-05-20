<?php

namespace App\Http\Controllers;

use App\Services\DocumentService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DocumentController extends Controller
{
    protected $documentService;
    public function __construct(DocumentService $documentService){
        $this->documentService = $documentService;
    }
   public function index(Request $request)
    {
        try {
             
            $document = $this->documentService->getAll();
           
            return view('admin.document.index', compact('document'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get Document: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('admin.document.index')->with($notification);
        }
    }

    public function edit(Request $request): View
    {
        return view('admin.document.edit', [
            'user' => $request->user(),
        ]);
    }

   
    public function store(Request $request)
    {
        try {
            $this->documentService->create($request->all());
             $notification = [
                'message' => 'Document created successfully!',
                'alert-type' => 'success',
            ];
            return redirect()->route('admin.document.index')->with($notification);
        }catch(\Exception $e){
            $notification = [
                'message' => 'Failed to create Document: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.document.index')->with($notification);
        }
    }

   
    public function update(Request $request, string $id)
    {
        try {
            $this->documentService->update($id, $request->all());

            $notification = [
                'message' => 'Document updated successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.document.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Document: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.document.index')->with($notification);
        }
    }

    
    public function destroy(string $id)
    {
        try {
            $this->documentService->delete($id);

            $notification = [
                'message' => 'Document deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.document.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Document: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.document.index')->with($notification);
        }
    }
}
