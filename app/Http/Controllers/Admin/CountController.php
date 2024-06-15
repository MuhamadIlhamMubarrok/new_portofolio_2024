<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Count;
use App\Services\CountService;
use Illuminate\Http\Request;

class CountController extends Controller
{
    protected $countService;

    public function __construct(CountService $countService)
    {
        $this->countService = $countService;
    }
    public function index()
    {
        $counts = Count::all();
        return view('pages.admin.counts.index', compact('counts'));
    }

    public function create()
    {
        return view('pages.admin.counts.create');
    }

    public function store(Request $request)
    {
        try {
            $this->countService->createCount($request);
            return redirect()->route('admin.count.index')->with('success', 'Count created successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to create Count: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.count.index')->with($notification);
        }
    }

    public function edit(string $id)
    {
        $count = Count::findOrFail($id);
        return view('pages.admin.counts.edit', compact('count'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->countService->updateCount($request, $id);
            return redirect()->route('admin.count.index')->with('success', 'Count updated successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Count: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.count.index')->with($notification);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->countService->destroy($id);

            $notification = [
                'message' => 'Count deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.count.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Article: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.count.index')->with($notification);
        }
    }
}
