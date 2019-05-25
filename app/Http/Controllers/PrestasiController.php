<?php

namespace App\Http\Controllers;

use App\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        if($keyword) {
            $prestasi = Prestasi::where('mahasiswa', "LIKE", "%$keyword%")->paginate(10);
        } else {
            $prestasi = Prestasi::paginate(10);
        }

        return view('prestasi.index', ['prestasi' => $prestasi]);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prestasi = Prestasi::all();
        return view('prestasi.create', ['prestasi' => $prestasi]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Validator::make($request->all(), [
            "mahasiswa" => "required|max:50",
            "predikat"  => "required",
            "tahun"     => "required",
            "tingkat"   => "required",
            "kegiatan"  => "required|max:200"
        ])->validate();

        $prestasi = new Prestasi;
        $prestasi->mahasiswa = $request->mahasiswa;
        $prestasi->predikat = $request->predikat;
        $prestasi->tahun = $request->tahun;
        $prestasi->tingkat = $request->tingkat;
        $prestasi->kegiatan = $request->kegiatan;
        $prestasi->save();

        return redirect()->route('prestasi.index')->with('status', 'Data berhasil ditambahkan');        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.edit', ['prestasi' => $prestasi]);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        \Validator::make($request->all(), [
            "mahasiswa" => "required|max:50",
            "predikat"  => "required",
            "tahun"     => "required",
            "tingkat"   => "required",
            "kegiatan"  => "required|max:200"
        ])->validate();

        $edit = Prestasi::findOrFail($id);
        $edit->mahasiswa = $request->mahasiswa;
        $edit->predikat = $request->predikat;
        $edit->tahun = $request->tahun;
        $edit->tingkat = $request->tingkat;
        $edit->kegiatan = $request->kegiatan;
        $edit->save();

        return redirect()->route('prestasi.index')->with('status', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Prestasi::findOrFail($id);
        $delete->delete();

        return redirect()->route('prestasi.index')->with('status', 'Data berhasil dihapus');
    }
}
