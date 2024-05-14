<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactService
{
    /**
     * Create a new class instance.
     */
    public function updateContact(Request $request, string $id)
    {
        $contact = Contact::findOrFail($id);

        $data = [
            'alamat' => $request->alamat,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
        ];

        $contact->update($data);

        return $contact;
    }
}
