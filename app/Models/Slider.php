<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';

    protected $fillable = [
        'gambar',
        'judul',
        'deskripsi',
        'link',
    ];

    public function getPictureAttribute()
    {
        return asset('storage/' . $this->gambar);
    }
}
