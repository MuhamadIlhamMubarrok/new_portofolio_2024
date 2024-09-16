<?php

namespace App\Http\Controllers\Admin;

use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CertificateService;

class CertificateController extends Controller
{
    protected $certificateService;

    public function __construct(CertificateService $certificateService)
    {
        $this->certificateService = $certificateService;
    }
    public function index(Request $request)
    {
        $search = $request->input('search');
         $certificate = Certificate::orderBy('created_at', 'desc')
        ->paginate(5);

        return view('pages.admin.certificate.index', compact('certificate', 'search'));
    }

    public function create()
    {
        return view('pages.admin.certificate.create');
    }

    public function store(Request $request)
    {
        try {
            $this->certificateService->createCertificate($request);
            return redirect()->route('admin.certificate.index')->with('success', 'Certificate created successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to create Certificate: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('pages.admin.certificate.index')->with($notification);
        }
    }

    public function edit(Certificate $certificate)
    {
        return view('pages.admin.certificate.edit', compact('certificate'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->certificateService->updateCertificate($request, $id);
            return redirect()->route('admin.certificate.index')->with('success', 'Certificate updated successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Certificate: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.certificate.index')->with($notification);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->certificateService->delete($id);

            $notification = [
                'message' => 'Certificate deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.certificate.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Certificate: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.certificate.index')->with($notification);
        }
    }
}
