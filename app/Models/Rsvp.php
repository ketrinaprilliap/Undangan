<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rsvp extends Model
{
    protected $fillable = [
        'tamu_id',
        'acara_id',
        'status',
        'jumlah_hadir',
    ];

    public function tamu()
    {
        return $this->belongsTo(Tamu::class);
    }

    public function acara()
    {
        return $this->belongsTo(Acara::class);
    }
}
