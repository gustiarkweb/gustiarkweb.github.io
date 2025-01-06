<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.nilai.index', [
           'nilai' => Nilai::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nilai = Nilai::create([
            'users_id' => $request->users_id,
            'kkm' => $request->kkm,
            'deskripsi_a' => $request->deskripsi_a,
            'deskripsi_b' => $request->deskripsi_b,
            'deskripsi_c' => $request->deskripsi_c,
            'deskripsi_d' => $request->deskripsi_d
        ]);

        return redirect()->route('admin.nilai.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Nilai $nilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        return view('admin.nilai.edit', [
            'nilai' => $nilai
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        $nilai->update([
            'users_id' => $request->users_id,
            'kkm' => $request->kkm,
            'deskripsi_a' => $request->deskripsi_a,
            'deskripsi_b' => $request->deskripsi_b,
            'deskripsi_c' => $request->deskripsi_c,
            'deskripsi_d' => $request->deskripsi_d
        ]);

        return redirect()->route('admin.nilai.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        $nilai->delete();

        return redirect()->route('admin.nilai.index');
    }

}
