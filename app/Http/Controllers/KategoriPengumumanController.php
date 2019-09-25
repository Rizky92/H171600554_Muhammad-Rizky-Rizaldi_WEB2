<?php

namespace App\Http\Controllers;

use App\kategori_pengumuman;
use Illuminate\Http\Request;

class KategoriPengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori_pengumuman = kategori_pengumuman::all();

        return view('kategori_pengumuman.index', compact('kategori_pengumuman'));
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
     * @param  \App\kategori_pengumuman  $kategori_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(kategori_pengumuman $kategori_pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_pengumuman  $kategori_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(kategori_pengumuman $kategori_pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_pengumuman  $kategori_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kategori_pengumuman $kategori_pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_pengumuman  $kategori_pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(kategori_pengumuman $kategori_pengumuman)
    {
        //
    }
}
