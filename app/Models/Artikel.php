<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Artikel extends Model
{
    use HasFactory;


    protected $table = 'artikels';


    protected $fillable = [
        'judul',
        'slug',
        'des',
        'image',
    ];


    public function kategori()
    {
        return $this->belongsToMany(Kategori::class);
    }


    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
}



