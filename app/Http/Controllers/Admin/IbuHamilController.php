<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\ibuHamil;
use Illuminate\Http\Request;

class IbuHamilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ibuHamil::all();
        return view('admin.ibu_hamil.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ibu_hamil.create');
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
     * @param  \App\ibuHamil  $ibuHamil
     * @return \Illuminate\Http\Response
     */
    public function show(ibuHamil $ibuHamil)
    {
        return view('admin.ibu_hamil.show',compact('ibuHamil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ibuHamil  $ibuHamil
     * @return \Illuminate\Http\Response
     */
    public function edit(ibuHamil $ibuHamil)
    {
        return view('admin.ibu_hamil.edit',compact('ibuHamil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ibuHamil  $ibuHamil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ibuHamil $ibuHamil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ibuHamil  $ibuHamil
     * @return \Illuminate\Http\Response
     */
    public function destroy(ibuHamil $ibuHamil)
    {
        //
    }
}
