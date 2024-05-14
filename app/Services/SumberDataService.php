<?php

namespace App\Services;
use Illuminate\Http\Request;
use App\Models\SumberData;

class SumberDataService
{
    /**
     * Create a new class instance.
     */
    public function updateSumberData(Request $request, string $id)
    {
        $sumberData = SumberData::findOrFail($id);

        $data = [
            "jumlah_lembaga" => $request->jumlah_lembaga,
            "jumlah_guru" => $request->jumlah_guru,
            "jumlah_peserta" => $request->jumlah_peserta,
            "jumlah_rombel" => $request->jumlah_rombel,
        ];

        $sumberData->update($data);

        return $sumberData;

    }
}
