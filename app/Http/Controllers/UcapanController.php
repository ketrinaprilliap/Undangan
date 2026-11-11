<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ucapan;
use App\Models\Tamu;
use Illuminate\Support\Str;

class UcapanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'pesan' => 'required|string|max:1000',
        ]);

        $tamu = Tamu::firstOrCreate(
            ['nama' => $request->nama],
            ['kode_undangan' => Str::uuid()->toString()]
        );

        Ucapan::create([
            'tamu_id' => $tamu->id,
            'pesan' => $request->pesan,
            'is_approved' => false,
        ]);

        return back()->with(
            'success_ucapan',
            'Terima kasih, ucapan Anda berhasil dikirim!'
        );
    }
}