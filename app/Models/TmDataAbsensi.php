<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmDataAbsensi extends Model
{
    protected $table = 'tm_data_absensi';

    protected $fillable = ['tanggal', 'anggota', 'dokumentasi', 'keterangan'];

    protected $casts = [
        'anggota' => 'array' // Cast anggota attribute to an array
    ];
}
