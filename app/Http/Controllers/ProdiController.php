<?php

namespace App\Http\Controllers;

use App\prodi;
use App\mahasiswa;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infoprodi = prodi::all();
        return view('prodi',['infoprodiview'=>$infoprodi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('prodiform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataformprodi = new prodi;
        $dataformprodi->nama = $request->namaprodi;
        $dataformprodi->save();
        return redirect('prodi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function show(prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function edit(prodi $prodi)
    {
        return view('prodiedit',['editdataprodi'=> $prodi]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, prodi $prodi)
    {
        $prodi->nama = $request->nama;
        $prodi->save();
        return redirect('prodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\prodi  $prodi
     * @return \Illuminate\Http\Response
     */
    public function destroy(prodi $prodi)
    {
        $mahasiswa = mahasiswa::where('prodi_id', $prodi->id)->delete();
        $prodi->delete();
        return redirect('prodi');
    }
}
