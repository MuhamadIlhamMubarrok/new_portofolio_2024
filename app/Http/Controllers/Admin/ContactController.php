<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;
use Illuminate\View\View;
class ContactController extends Controller
{
    protected $contactService;
    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }

     public function edit(Request $request): View
    {
        return view('admin.contact.edit', [
            'user' => $request->user(),
        ]);
    }

    public function indexContact()
    {
        try {
            $contact = Contact::first();
            return view('pages.admin.contact.index', compact('contact'));
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to get Contact: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];

            return view('pages.admin.contact.index')->with($notification);
        }
    }

    

    public function updateContact(Request $request, string $id)
    {
        try {
            $this->contactService->updateContact($request, $id);

            $notification = [
                'message' => 'Contact Updated Successfully',
                'alert-type' => 'success',
            ];
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to Update Contact: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];
        }

        return redirect()->route('admin.contact.index')->with($notification);
    }
}
