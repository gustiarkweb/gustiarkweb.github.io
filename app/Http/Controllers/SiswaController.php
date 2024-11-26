<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('admin.siswa.index', [
          'siswa' => Siswa::all()
      ]);
      
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('admin.siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $siswa = Siswa::create([
           'nama_depan' => $request->nama_depan,
           'nama_belakang' => $request->nama_belakang,
           'nis' => $request->nis,
           'jenis_kelamin' => $request->jenis_kelamin,
           'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
           'alamat' => $request->alamat,
           'agama' => $request->agama,
           'kelas' => $request->kelas,
           'hobi' => $request->hobi,
           'email' => $request->email,
          'gambar' => $request->file('gambar')->store('siswa','public')
       ]);

       return redirect()->route('admin.siswa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
      return view('admin.siswa.edit', [
          'siswa' => $siswa
      ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $siswa->update([
            'nama_depan' => $request->nama_depan,
        'nama_belakang' => $request->nama_belakang,
        'nis_nisn' => $request->nis_nisn,
        'jenis_kelamin' => $request->jenis_kelamin,
        'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
        'alamat' => $request->alamat,
        'agama' => $request->agama,
        'kelas' => $request->kelas,
        'hobi' => $request->hoby,
        'email' => $request->email,
        'gambar' => $request->file('gambar')->store('siswa','public')
        ]);
        return redirect()->route('admin.artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        storage::delete($siswa->gambar);
        $siswa->delete();

        return redirect()->route('admin.siswa.index');
    }
}
