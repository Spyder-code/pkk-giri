<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\dataKeluarga;
use Illuminate\Http\Request;

class DataKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dataKeluarga::all();
        return view('admin.data_keluarga.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_keluarga.create');
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
     * @param  \App\dataKeluarga  $dataKeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(dataKeluarga $dataKeluarga)
    {
        return view('admin.data_keluarga.show',compact('dataKeluarga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dataKeluarga  $dataKeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(dataKeluarga $dataKeluarga)
    {
        return view('admin.data_keluarga.edit',compact('dataKeluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dataKeluarga  $dataKeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataKeluarga $dataKeluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dataKeluarga  $dataKeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataKeluarga $dataKeluarga)
    {
        //
    }
}
