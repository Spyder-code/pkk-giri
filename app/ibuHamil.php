<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ibuHamil extends Model
{
    protected $fillable= ["nama_ibu", "nama_suami", "status", "clahir_nama_bayi", "clahir_jenis_kelamin", "clahir_tgl_lahir", "akte_kelahiran", "nama_ibu_balita_bayi", "status_ibu_balita_bayi", "cmati_jenis_kelamin", "cmati_tgl_meninggal", "sebab_meninggal", "keterangan"];
}
