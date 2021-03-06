<?php

namespace App\Http\Controllers;

use App\galeri;
use App\kategori_galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = galeri::paginate(25);
        return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori_galeri = kategori_galeri::pluck('nama', 'id');
        return view('galeri.create', compact('kategori_galeri'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->except('path');
        $galeri = galeri::create($input);

        if ($request->has('path'))
        {
            $char = "0123456789abcedf";
            $str = '';

            for ($i = 0; $i < 32; $i++) {
                $p = rand(0, strlen($char) - 1);
                $str .= $char[$p];
            }

            $file = $request->file('path');
            $filename = $str.$file->getClientOriginalExtension();
            $path = $request->path->storeAs('public/galeri', $filename. 'local');

            $galeri['path'] = "storage".substr($path, strpos($path, '/'));
            $galeri->save();
        }
        
        return redirect(route('galeri.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri = galeri::find($id);
        return view('galeri.show', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = galeri::find($id);
        $kategori_galeri = kategori_galeri::pluck('nama', 'id');
        return view('galeri.edit', compact('galeri', 'kategori_galeri', 'selected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = $request->except('path');
        galeri::where('id', $id)->update($edit);

        if ($request->has('path'))
        {
            $char = "0123456789abcedf";
            $str = '';

            for ($i = 0; $i < 32; $i++) {
                $p = rand(0, strlen($char) - 1);
                $str .= $char[$p];
            }

            $file = $request->file('path');
            $filename = $str.$file->getClientOriginalExtension();
            $path = $request->path->storeAs('public/galeri', $filename. 'local');

            $galeri['path'] = "storage".substr($path, strpos($path, '/'));
            $galeri->save();
        }

        return redirect(route('galeri.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        galeri::where('id', $id)->delete();
        return redirect(route('galeri.index'));
    }
}
