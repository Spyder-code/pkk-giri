<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\catatanKeluarga;
use Illuminate\Http\Request;

class CatatanKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = catatanKeluarga::all();
        return view('admin.catatan_keluarga.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.catatan_keluarga.create');
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
     * @param  \App\catatanKeluarga  $catatanKeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(catatanKeluarga $catatanKeluarga)
    {
        return view('admin.catatan_keluarga.show',compact('catatanKeluarga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\catatanKeluarga  $catatanKeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(catatanKeluarga $catatanKeluarga)
    {
        return view('admin.catatan_keluarga.edit',compact('catatanKeluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\catatanKeluarga  $catatanKeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catatanKeluarga $catatanKeluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\catatanKeluarga  $catatanKeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(catatanKeluarga $catatanKeluarga)
    {
        //
    }
}
