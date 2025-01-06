<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarguru extends Model
{
    use HasFactory;

    protected $table = 'daftargurus';

    protected $fillable = [
        'nama',
        'nomorinduk',
        'jabatan',
        'alamat',
        'telp',
        'jk',
        'golongan',
        'pendidikanterakhir',
        
        'users_id',
    ];
}
