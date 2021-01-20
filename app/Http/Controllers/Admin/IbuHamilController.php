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
        $request->validate([
            'kelompok_dasa_wisma' => 'required',
            'kelompok_pkk_rt' => 'required',
            'kelompok_pkk_rw' => 'required',
            'dusun_lingkungan' => 'required',
            'desa_kelurahan' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'nama_ibu' => 'required',
            'nama_suami' => 'required',
            'status' => 'required',
            'clahir_nama_bayi' => 'required',
            'clahir_jenis_kelamin' => 'required',
            'clahir_tgl_lahir' => 'required',
            'akte_kelahiran' => 'required',
            'nama_ibu_balita_bayi' => 'required',
            'status_ibu_balita_bayi' => 'required',
            'cmati_jenis_kelamin' => 'required',
            'cmati_tgl_meninggal' => 'required',
            'sebab_meninggal' => 'required',
            'keterangan' => 'required',
            'jumlah_ibu_hamil' => 'required',
            'jumlah_ibu_melahirkan' => 'required',
            'jumlah_ibu_nifas' => 'required',
            'jumlah_ibu_meninggal' => 'required',
            'jumlah_bayi_lahir' => 'required',
            'jumlah_bayi_meninggal' => 'required',
            'jumlah_balita_meninggal' => 'required',
        ]);

        ibuHamil::create([
            'kelompok_dasa_wisma' => $request->kelompok_dasa_wisma,
            'kelompok_pkk_rt' => $request->kelompok_pkk_rt,
            'kelompok_pkk_rw' => $request->kelompok_pkk_rw,
            'dusun_lingkungan' => $request->dusun_lingkungan,
            'desa_kelurahan' => $request->desa_kelurahan,
            'bulan' => $request->bulan,
            'tahun' => $request->tahun,
            'nama_ibu' => $request->nama_ibu,
            'nama_suami' => $request->nama_suami,
            'status' => $request->status,
            'clahir_nama_bayi' => $request->clahir_nama_bayi,
            'clahir_jenis_kelamin' => $request->clahir_jenis_kelamin,
            'clahir_tgl_lahir' => $request->clahir_tgl_lahir,
            'akte_kelahiran' => $request->akte_kelahiran,
            'nama_ibu_balita_bayi' => $request->nama_ibu_balita_bayi,
            'status_ibu_balita_bayi' => $request->status_ibu_balita_bayi,
            'cmati_jenis_kelamin' => $request->cmati_jenis_kelamin,
            'cmati_tgl_meninggal' => $request->cmati_tgl_meninggal,
            'sebab_meninggal' => $request->sebab_meninggal,
            'keterangan' => $request->keterangan,
            'jumlah_ibu_hamil' => $request->jumlah_ibu_hamil,
            'jumlah_ibu_melahirkan' => $request->jumlah_ibu_melahirkan,
            'jumlah_ibu_nifas' => $request->jumlah_ibu_nifas,
            'jumlah_ibu_meninggal' => $request->jumlah_ibu_meninggal,
            'jumlah_bayi_lahir' => $request->jumlah_bayi_lahir,
            'jumlah_bayi_meninggal' => $request->jumlah_bayi_meninggal,
            'jumlah_balita_meninggal' => $request->jumlah_balita_meninggal,
        ]);
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
