<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\tpPkk;
use Illuminate\Http\Request;

class TpPkkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = tpPkk::all();
        return view('admin.tp_pkk.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tp_pkk.create');
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
     * @param  \App\tpPkk  $tpPkk
     * @return \Illuminate\Http\Response
     */
    public function show(tpPkk $tpPkk)
    {
        return view('admin.tp_pkk.show',compact('tpPkk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tpPkk  $tpPkk
     * @return \Illuminate\Http\Response
     */
    public function edit(tpPkk $tpPkk)
    {
        return view('admin.tp_pkk.edit',compact('tpPkk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tpPkk  $tpPkk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tpPkk $tpPkk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tpPkk  $tpPkk
     * @return \Illuminate\Http\Response
     */
    public function destroy(tpPkk $tpPkk)
    {
        //
    }
}
