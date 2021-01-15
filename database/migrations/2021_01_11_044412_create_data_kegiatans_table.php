<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('desa_wisma');
            $table->string('rt');
            $table->string('rw');
            $table->string('desa/kelurahan');
            $table->string('tahun');
            $table->string('nama_kepala_rumah_tangga');
            $table->string('jumlah_kk');
            $table->string('total_l');
            $table->string('total_p');
            $table->string('balita_l');
            $table->string('balita_p');
            $table->string('pus');
            $table->string('wus');
            $table->string('ibu_hamil');
            $table->string('ibu_menyusuhi');
            $table->string('lansia');
            $table->string('buta');
            $table->string('berkebutuhan_khusus');
            $table->string('sehat_layak_huni');
            $table->string('tidak_sehat_layak_huni');
            $table->string('memiliki_temp_pemb_sampah');
            $table->string('memiliki_spal');
            $table->string('menempel_stiker_p4k');
            $table->string('sumber_air_pdam');
            $table->string('sumber_air_sumur');
            $table->string('sumber_air_dll');
            $table->string('makanan_pokok_beras');
            $table->string('makanan_pokok_non_beras');
            $table->string('warga_mengikuti_kegiatan_up2k');
            $table->string('warga_mengikuti_kegiatan_pemanfaatan_tanah_pekarangan');
            $table->string('warga_mengikuti_kegiatan_industri_rumah_tangga');
            $table->string('warga_mengikuti_kegiatan_kerjabakti');
            $table->string('keterangan');
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
        Schema::dropIfExists('data_kegiatans');
    }
}
