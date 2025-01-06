<?php

namespace App\Http\Controllers;

use App\Models\Daftarguru;
use Illuminate\Http\Request;

class DaftarguruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.daftarguru.index' , [
           'daftarguru' => Daftarguru::paginate(5)
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.daftarguru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $daftarguru = Daftarguru::create([
            'nama' => $request->nama,
            'nomorinduk' => $request->nomorinduk,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jk' => $request->jk,
            'golongan' => $request->golongan,
            'pendidikanterakhir' => $request->pendidikanterakhir,
            'users_id' => $request->users_id
        ]);

        return redirect()->route('admin.daftarguru.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Daftarguru $daftarguru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftarguru $daftarguru)
    {
       return view('admin.daftarguru.edit', [
           'daftarguru' => $daftarguru
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftarguru $daftarguru)
    {
        $daftarguru->update([
            'nama' => $request->nama,
            'nomorinduk' => $request->nomorinduk,
            'jabatan' => $request->jabatan,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'jk' => $request->jk,
            'golongan' => $request->golongan,
            'pendidikanterakhir' => $request->pendidikanterakhir,
            'users_id' => $request->users_id
        ]);

        return redirect()->route('admin.daftarguru.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftarguru $daftarguru)
    {
        $daftarguru->delete();

        return redirect()->route('admin.daftarguru.index');
    }
}
