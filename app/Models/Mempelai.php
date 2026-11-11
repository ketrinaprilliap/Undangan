<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mempelai extends Model
{
    protected $fillable = [
        'nama_pria',
        'nama_wanita',
        'foto_pria',
        'foto_wanita',
        'deskripsi',
    ];

    public function acaras()
    {
        return $this->hasMany(Acara::class);
    }

    public function galeris()
    {
        return $this->hasMany(Galeri::class);
    }
}
