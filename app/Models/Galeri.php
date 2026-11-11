<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
        'mempelai_id',
        'judul',
        'foto',
        'deskripsi',
    ];

    public function mempelai()
    {
        return $this->belongsTo(Mempelai::class);
    }
}