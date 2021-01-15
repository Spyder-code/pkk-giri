<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpPkksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tp_pkks', function (Blueprint $table) {
            $table->id();
            $table->string('dasa_wisma');
            $table->string('nama_kepala_rumah_tangga');
            $table->string('no_registrasi');
            $table->string('nik');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->string('tanggal_lahir');
            $table->string('status_perkawinan');
            $table->string('status_dalam_keluarga');
            $table->string('agama');
            $table->string('alamat');
            $table->string('desa_kel');
            $table->string('kecamatan');
            $table->string('kab_kota');
            $table->string('prov');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('akseptor_kb');
            $table->string('aktif_dlm_kegiatan_posyandu');
            $table->string('mengikuti_program_bina_keluarga_balita');
            $table->string('memiliki_tabungan');
            $table->string('mengikuti_kelompok_belajar');
            $table->string('mengikuti_paud');
            $table->string('ikut_dlm_kegiatan_koperasi');
            $table->string('aktivitas_penghayatan');
            $table->string('aktivitas_kerjabakti');
            $table->string('aktivitas_rk_kematian');
            $table->string('aktivitas_kegiatan_kegamaan');
            $table->string('aktivitas_jimpitan');
            $table->string('aktivitas_arisan');
            $table->string('aktivitas_lainlain');
            $table->string('ket_penghayatan');
            $table->string('ket_kerjabakti');
            $table->string('ket_rk_kematian');
            $table->string('ket_kegiatan_kegamaan');
            $table->string('ket_jimpitan');
            $table->string('ket_arisan');
            $table->string('ket_lainlain');
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
        Schema::dropIfExists('tp_pkks');
    }
}
