<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    protected $fillable = [
        'mempelai_id',
        'nama_acara',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'lokasi',
        'alamat',
    ];

    public function mempelai()
    {
        return $this->belongsTo(Mempelai::class);
    }

    public function rsvps()
    {
        return $this->hasMany(Rsvp::class);
    }
}
