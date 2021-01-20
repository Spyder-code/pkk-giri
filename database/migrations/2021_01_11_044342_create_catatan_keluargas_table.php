<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanKeluargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catatan_keluargas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_anggota_keluarga');
            $table->string('status_perkawinan');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('berkebutuhan_khusus');
            $table->string('penghayatan_dan_pengamalan_pancasila');
            $table->string('gotong_royong');
            $table->string('pendidikan_dan_keterampilan');
            $table->string('pengembangan_kehidupan_beroperasi');
            $table->string('pangan');
            $table->string('sandang');
            $table->string('kesehatan');
            $table->string('perencanaan_sehat');
            $table->string('keterangan');
            $table->string('keluarga_dari');
            $table->string('kelompok_dasa_wisma_dari');
            $table->string('tahun');
            $table->string('kriteria_keluarga');
            $table->string('jamban_keluarga');
            $table->string('sumber_air');
            $table->string('tempat_sampah');
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
        Schema::dropIfExists('catatan_keluargas');
    }
}
