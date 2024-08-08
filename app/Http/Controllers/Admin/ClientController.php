<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    protected $clientService;

    public function __construct(ClientService $clientService)
    {
        $this->clientService = $clientService;
    }
    public function index(Request $request)
    {
        $search = $request->input('search');
        $clients = Client::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        })->orderBy('created_at', 'desc')->paginate(5);

        return view('pages.admin.client.index', compact('clients', 'search'));
    }

    public function create()
    {
        return view('pages.admin.client.create');
    }

    public function store(Request $request)
    {
        try {
            $this->clientService->createClient($request);
            return redirect()->route('admin.client.index')->with('success', 'Client created successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to create Client: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('pages.admin.client.index')->with($notification);
        }
    }

    public function edit(Client $client)
    {
        return view('pages.admin.client.edit', compact('client'));
    }

    public function update(Request $request, string $id)
    {
        try {
            $this->clientService->updateClient($request, $id);
            return redirect()->route('admin.client.index')->with('success', 'Client updated successfully.');
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to update Client: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.client.index')->with($notification);
        }
    }

    public function destroy(string $id)
    {
        try {
            $this->clientService->delete($id);

            $notification = [
                'message' => 'Client deleted successfully!',
                'alert-type' => 'success',
            ];

            return redirect()->route('admin.client.index')->with($notification);
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete Client: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return redirect()->route('admin.client.index')->with($notification);
        }
    }
}
