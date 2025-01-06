<?php


namespace App\Http\Controllers;


use App\Models\Artikel;
use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.artikel.index', [
            'artikel' => Artikel::paginate(5),
            'kategori' => Kategori::all(),
            'tag' => Tag::all()
        ]);


    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artikel.create', [
            'kategori' => Kategori::all(),
            'tag' => Tag::all()
        ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artikel = Artikel::create([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'des' => $request->des,
            'image' => $request->file ('image')->store('artikel','public'),
            'user_id' => Auth::id()
        ]);


        if ($request->has('kategori') && is_array($request->kategori)) {
            foreach ($request->kategori as $kategori) {
                $artikel->kategori()->attach($kategori);
            }
       
        }


        if ($request->has('tag') && is_array($request->tag)) {
            foreach ($request->tag as $tag) {
                $artikel->tag()->attach($tag);
            }
       
        }


        return redirect()->route('admin.artikel.index');


    }


    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', [
            'artikel' => $artikel,
            'kategori' => Kategori::all(),
            'tag' => Tag::all()
           
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $artikel->update([
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'des' => $request->des,
            'image' => $request->file ('image')->store('artikel','public'),
            'user_id' => Auth::id()
        ]);


        return redirect()->route('admin.artikel.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        storage::delete($artikel->image);
        $artikel->delete();


        return redirect()->route('admin.artikel.index');
    }
}



