<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswas';

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'nis',
        'jenis_kelamin',
        'tempat_tanggal_lahir',
        'alamat',
        'agama',
        'kelas',
        'hobi',
        'email',
        'gambar',

    ];
    public function getPictureAttribute()
    {
        return asset('storage/' . $this->gambar);
    }
}
