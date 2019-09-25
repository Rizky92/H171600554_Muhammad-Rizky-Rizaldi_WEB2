<?php

namespace App\Http\Controllers;

use App\kategori_artikel;
use Illuminate\Http\Request;

class KategoriArtikelController extends Controller
{


    // Call the model file

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategori_artikel = kategori_artikel::all();

        return view('kategori_artikel.index', compact('kategori_artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function show(kategori_artikel $kategori_artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori_artikel $kategori_artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori_artikel $kategori_artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori_artikel $kategori_artikel)
    {
        //
    }
}
