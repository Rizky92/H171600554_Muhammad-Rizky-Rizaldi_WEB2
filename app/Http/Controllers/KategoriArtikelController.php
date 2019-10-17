<?php

namespace App\Http\Controllers;

use App\kategori_artikel;
use Illuminate\Http\Request;

class KategoriArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategori_artikel = kategori_artikel::paginate(25);

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
        $input = $request->all();

        kategori_artikel::create($input);

        return redirect(route('kategori_artikel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kategori_artikel = kategori_artikel::find($id);

        return view('kategori_artikel.show', compact('kategori_artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\kategori_artikel  $kategori_artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori_artikel = kategori_artikel::find($id);

        return view('kategori_artikel.edit', compact('kategori_artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori_artikel->id  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = $request->all();
        kategori_artikel::find($id)->update($edit);

        return redirect(route('kategori_artikel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori_artikel->id  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kategori_artikel::find($id)->delete();

        return redirect(route('kategori_artikel.index'));
    }

    /**
     * View trashed resources from the storage.
     *
     * @return \Illuminate\Http\Response
     */

    public function onlyTrashed()
    {
        $kategori_artikel = kategori_artikel::onlyTrashed()->paginate(25);

        return view('kategori_artikel.index', compact('kategori_artikel'));
    }

    /**
     * View trashed resources along with existing records from the storage.
     *
     * @return \Illuminate\Http\Response
     */

    public function withTrashed()
    {
        $kategori_artikel = kategori_artikel::withTrashed()->paginate(25);

        return view('kategori_artikel.index', compact('kategori_artikel'));
    }

    /**
     * Restore all trashed resources in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function restore(Request $request)
    {
        kategori_artikel::restore();

        return redirect(route('kategori_artikel.withTrashed'));
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param  \App\kategori_artikel->id  $id
     * @return \Illuminate\Http\Response
     */

    public function delete()
    {
        kategori_artikel::onlyTrashed()->forceDelete();

        return redirect(route('kategori_artikel.index'));
    }
}
