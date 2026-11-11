<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ucapan extends Model
{
    protected $fillable = [
        'tamu_id',
        'pesan',
        'is_approved',
    ];

    public function tamu()
    {
        return $this->belongsTo(Tamu::class);
    }
}
