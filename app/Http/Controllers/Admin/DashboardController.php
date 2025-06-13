<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.index');
    }
    public function message()
    {
        $messages = Message::paginate(10);
        return view('pages.admin.message.index', compact('messages'));
    }

    public function destroyKontak($id)
    {
        $kontak = Message::findOrFail($id);
        // Hapus data dataPenyakitDbd
        $kontak->delete();
        return redirect()->route('dashboard.message')->with('message', 'Message berhasil dihapus !')->with('alert-type', 'success');
    }
}
