<?php

namespace App\Http\Controllers;

use App\berita;
use App\kategori_berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = berita::paginate(25);

        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_berita = kategori_berita::pluck('nama', 'id');

        return view('berita.create')->with('kategori_berita', $kategori_berita);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        berita::create($input);

        return redirect(route('berita.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $berita = berita::find($id);

        return view('berita.show', compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = berita::find($id);

        $kategori_berita = kategori_berita::pluck('nama', 'id');
        $selected = kategori_berita::pluck('nama', 'id');

        return view('berita.edit', compact('berita', 'kategori_berita', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = $request->all();
        berita::find($id)->update($edit);

        return redirect(route('berita.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        berita::destroy($id);

        return redirect(route('berita.index'));
    }
}
