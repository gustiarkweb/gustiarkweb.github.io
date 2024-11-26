<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Daftarsiswa extends Model
{
    use HasFactory;


    protected $table = 'daftarsiswas';


    protected $fillable = [
        'nis',
        'nomor_pendaftaran',
        'nama_peserta_didik',
        'jenis_kelamin',
        'asal_sekolah',
        'ket',
    ];
}



