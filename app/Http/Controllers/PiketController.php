<?php

namespace App\Http\Controllers;

use App\Models\Piket;
use Illuminate\Http\Request;

class PiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.piket.index', [
            'piket' => Piket::paginate(5)
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.piket.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $piket = Piket::create([
            'hari' => $request->hari,
            'nama' => $request->nama
            
            
        ]);

        return redirect()->route('admin.piket.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Piket $piket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Piket $piket)
    {
       return view('admin.piket.edit', [
           'piket' => $piket
       ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Piket $piket)
    {
        $piket->update([
            'hari' => $request->hari,
            'nama' => $request->nama
            
            
        ]);

        return redirect()->route('admin.piket.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Piket $piket)
    {
        $piket->delete();

        return redirect()->route('admin.piket.index');
    }
}
