<?php

namespace App\Http\Controllers;

use App\Models\Osis;
use Illuminate\Http\Request;

class OsisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.osis.index', [
            'osis' => Osis::paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.osis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $osis = Osis::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'kelas' => $request->kelas,
            'tugas' => $request->tugas
        ]);

        return redirect()->route('admin.osis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Osis $osis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $osis = Osis::findOrFail($id);  // Fetch the OSIS entry
    return view('admin.osis.edit', compact('osis'));  // Pass to view
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Osis $osis)
    {
        $osis->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'kelas' => $request->kelas,
            'tugas' => $request->tugas
        ]);

        

        return redirect()->route('admin.osis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Osis $osis)
    {
        $osis->delete();

        return redirect()->route('admin.osis.index');
    }
}
