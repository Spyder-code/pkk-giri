<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dataKeluarga extends Model
{
    protected $fillable=["desa_wisma","rt/rw", "dusun/lingkungan", "desa/kelurahan", "kecamatan", "kabupaten/kota", "provinsi", "nama_kepala_rumah_tangga", "jumlah_anggota_keluarga_lk", "jumlah_anggota_keluarga_pr", "jumlah_kk", "jumlah_balita", "jumlah_pus", "jumlah_wus", "jumlah_buta", "jumlah_ibu_hamil", "jumlah_ibu_menyusui", "jumlah_lansia", "no", "no_reg", "nama_anggota_keluarga", "status_dalam_keluarga", "status_dalam_perkawinan", "jenis_kelamin_l", "jenis_kelamin_p", "tanggal_lahir/umur", "pendidikan", "pekerjaan", "makanan_pokok_sehari_hari", "mempunyai_jamban_keluarga", "sumber_air_keluarga", "memiliki_tempat_pembuangan_sampah", "mempunyai_saluran_pembuangan_air_limbah", "menempel_stiker_p4k","kriteria_rumah", "aktifitas_up2k", "aktifitas_kegiatan_usaha_kesehatan_lingkungan", "no", "kategori", "komoditi", "jumlah", "status" ];
}
