<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catatanKeluarga extends Model
{
    protected $fillable =["nama_anggota_keluarga","status_perkawinan","jenis_kelamin","tempat_lahir","tanggal_lahir","agama","pendidikan","pekerjaan","berkebutuhan_khusus","penghayatan_dan_pengamalan_pancasila","gotong_royong","pendidikan_dan_keterampilan","pengembangan_kehidupan_beroperasi","pangan","sandang","kesehatan","perencanaan_sehat","keterangan","keluarga_dari","kelompok_dasa_wisma_dari","tahun","kriteria_keluarga","jamban_keluarga","sumber_air","tempat_sampah"];
}
