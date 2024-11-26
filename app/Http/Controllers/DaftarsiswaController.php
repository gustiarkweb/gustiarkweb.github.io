<?php


namespace App\Http\Controllers;


use App\Models\Daftarsiswa;
use Illuminate\Http\Request;


class DaftarsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.daftarsiswa.index' , [
            'daftarsiswa' => Daftarsiswa::paginate(5)
        ]);


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.daftarsiswa.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $daftarsiswa = Daftarsiswa::create([
            'nis' => $request->nis,
            'nomor_pendaftaran' => $request->nomor_pendaftaran,
            'nama_peserta_didik' => $request->nama_peserta_didik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asal_sekolah' => $request->asal_sekolah,
            'ket' => $request->ket
        ]);


        return redirect()->route('admin.daftarsiswa.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Daftarsiswa $daftarsiswa)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Daftarsiswa $daftarsiswa)
    {
        return view('admin.daftarsiswa.edit', [
            'daftarsiswa' => $daftarsiswa
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Daftarsiswa $daftarsiswa)
    {
        $daftarsiswa->update([
            'nis' => $request->nis,
            'nomor_pendaftaran' => $request->nomor_pendaftaran,
            'nama_peserta_didik' => $request->nama_peserta_didik,
            'jenis_kelamin' => $request->jenis_kelamin,
            'asal_sekolah' => $request->asal_sekolah,
            'ket' => $request->ket
        ]);


        return redirect()->route('admin.daftarsiswa.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Daftarsiswa $daftarsiswa)
    {
        $daftarsiswa->delete();


        return redirect()->route('admin.daftarsiswa.index');
    }
}



