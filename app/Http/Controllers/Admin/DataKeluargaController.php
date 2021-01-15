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
        $request->validate([
            'desa_wisma' => 'required',
            'rt/rw' => 'required',
            'dusun/lingkungan' => 'required',
            'desa/kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten/kota' => 'required',
            'provinsi' => 'required',
            'nama_kepala_rumah_tangga' => 'required',
            'jumlah_anggota_keluarga_lk' => 'required',
            'jumlah_anggota_keluarga_pr' => 'required',
            'jumlah_kk' => 'required',
            'jumlah_balita' => 'required',
            'jumlah_pus' => 'required',
            'jumlah_wus' => 'required',
            'jumlah_buta' => 'required',
            'jumlah_ibu_hamil' => 'required',
            'jumlah_ibu_menyusui' => 'required',
            'jumlah_lansia' => 'required',
            'no' => 'required',
            'no_reg' => 'required',
            'nama_anggota_keluarga' => 'required',
            'status_dalam_keluarga' => 'required',
            'status_dalam_perkawinan' => 'required',
            'jenis_kelamin_l' => 'required',
            'jenis_kelamin_p' => 'required',
            'tanggal_lahir/umur' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'makanan_pokok_sehari_hari' => 'required',
            'mempunyai_jamban_keluarga' => 'required',
            'sumber_air_keluarga' => 'required',
            'memiliki_tempat_pembuangan_sampah' => 'required',
            'mempunyai_saluran_pembuangan_air_limbah' => 'required',
            'menempel_stiker_p4k' => 'required',
            'kriteria_rumah' => 'required',
            'aktifitas_up2k' => 'required',
            'aktifitas_kegiatan_usaha_kesehatan_lingkungan' => 'required',
            'no' => 'required',
            'kategori' => 'required',
            'komoditi' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);

        dataKeluarga::create([
            'desa_wisma' => $request->desa_wisma,
            'rt/rw' => $request->rt/rw,
            'dusun/lingkungan' => $request->dusun/lingkungan,
            'desa/kelurahan' => $request->desa/kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten/kota' => $request->kabupaten/kota,
            'provinsi' => $request->provinsi,
            'nama_kepala_rumah_tangga' => $request->nama_kepala_rumah_tangga,
            'jumlah_anggota_keluarga_lk' => $request->jumlah_anggota_keluarga_lk,
            'jumlah_anggota_keluarga_pr' => $request->jumlah_anggota_keluarga_pr,
            'jumlah_kk' => $request->jumlah_kk,
            'jumlah_balita' => $request->jumlah_balita,
            'jumlah_pus' => $request->jumlah_pus,
            'jumlah_wus' => $request->jumlah_wus,
            'jumlah_buta' => $request->jumlah_buta,
            'jumlah_ibu_hamil' => $request->jumlah_ibu_hamil,
            'jumlah_ibu_menyusui' => $request->jumlah_ibu_menyusui,
            'jumlah_lansia' => $request->jumlah_lansia,
            'no' => $request->no,
            'no_reg' => $request->no_reg,
            'nama_anggota_keluarga' => $request->nama_anggota_keluarga,
            'status_dalam_keluarga' => $request->status_dalam_keluarga,
            'status_dalam_perkawinan' => $request->status_dalam_perkawinan,
            'jenis_kelamin_l' => $request->jenis_kelamin_l,
            'jenis_kelamin_p' => $request->jenis_kelamin_p,
            'tanggal_lahir/umur' => $request->tanggal_lahir/umur,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'makanan_pokok_sehari_hari' => $request->makanan_pokok_sehari_hari,
            'mempunyai_jamban_keluarga' => $request->mempunyai_jamban_keluarga,
            'sumber_air_keluarga' => $request->sumber_air_keluarga,
            'memiliki_tempat_pembuangan_sampah' => $request->memiliki_tempat_pembuangan_sampah,
            'mempunyai_saluran_pembuangan_air_limbah' => $request->mempunyai_saluran_pembuangan_air_limbah,
            'menempel_stiker_p4k' => $request->menempel_stiker_p4k,
            'kriteria_rumah' => $request->kriteria_rumah,
            'aktifitas_up2k' => $request->aktifitas_up2k,
            'aktifitas_kegiatan_usaha_kesehatan_lingkungan' => $request->aktifitas_kegiatan_usaha_kesehatan_lingkungan,
            'no' => $request->no,
            'kategori' => $request->kategori,
            'komoditi' => $request->komoditi,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
        ]);
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
        $request->validate([
            'desa_wisma' => 'required',
            'rt/rw' => 'required',
            'dusun/lingkungan' => 'required',
            'desa/kelurahan' => 'required',
            'kecamatan' => 'required',
            'kabupaten/kota' => 'required',
            'provinsi' => 'required',
            'nama_kepala_rumah_tangga' => 'required',
            'jumlah_anggota_keluarga_lk' => 'required',
            'jumlah_anggota_keluarga_pr' => 'required',
            'jumlah_kk' => 'required',
            'jumlah_balita' => 'required',
            'jumlah_pus' => 'required',
            'jumlah_wus' => 'required',
            'jumlah_buta' => 'required',
            'jumlah_ibu_hamil' => 'required',
            'jumlah_ibu_menyusui' => 'required',
            'jumlah_lansia' => 'required',
            'no' => 'required',
            'no_reg' => 'required',
            'nama_anggota_keluarga' => 'required',
            'status_dalam_keluarga' => 'required',
            'status_dalam_perkawinan' => 'required',
            'jenis_kelamin_l' => 'required',
            'jenis_kelamin_p' => 'required',
            'tanggal_lahir/umur' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'makanan_pokok_sehari_hari' => 'required',
            'mempunyai_jamban_keluarga' => 'required',
            'sumber_air_keluarga' => 'required',
            'memiliki_tempat_pembuangan_sampah' => 'required',
            'mempunyai_saluran_pembuangan_air_limbah' => 'required',
            'menempel_stiker_p4k' => 'required',
            'kriteria_rumah' => 'required',
            'aktifitas_up2k' => 'required',
            'aktifitas_kegiatan_usaha_kesehatan_lingkungan' => 'required',
            'no' => 'required',
            'kategori' => 'required',
            'komoditi' => 'required',
            'jumlah' => 'required',
            'status' => 'required',
        ]);

        $dataKeluarga->update([
            'desa_wisma' => $request->desa_wisma,
            'rt/rw' => $request->rt/rw,
            'dusun/lingkungan' => $request->dusun/lingkungan,
            'desa/kelurahan' => $request->desa/kelurahan,
            'kecamatan' => $request->kecamatan,
            'kabupaten/kota' => $request->kabupaten/kota,
            'provinsi' => $request->provinsi,
            'nama_kepala_rumah_tangga' => $request->nama_kepala_rumah_tangga,
            'jumlah_anggota_keluarga_lk' => $request->jumlah_anggota_keluarga_lk,
            'jumlah_anggota_keluarga_pr' => $request->jumlah_anggota_keluarga_pr,
            'jumlah_kk' => $request->jumlah_kk,
            'jumlah_balita' => $request->jumlah_balita,
            'jumlah_pus' => $request->jumlah_pus,
            'jumlah_wus' => $request->jumlah_wus,
            'jumlah_buta' => $request->jumlah_buta,
            'jumlah_ibu_hamil' => $request->jumlah_ibu_hamil,
            'jumlah_ibu_menyusui' => $request->jumlah_ibu_menyusui,
            'jumlah_lansia' => $request->jumlah_lansia,
            'no' => $request->no,
            'no_reg' => $request->no_reg,
            'nama_anggota_keluarga' => $request->nama_anggota_keluarga,
            'status_dalam_keluarga' => $request->status_dalam_keluarga,
            'status_dalam_perkawinan' => $request->status_dalam_perkawinan,
            'jenis_kelamin_l' => $request->jenis_kelamin_l,
            'jenis_kelamin_p' => $request->jenis_kelamin_p,
            'tanggal_lahir/umur' => $request->tanggal_lahir/umur,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'makanan_pokok_sehari_hari' => $request->makanan_pokok_sehari_hari,
            'mempunyai_jamban_keluarga' => $request->mempunyai_jamban_keluarga,
            'sumber_air_keluarga' => $request->sumber_air_keluarga,
            'memiliki_tempat_pembuangan_sampah' => $request->memiliki_tempat_pembuangan_sampah,
            'mempunyai_saluran_pembuangan_air_limbah' => $request->mempunyai_saluran_pembuangan_air_limbah,
            'menempel_stiker_p4k' => $request->menempel_stiker_p4k,
            'kriteria_rumah' => $request->kriteria_rumah,
            'aktifitas_up2k' => $request->aktifitas_up2k,
            'aktifitas_kegiatan_usaha_kesehatan_lingkungan' => $request->aktifitas_kegiatan_usaha_kesehatan_lingkungan,
            'no' => $request->no,
            'kategori' => $request->kategori,
            'komoditi' => $request->komoditi,
            'jumlah' => $request->jumlah,
            'status' => $request->status,
        ]);
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
