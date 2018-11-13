<?php

namespace App\Http\Controllers;

use App\mahasiswa;
use App\prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infomhs = mahasiswa::all();
        return view('mhs',['infomhsview'=>$infomhs]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listprodi = prodi::all();
        return view('mhsform',['pilihanprodi'=>$listprodi]);
            }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataformmhs = new mahasiswa;
        $dataformmhs->nim = $request->NIM;
        $dataformmhs->nama = $request->nama;
        $dataformmhs->prodi_id = $request->prodi;
        $dataformmhs->save();
        return redirect('mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(mahasiswa $mahasiswa)
    {
        $listprodi = prodi::all();
        return view('mhsedit',['editdatamhs'=> $mahasiswa, 'pilihanprodi'=>$listprodi]);    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mahasiswa $mahasiswa)
    {
        $mahasiswa->nim = $request->NIM;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->prodi_id = $request->prodi; 
        $mahasiswa->save();
        return redirect('mahasiswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect('mahasiswa');
    }
}
