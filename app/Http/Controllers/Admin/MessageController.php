<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('pages.admin.message.index', compact('messages'));
    }

    public function destroy($id)
    {
        try {
            $message = Message::findOrFail($id);
            $message->delete();

            $notification = [
                'message' => 'Message deleted successfully!',
                'alert-type' => 'success',
            ];
        } catch (\Exception $e) {
            $notification = [
                'message' => 'Failed to delete message: ' . $e->getMessage(),
                'alert-type' => 'error',
            ];
        }

        return redirect()->route('admin.message.index')->with($notification);
    }
}
