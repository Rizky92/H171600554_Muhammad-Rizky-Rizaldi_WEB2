<?php

namespace App\Http\Controllers;

use App\artikel;
use App\kategori_artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::all();

        return view('artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_artikel = kategori_artikel::pluck('nama', 'id');

        return view('artikel.create')->with('kategori_artikel', $kategori_artikel);
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

        artikel::create($input);

        return redirect(route('artikel.index')->with('Success', 'Article successfully added'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $artikel = artikel::findOrFail($id);

        return view('artikel.show', compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = artikel::find($id);

        $kategori_artikel = kategori_artikel::pluck('nama', 'id');
        $selected = $artikel->kategori_artikel->pluck('nama', 'id');

        return view('artikel.edit', compact('artikel', 'kategori_artikel', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = $request->all();
        artikel::find($id)->update($edit);

        return redirect(route('artikel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Beta process :)
        /*
        artikel::findOrFail($id)->delete();

        return redirect(route('artikel.index'));
        */
    }
}
