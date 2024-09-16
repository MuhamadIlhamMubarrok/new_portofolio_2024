<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Count;
use Illuminate\Support\Facades\Storage;

class CountService
{
    public function updateCount(Request $request, string $id)
    {
        $count = Count::findOrFail($id);
        $request->validate([
            'judul_count' => 'nullable|string|max:255',
            'count' => 'nullable|integer',
            'deskripsi' => 'nullable|string',
        ]);
        $data = [
            'judul_count' => $request->judul_count,
            'count' => $request->count,
            'deskripsi' => $request->deskripsi,
        ];

        $count->update($data);

        return $count;
    }

    public function createCount($request)
    {
        $request->validate([
            'judul_count' => 'nullable|string|max:255',
            'count' => 'nullable|integer',
            'deskripsi' => 'nullable|string',
        ]);

         $data = [
           'judul_count' => $request->judul_count,
            'count' => $request->count,
            'deskripsi' => $request->deskripsi,
        ];

        return Count::create($data);
       
    }

    public function destroy($id)
    {
        $count = Count::findOrFail($id);
        return $count->delete();
    }
}
