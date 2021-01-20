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
        $request->validate([
            'desa_wisma' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa/kelurahan' => 'required',
            'tahun' => 'required',
            'nama_kepala_rumah_tangga' => 'required',
            'jumlah_kk' => 'required',
            'total_l' => 'required',
            'total_p' => 'required',
            'balita_l' => 'required',
            'balita_p' => 'required',
            'pus' => 'required',
            'wus' => 'required',
            'ibu_hamil' => 'required',
            'ibu_menyusui' => 'required',
            'lansia' => 'required',
            'buta' => 'required',
            'berkebutuhan_khusus' => 'required',
            'sehat_layak_huni' => 'required',
            'tidak_sehat_layak_huni' => 'required',
            'memiliki_temp_pemb_sampah' => 'required',
            'memiliki_spal' => 'required',
            'memiliki_jamban_keluarga' => 'required',
            'menempel_stiker_p4k' => 'required',
            'sumber_air_pdam' => 'required',
            'sumber_air_sumur' => 'required',
            'sumber_air_dll' => 'required',
            'makanan_pokok_beras' => 'required',
            'makanan_pokok_non_beras' => 'required',
            'warga_mengikuti_kegiatan_up2k' => 'required',
            'warga_mengikuti_kegiatan_pemanfaatan_tanah_pekarangan' => 'required',
            'warga_mengikuti_kegiatan_industri_rumah_tangga' => 'required',
            'warga_mengikuti_kegiatan_kerjabakti' => 'required',
            'keterangan' => 'required',
        ]);

        dataKegiatan::create([
            'desa_wisma' => $request->desa_wisma,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'desa/kelurahan' => $request->desa/kelurahan,
            'tahun' => $request->tahun,
            'nama_kepala_rumah_tangga' => $request->nama_kepala_rumah_tangga,
            'jumlah_kk' => $request->jumlah_kk,
            'total_l' => $request->total_l,
            'total_p' => $request->total_p,
            'balita_l' => $request->balita_l,
            'balita_p' => $request->balita_p,
            'pus' => $request->pus,
            'wus' => $request->wus,
            'ibu_hamil' => $request->ibu_hamil,
            'ibu_menyusui' => $request->ibu_menyusui,
            'lansia' => $request->lansia,
            'buta' => $request->buta,
            'berkebutuhan_khusus' => $request->berkebutuhan_khusus,
            'sehat_layak_huni' => $request->sehat_layak_huni,
            'tidak_sehat_layak_huni' => $request->tidak_sehat_layak_huni,
            'memiliki_temp_pemb_sampah' => $request->memiliki_temp_pemb_sampah,
            'memiliki_spal' => $request->memiliki_spal,
            'memiliki_jamban_keluarga' => $request->memiliki_jamban_keluarga,
            'menempel_stiker_p4k' => $request->menempel_stiker_p4k,
            'sumber_air_pdam' => $request->sumber_air_pdam,
            'sumber_air_sumur' => $request->sumber_air_sumur,
            'sumber_air_dll' => $request->sumber_air_dll,
            'makanan_pokok_beras' => $request->makanan_pokok_beras,
            'makanan_pokok_non_beras' => $request->makanan_pokok_non_beras,
            'warga_mengikuti_kegiatan_up2k' => $request->warga_mengikuti_kegiatan_up2k,
            'warga_mengikuti_kegiatan_pemanfaatan_tanah_pekarangan' => $request->warga_mengikuti_kegiatan_pemanfaatan_tanah_pekarangan,
            'warga_mengikuti_kegiatan_industri_rumah_tangga' => $request->warga_mengikuti_kegiatan_industri_rumah_tangga,
            'warga_mengikuti_kegiatan_kerjabakti' => $request->warga_mengikuti_kegiatan_kerjabakti,
            'keterangan' => $request->keterangan,
        ]);
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
        $request->validate([
            'desa_wisma' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'desa/kelurahan' => 'required',
            'tahun' => 'required',
            'nama_kepala_rumah_tangga' => 'required',
            'jumlah_kk' => 'required',
            'total_l' => 'required',
            'total_p' => 'required',
            'balita_l' => 'required',
            'balita_p' => 'required',
            'pus' => 'required',
            'wus' => 'required',
            'ibu_hamil' => 'required',
            'ibu_menyusui' => 'required',
            'lansia' => 'required',
            'buta' => 'required',
            'berkebutuhan_khusus' => 'required',
            'sehat_layak_huni' => 'required',
            'tidak_sehat_layak_huni' => 'required',
            'memiliki_temp_pemb_sampah' => 'required',
            'memiliki_spal' => 'required',
            'memiliki_jamban_keluarga' => 'required',
            'menempel_stiker_p4k' => 'required',
            'sumber_air_pdam' => 'required',
            'sumber_air_sumur' => 'required',
            'sumber_air_dll' => 'required',
            'makanan_pokok_beras' => 'required',
            'makanan_pokok_non_beras' => 'required',
            'warga_mengikuti_kegiatan_up2k' => 'required',
            'warga_mengikuti_kegiatan_pemanfaatan_tanah_pekarangan' => 'required',
            'warga_mengikuti_kegiatan_industri_rumah_tangga' => 'required',
            'warga_mengikuti_kegiatan_kerjabakti' => 'required',
            'keterangan' => 'required',
        ]);

        $dataKegiatan->update([
            'desa_wisma' => $request->desa_wisma,
            'rt' => $request->rt,
            'rw' => $request->rw,
            'desa/kelurahan' => $request->desa/kelurahan,
            'tahun' => $request->tahun,
            'nama_kepala_rumah_tangga' => $request->nama_kepala_rumah_tangga,
            'jumlah_kk' => $request->jumlah_kk,
            'total_l' => $request->total_l,
            'total_p' => $request->total_p,
            'balita_l' => $request->balita_l,
            'balita_p' => $request->balita_p,
            'pus' => $request->pus,
            'wus' => $request->wus,
            'ibu_hamil' => $request->ibu_hamil,
            'ibu_menyusui' => $request->ibu_menyusui,
            'lansia' => $request->lansia,
            'buta' => $request->buta,
            'berkebutuhan_khusus' => $request->berkebutuhan_khusus,
            'sehat_layak_huni' => $request->sehat_layak_huni,
            'tidak_sehat_layak_huni' => $request->tidak_sehat_layak_huni,
            'memiliki_temp_pemb_sampah' => $request->memiliki_temp_pemb_sampah,
            'memiliki_spal' => $request->memiliki_spal,
            'memiliki_jamban_keluarga' => $request->memiliki_jamban_keluarga,
            'menempel_stiker_p4k' => $request->menempel_stiker_p4k,
            'sumber_air_pdam' => $request->sumber_air_pdam,
            'sumber_air_sumur' => $request->sumber_air_sumur,
            'sumber_air_dll' => $request->sumber_air_dll,
            'makanan_pokok_beras' => $request->makanan_pokok_beras,
            'makanan_pokok_non_beras' => $request->makanan_pokok_non_beras,
            'warga_mengikuti_kegiatan_up2k' => $request->warga_mengikuti_kegiatan_up2k,
            'warga_mengikuti_kegiatan_pemanfaatan_tanah_pekarangan' => $request->warga_mengikuti_kegiatan_pemanfaatan_tanah_pekarangan,
            'warga_mengikuti_kegiatan_industri_rumah_tangga' => $request->warga_mengikuti_kegiatan_industri_rumah_tangga,
            'warga_mengikuti_kegiatan_kerjabakti' => $request->warga_mengikuti_kegiatan_kerjabakti,
            'keterangan' => $request->keterangan,
        ]);
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
