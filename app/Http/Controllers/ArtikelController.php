<?php

namespace App\Http\Controllers;

use App\artikel;
use App\kategori_artikel;
use Illuminate\Http\Request;
use App\Http\Controllers\TrashedArtikels;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = artikel::paginate(25);
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
        return view('artikel.create', compact('kategori_artikel'));
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
        return redirect(route('artikel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\artikel  $artikel
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $artikel = artikel::find($id);
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
        return view('artikel.edit', compact('artikel', 'kategori_artikel'));
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
        artikel::where('id', $id)->update($edit);
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
        artikel::where('id', $id)->delete();
        return redirect(route('artikel.index'));
    }

    /**
     * View trashed resources from the storage.
     *
     * @return \Illuminate\Http\Response
     */

    public function onlyTrashed()
    {
        $artikel = artikel::onlyTrashed()->paginate(25);
        return view('artikel.index', compact('artikel'));
    }

    /**
     * View trashed resources along with existing records from the storage.
     *
     * @return \Illuminate\Http\Response
     */

    public function withTrashed()
    {
        $artikel = artikel::withTrashed()->paginate(25);
        return view('artikel.index', compact('artikel'));
    }

    /**
     * Restore all trashed resources in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function restore(Request $request)
    {
        artikel::restore();
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
        artikel::onlyTrashed()->forceDelete();
        return redirect(route('artikel.index'));
    }
}
