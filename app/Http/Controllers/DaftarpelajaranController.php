<?php

namespace App\Http\Controllers;

use App\Models\Daftarpelajaran;
use Illuminate\Http\Request;

class DaftarpelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.daftarpelajaran.index', [
            'daftarpelajaran' => Daftarpelajaran::paginate(5)
        ]);
    }
                

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.daftarpelajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $daftarpelajaran = Daftarpelajaran::create([
            'jurusan' => $request->jurusan,
            'mapel' => $request->mapel,
            'guru' => $request->guru
        ]);

        return redirect ()->route('admin.daftarpelajaran.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftarpelajaran $daftarpelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftarpelajaran $daftarpelajaran)
    {
        return view ('admin.daftarpelajaran.edit', [
            'daftarpelajaran' => $daftarpelajaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftarpelajaran $daftarpelajaran)
    {
        $daftarpelajaran->update([
            'jurusan' => $request->jurusan,
            'mapel' => $request->mapel,
            'guru' => $request->guru
        ]);

        return redirect()->route('admin.daftarpelajaran.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftarpelajaran $daftarpelajaran)
    {
        $daftarpelajaran->delete();

        return redirect()->route('admin.daftarpelajaran.index');
    }
}
