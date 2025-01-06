<?php

namespace App\Http\Controllers;

use App\Models\Udin;
use Illuminate\Http\Request;

class UdinController extends Controller
{
    public function udinindex(){
        return view('admin.data.udin',[
            'udin' => Udin::all()
        ]);
    }

    public function udincreate(){
        return view('admin.data.udin2');
    }

    public function store(Request $request){
        $udin = Udin::create ([
            'nama' => $request->nama
        ]);
    }

    public function udinedit($id){
        return view('admin.data.udin3', compact('id'));
    }

    public function update(Request $request, $id){
        $udin  = udin::find($id);   
        $udin->update([
            'nama' => $request->nama
        ]);

    }

    public function udindelete($id){
        return view('admin.data.udin4', compact('id'));
    }
}
