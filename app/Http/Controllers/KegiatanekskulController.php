<?php

namespace App\Http\Controllers;

use App\Models\Kegiatanekskul;
use Illuminate\Http\Request;

class KegiatanekskulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kegiatanekskul.index', [
            'kegiatanekskul' => Kegiatanekskul::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kegiatanekskul.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kegiatanekskul = Kegiatanekskul::create([
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'kegiatan' => $request->kegiatan,
            'pembina' => $request->pembina

        ]);

        return redirect()->route('admin.kegiatanekskul.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kegiatanekskul $kegiatanekskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kegiatanekskul $kegiatanekskul)
    {
        return view('admin.kegiatanekskul.edit', [
            'kegiatanekskul' => $kegiatanekskul
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kegiatanekskul $kegiatanekskul)
    {
        $kegiatanekskul->update([
            'hari' => $request->hari,
            'waktu' => $request->waktu,
            'kegiatan' => $request->kegiatan,
            'pembina' => $request->pembina
        ]);

        return redirect()->route('admin.kegiatanekskul.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kegiatanekskul $kegiatanekskul)
    {
        $kegiatanekskul->delete();

        return redirect()->route('admin.kegiatanekskul.index');
    }
}
