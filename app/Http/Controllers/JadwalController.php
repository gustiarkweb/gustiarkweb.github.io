<?php


namespace App\Http\Controllers;


use App\Models\Jadwal;
use Illuminate\Http\Request;


class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.jadwal.index' , [
            'jadwal' => Jadwal::paginate(5)
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jadwal.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jadwal = Jadwal::create([
            'hari' => $request->hari,
            'jam' => $request->jam,
            'mata_pelajaran' => $request->mata_pelajaran,
            'guru' => $request->guru,
            'kelas' => $request->kelas
        ]);


        return redirect()->route('admin.jadwal.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jadwal $jadwal)
    {
        return view('admin.jadwal.edit', [
            'jadwal' => $jadwal
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $jadwal->update([
            'hari' => $request->hari,
            'jam' => $request->jam,
            'mata_pelajaran' => $request->mata_pelajaran,
            'guru' => $request->guru,
            'kelas' => $request->kelas
        ]);


        return redirect()->route('admin.jadwal.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();


        return redirect()->route('admin.jadwal.index');
    }
}



