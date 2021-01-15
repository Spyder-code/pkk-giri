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
        $request->validate([
            'dasa_wisma' => 'required',
            'nama_kepala_rumah_tangga' => 'required',
            'no_registrasi' => 'required',
            'nik' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status_perkawinan' => 'required',
            'status_dalam_keluarga' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'desa_kel' => 'required',
            'kecamatan' => 'required',
            'kab_kota' => 'required',
            'prov' => 'required',
            'pendidikan' => 'required',
            'pekerjaan' => 'required',
            'akseptor_kb' => 'required',
            'aktif_dlm_kegiatan_posyandu' => 'required',
            'mengikuti_program_bina_keluarga_balita' => 'required',
            'memiliki_tabungan' => 'required',
            'mengikuti_kelompok_belajar' => 'required',
            'mengikuti_paud' => 'required',
            'ikut_dlm_kegiatan_koperasi' => 'required',
            'aktivitas_penghayatan' => 'required',
            'aktivitas_kerjabakti' => 'required',
            'aktivitas_rk_kematian' => 'required',
            'aktivitas_kegiatan_kegamaan' => 'required',
            'aktivitas_jimpitan' => 'required',
            'aktivitas_arisan' => 'required',
            'aktivitas_lainlain' => 'required',
            'ket_penghayatan' => 'required',
            'ket_kerjabakti' => 'required',
            'ket_rk_kematian' => 'required',
            'ket_kegiatan_kegamaan' => 'required',
            'ket_jimpitan' => 'required',
            'ket_arisan' => 'required',
            'ket_lainlain' => 'required',
        ]);
        
        tpPkk::create([
            'dasa_wisma' => $request->dasa_wisma,
            'nama_kepala_rumah_tangga' => $request->nama_kepala_rumah_tangga,
            'no_registrasi' => $request->no_registrasi,
            'nik' => $request->nik,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'status_perkawinan' => $request->status_perkawinan,
            'status_dalam_keluarga' => $request->status_dalam_keluarga,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'desa_kel' => $request->desa_kel,
            'kecamatan' => $request->kecamatan,
            'kab_kota' => $request->kab_kota,
            'prov' => $request->prov,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'akseptor_kb' => $request->akseptor_kb,
            'aktif_dlm_kegiatan_posyandu' => $request->aktif_dlm_kegiatan_posyandu,
            'mengikuti_program_bina_keluarga_balita' => $request->mengikuti_program_bina_keluarga_balita,
            'memiliki_tabungan' => $request->memiliki_tabungan,
            'mengikuti_kelompok_belajar' => $request->mengikuti_kelompok_belajar,
            'mengikuti_paud' => $request->mengikuti_paud,
            'ikut_dlm_kegiatan_koperasi' => $request->ikut_dlm_kegiatan_koperasi,
            'aktivitas_penghayatan' => $request->aktivitas_penghayatan,
            'aktivitas_kerjabakti' => $request->aktivitas_kerjabakti,
            'aktivitas_rk_kematian' => $request->aktivitas_rk_kematian,
            'aktivitas_kegiatan_kegamaan' => $request->aktivitas_kegiatan_kegamaan,
            'aktivitas_jimpitan' => $request->aktivitas_jimpitan,
            'aktivitas_arisan' => $request->aktivitas_arisan,
            'aktivitas_lainlain' => $request->aktivitas_lainlain,
            'ket_penghayatan' => $request->ket_penghayatan,
            'ket_kerjabakti' => $request->ket_kerjabakti,
            'ket_rk_kematian' => $request->ket_rk_kematian,
            'ket_kegiatan_kegamaan' => $request->ket_kegiatan_kegamaan,
            'ket_jimpitan' => $request->ket_jimpitan,
            'ket_arisan' => $request->ket_arisan,
            'ket_lainlain' => $request->ket_lainlain,
        ]);

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
