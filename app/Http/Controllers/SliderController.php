<?php

namespace App\Http\Controllers;

use App\Models\Slider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.slider.index', [
            'slider' => Slider::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider = Slider::create([
            'gambar' => $request->file('gambar')->store('slider','public'),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'link' => $request->link
        ]);

        return redirect()->route('admin.slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
       return view('admin.slider.edit', [
           'slider' => $slider
       ]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Slider $slider)
    {
        $slider->update([
            'gambar' => $request->file('gambar')->store('slider','public'),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi, 
            'link' => $request->link
        ]);

        return redirect()->route('admin.slider.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        storage::delete($slider->gambar);
        $slider->delete();
    }
}
