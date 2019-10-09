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
        $kategori_berita = kategori_berita::paginate(25);

        return view('kategori_berita.index', compact('kategori_berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_berita.create');
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

        kategori_berita::create($input);

        return redirect(route('kategori_berita.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori_berita = kategori_berita::find($id);

        return view('kategori_berita.show', compact('kategori_berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_berita = kategori_berita::find($id);

        return view('kategori_berita.edit', compact('kategori_berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = $request->all();
        kategori_berita::find($id)->update($edit);

        return redirect(route('kategori_berita.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_berita  $kategori_berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori_berita::find($id)->delete();

        return redirect(route('kategori_berita.index'));
    }
}
