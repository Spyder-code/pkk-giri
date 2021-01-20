<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIbuHamilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ibu_hamils', function (Blueprint $table) {
            $table->id();
            $table->string('kelompok_dasa_wisma');
            $table->string('kelompok_pkk_rt');
            $table->string('kelompok_pkk_rw');
            $table->string('dusun_lingkungan');
            $table->string('desa_kelurahan');
            $table->string('bulan');
            $table->string('tahun');
            $table->string('nama_ibu');
            $table->string('nama_suami');
            $table->string('status');
            $table->string('clahir_nama_bayi');
            $table->string('clahir_jenis_kelamin');
            $table->string('clahir_tgl_lahir');
            $table->string('akte_kelahiran');
            $table->string('nama_ibu_balita_bayi');
            $table->string('status_ibu_balita_bayi');
            $table->string('cmati_jenis_kelamin');
            $table->string('cmati_tgl_meninggal');
            $table->string('sebab_meninggal');
            $table->string('keterangan');
            $table->string('jumlah_ibu_hamil');
            $table->string('jumlah_ibu_melahirkan');
            $table->string('jumlah_ibu_nifas');
            $table->string('jumlah_ibu_meninggal');
            $table->string('jumlah_bayi_lahir');
            $table->string('jumlah_bayi_meninggal');
            $table->string('jumlah_balita_meninggal');
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
        Schema::dropIfExists('ibu_hamils');
    }
}
