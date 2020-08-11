<?php

namespace App\Http\Controllers;

use App\Datamahasiswa;
use DataTables;
use Illuminate\Http\Request;
//use Yajra\DataTables\Facades\DataTables;

class DatamahasiswaControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mhs_list()
    {
        return Datatables::of(datamahasiswa::all())->make(true);
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
     * @param  \App\Datamahasiswa  $datamahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Datamahasiswa $datamahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datamahasiswa  $datamahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Datamahasiswa $datamahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Datamahasiswa  $datamahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Datamahasiswa $datamahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Datamahasiswa  $datamahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Datamahasiswa $datamahasiswa)
    {
        //
    }
}
