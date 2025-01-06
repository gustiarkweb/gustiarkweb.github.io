<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatanekskul extends Model
{
    use HasFactory;

   

    protected $fillable = [
        'hari',
        'waktu',
        'kegiatan',
        'pembina'

    ];
}
