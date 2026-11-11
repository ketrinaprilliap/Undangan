<?php

namespace App\Http\Controllers;

use App\Models\Mempelai;
use App\Models\Acara;
use App\Models\Galeri;
use App\Models\Ucapan;

class UndanganController extends Controller
{
    public function index()
    {
        $mempelai = Mempelai::first();

        $acaras = Acara::orderBy('tanggal')
            ->orderBy('waktu_mulai')
            ->get();

        $galeris = Galeri::where('mempelai_id', $mempelai?->id)
            ->latest()
            ->get();

        $ucapans = Ucapan::with('tamu')
            ->where('is_approved', true)
            ->latest()
            ->get();

        return view('undangan', compact(
            'mempelai',
            'acaras',
            'galeris',
            'ucapans'
        ));
    }
}
