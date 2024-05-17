<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CertificateService;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    protected $certificateService;
    public function __construct(CertificateService $certificateService){
        $this->certificateService = $certificateService;
    }
    public function index()
    {
        try{
             $certicate = $this->certificateService->getAll();
             return view('admin.certicate.index', compact('certicate'));
        }catch(\Exception $e){
             $notification = [
                'message' => 'Failed to get Articles: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('admin.certicate.index')->with($notification);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
