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
        $request->validate([
            'nama_anggota_keluarga' => 'required',
            'status_perkawinan' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'kebutuhan_khusus' => 'required',
            'penghayatan_dan_pengamalan_pancasila' => 'required',
            'gotong_royong' => 'required',
            'pendidikan_dan_keterampilan' => 'required',
            'pengembangan_kehidupan_beroperasi' => 'required',
            'pangan' => 'required',
            'sandang' => 'required',
            'kesehatan' => 'required',
            'perencanaan_sehat' => 'required',
            'keterangan' => 'required',
            'keluarga_dari' => 'required',
            'kelompok_dasa_wisma_dari' => 'required',
            'tahun' => 'required',
            'kriteria_keluarga' => 'required',
            'jamban_keluarga' => 'required',
            'sumber_air' => 'required',
            'tempat_sampah' => 'required',
        ]);

        catatanKeluarga::create([
            'nama_anggota_keluarga' => $request->nama_anggota_keluarga,
            'status_perkawinan' => $request->status_perkawinan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'kebutuhan_khusus' => $request->kebutuhan_khusus,
            'penghayatan_dan_pengamalan_pancasila' => $request->penghayatan_dan_pengamalan_pancasila,
            'gotong_royong' => $request->gotong_royong,
            'pendidikan_dan_keterampilan' => $request->pendidikan_dan_keterampilan,
            'pengembangan_kehidupan_beroperasi' => $request->pengembangan_kehidupan_beroperasi,
            'pangan' => $request->pangan,
            'sandang' => $request->sandang,
            'kesehatan' => $request->kesehatan,
            'perencanaan_sehat' => $request->perencanaan_sehat,
            'keterangan' => $request->keterangan,
            'keluarga_dari' => $request->keluarga_dari,
            'kelompok_dasa_wisma_dari' => $request->kelompok_dasa_wisma_dari,
            'kriteria_keluarga' => $request->kriteria_keluarga,
            'jamban_keluarga' => $request->jamban_keluarga,
            'sumber_air' => $request->sumber_air,
            'tempat_sampah' => $request->tempat_sampah,
        ]);
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
        $request->validate([
            'nama_anggota_keluarga' => 'required',
            'status_perkawinan' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'kebutuhan_khusus' => 'required',
            'penghayatan_dan_pengamalan_pancasila' => 'required',
            'gotong_royong' => 'required',
            'pendidikan_dan_keterampilan' => 'required',
            'pengembangan_kehidupan_beroperasi' => 'required',
            'pangan' => 'required',
            'sandang' => 'required',
            'kesehatan' => 'required',
            'perencanaan_sehat' => 'required',
            'keterangan' => 'required',
            'keluarga_dari' => 'required',
            'kelompok_dasa_wisma_dari' => 'required',
            'tahun' => 'required',
            'kriteria_keluarga' => 'required',
            'jamban_keluarga' => 'required',
            'sumber_air' => 'required',
            'tempat_sampah' => 'required',
        ]);

        $catatanKeluarga->update([
            'nama_anggota_keluarga' => $request->nama_anggota_keluarga,
            'status_perkawinan' => $request->status_perkawinan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'kebutuhan_khusus' => $request->kebutuhan_khusus,
            'penghayatan_dan_pengamalan_pancasila' => $request->penghayatan_dan_pengamalan_pancasila,
            'gotong_royong' => $request->gotong_royong,
            'pendidikan_dan_keterampilan' => $request->pendidikan_dan_keterampilan,
            'pengembangan_kehidupan_beroperasi' => $request->pengembangan_kehidupan_beroperasi,
            'pangan' => $request->pangan,
            'sandang' => $request->sandang,
            'kesehatan' => $request->kesehatan,
            'perencanaan_sehat' => $request->perencanaan_sehat,
            'keterangan' => $request->keterangan,
            'keluarga_dari' => $request->keluarga_dari,
            'kelompok_dasa_wisma_dari' => $request->kelompok_dasa_wisma_dari,
            'kriteria_keluarga' => $request->kriteria_keluarga,
            'jamban_keluarga' => $request->jamban_keluarga,
            'sumber_air' => $request->sumber_air,
            'tempat_sampah' => $request->tempat_sampah,
        ]);
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
