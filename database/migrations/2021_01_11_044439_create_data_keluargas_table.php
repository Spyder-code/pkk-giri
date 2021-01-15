<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_keluargas', function (Blueprint $table) {
            $table->id();
            $table->string('desa_wisma');
            $table->string('rt/rw');
            $table->string('dusun/lingkungan');
            $table->string('desa/kelurahan');
            $table->string('kecamatan');
            $table->string('kabupaten/kota');
            $table->string('provinsi');
            $table->string('nama_kepala_rumah_tangga');
            $table->string('jumlah_anggota_keluarga_lk');
            $table->string('jumlah_anggota_keluarga_pr');
            $table->string('jumlah_kk');
            $table->string('jumlah_balita');
            $table->string('jumlah_pus');
            $table->string('jumlah_wus');
            $table->string('jumlah_buta');
            $table->string('jumlah_ibu_hamil');
            $table->string('jumlah_ibu_menyusui');
            $table->string('jumlah_lansia');
            $table->string('no');
            $table->string('no_reg');
            $table->string('nama_anggota_keluarga');
            $table->string('status_dalam_keluarga');
            $table->string('status_dalam_perkawinan');
            $table->string('jenis_kelamin_l');
            $table->string('jenis_kelamin_p');
            $table->string('tanggal_lahir/umur');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('makanan_pokok_sehari_hari');
            $table->string('mempunyai_jamban_keluarga');
            $table->string('sumber_air_keluarga');
            $table->string('memiliki_tempat_pembuangan_sampah');
            $table->string('mempunyai_saluran_pembuangan_air_limbah');
            $table->string('menempel_stiker_p4k');
            $table->string('kriteria_rumah');
            $table->string('aktifitas_up2k');
            $table->string('aktifitas_kegiatan_usaha_kesehatan_lingkungan');
            $table->string('no');
            $table->string('kategori');
            $table->string('komoditi');
            $table->string('jumlah');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_keluargas');
    }
}
