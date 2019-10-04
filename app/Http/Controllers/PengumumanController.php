<?php

namespace App\Http\Controllers;

use App\pengumuman;
use App\kategori_pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = pengumuman::all();

        return view('pengumuman.index', compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_pengumuman = kategori_pengumuman::pluck('nama', 'id');

        return view('pengumuman.create')->with('kategori_pengumuman', $kategori_pengumuman);
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

        pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengumuman = pengumuman::find($id);

        return view('pengumuman.show', compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengumuman $pengumuman)
    {
        //
    }
}
