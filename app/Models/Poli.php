<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poli extends model
{
    use HasFactory;

    protected $fillable = [
        'kode_polis',
        'nama',
        'biaya',
        'deskripsi',
        'is_aktif',
    ];
}