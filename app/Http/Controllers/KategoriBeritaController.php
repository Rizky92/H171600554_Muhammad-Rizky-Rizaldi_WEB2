<?php

namespace App\Http\Controllers;

use App\kategori_berita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_berita = kategori_berita::all();

        return view('kategori_berita.index', compact('kategori_berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function show(kategori_berita $kategori_berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori_berita $kategori_berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori_berita $kategori_berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori_berita $kategori_berita)
    {
        //
    }
}
