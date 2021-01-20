<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKegiatan extends Model
{
    protected $fillable=["desa_wisma","rt","rw","desa/kelurahan","tahun","nama_kepala_rumah_tangga","jumlah_kk","total_l","total_p","balita_l","balita_p","pus","wus","ibu_hamil","ibu_menyusui","lansia","buta","berkebutuhan_khusus","sehat_layak_huni","tidak_sehat_layak_huni","memiliki_temp_pemb_sampah","memiliki_spal","memiliki_jamban_keluarga","menempel_stiker_p4k","sumber_air_pdam","sumber_air_sumur","sumber_air_dll","makanan_pokok_beras","makanan_pokok_non_beras","warga_mengikuti_kegiatan_up2k","warga_mengikuti_kegiatan_pemanfaatan_tanah_pekarangan","warga_mengikuti_kegiatan_industri_rumah_tangga","warga_mengikuti_kegiatan_kerjabakti","keterangan"];
}
