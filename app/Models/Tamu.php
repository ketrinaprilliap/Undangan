<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $fillable = [
        'nama',
        'email',
        'nomor_telepon',
        'kode_undangan',
    ];

    public function rsvps()
    {
        return $this->hasMany(Rsvp::class);
    }
}
