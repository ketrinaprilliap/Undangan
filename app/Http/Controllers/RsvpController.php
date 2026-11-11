<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Rsvp;
use App\Models\Tamu;
use App\Models\Acara;

class RsvpController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'status' => 'required|in:hadir,tidak_hadir',
            'jumlah_hadir' => 'required|integer|min:1|max:20',
        ]);

        $tamu = Tamu::firstOrCreate(
            ['nama' => $request->nama],
            ['kode_undangan' => Str::uuid()->toString()]
        );

        $acara = Acara::first();

        if (!$acara) {
            return back()->with('error', 'Data acara belum tersedia.');
        }

        Rsvp::updateOrCreate(
            [
                'tamu_id' => $tamu->id,
                'acara_id' => $acara->id,
            ],
            [
                'status' => $request->status,
                'jumlah_hadir' => $request->jumlah_hadir,
            ]
        );

        return back()->with('success', 'Konfirmasi kehadiran berhasil dikirim!');
    }
}
