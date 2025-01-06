<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.absen.index', [
            'absen' => Absen::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.absen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $absen = Absen::create([
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'status_kehadiran' => $request->status_kehadiran,
            'keterangan' => $request->keterangan
        ]);

        return redirect ()->route('admin.absen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absen $absen)
    {
        return view('admin.absen.edit', [
            'absen' => $absen
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen $absen)
    {
        $absen->update([
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'status_kehadiran' => $request->status_kehadiran,
            'keterangan' => $request->keterangan
        ]);

        return redirect ()->route('admin.absen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absen $absen)
    {
        $absen->delete();

        return redirect ()->route('admin.absen.index');
    }
}
