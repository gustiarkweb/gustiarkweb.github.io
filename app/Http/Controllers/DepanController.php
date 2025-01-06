<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Slider;
use Illuminate\Http\Request;

class DepanController extends Controller
{
    public function home(){
        return view('home.home', [
            'slider' => Slider::paginate(1),
            'artikel' => Artikel::paginate(3)
        ]);
       
    }

public function artikel(){
    return view('home.artikel', [
        'artikel' => Artikel::paginate(6)
        
    ]);

    }

public function artikeldetail($slug){


    return view('home.artikeldetail', [
        'artikel' => Artikel::where('slug', $slug)->get()
    ]);
}


}
