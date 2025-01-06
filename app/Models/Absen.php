<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absen extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'tanggal',
        'nama',
        'kelas',
        'status_kehadiran',
        'keterangan',
    ];
}
