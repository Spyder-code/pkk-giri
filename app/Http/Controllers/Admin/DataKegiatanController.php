<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\dataKegiatan;
use Illuminate\Http\Request;

class DataKegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dataKegiatan::all();
        return view('admin.data_kegiatan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.data_kegiatan.create');
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
     * @param  \App\dataKegiatan  $dataKegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(dataKegiatan $dataKegiatan)
    {
        return view('admin.data_kegiatan.show',compact('dataKegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\dataKegiatan  $dataKegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(dataKegiatan $dataKegiatan)
    {
        return view('admin.data_kegiatan.edit',compact('dataKegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\dataKegiatan  $dataKegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dataKegiatan $dataKegiatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\dataKegiatan  $dataKegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(dataKegiatan $dataKegiatan)
    {
        //
    }
}
