@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambahkan Data TP-PKK!</h3>
            </div>
            <div class="col-5 align-self-center">
                <div class="bg-white border-0 custom-shadow custom-radius float-right p-3">
                    {{ date('d F Y') }}
                </div>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ $message }}</strong>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-info text-white">Data Warga TP-PKK</div>
                    <div class="card-body">
                        <form action="{{ route('tp-pkk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="form-group row">
                                <div class="col">
                                    <label>tp-pkkdes</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-5">
                                    <label>Saldo</label>
                                    <input type="text" min="1" name="saldo" class="uang form-control @error('saldo') is-invalid @enderror" value="{{ old('saldo') }}">
                                    @error('saldo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label><b>Dasa Wisma</b></label>
                                <input type="text" name="dasa_wisma" class="form-control @error('dasa_wisma') is-invalid @enderror" value="{{ old('dasa_wisma') }}">
                                    @error('dasa_wisma')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label><b>Nama Kepala Rumah Tangga</b></label>
                                <input type="text" name="nama_kepala_rumah_tangga" class="form-control @error('nama_kepala_rumah_tangga') is-invalid @enderror" value="{{ old('nama_kepala_rumah_tangga') }}">
                                    @error('nama_kepala_rumah_tangga')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label><b>No. Registrasi</b></label>
                                <input type="text" name="no_registrasi" class="form-control @error('no_registrasi') is-invalid @enderror" value="{{ old('no_registrasi') }}">
                                    @error('no_registrasi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label><b>No. KTP/NIK</b></label>
                                <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                    @error('nik')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label><b>Nama</b></label>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label><b>Jabatan</b></label>
                                <input type="text" name="jabatan" class="form-control @error('jabatan') is-invalid @enderror" value="{{ old('jabatan') }}">
                                    @error('jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label><b>Jenis Kelamin</b></label>
                                <br>
                                <label class="form-check-label" style="margin-right:150px" for="flexRadioDefault1">
                                    <input type="radio" name="jenis_kelamin" value="LK" checked>
                                    Laki-Laki
                                </label>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    <input type="radio" name="jenis_kelamin" value="PR">
                                    Perempuan
                                </label>
                            </div>
                            <div class="form-group">
                                <label><b>Tempat Lahir</b></label>
                                <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ old('tempat_lahir') }}">
                                    @error('tempat_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label><b>Tanggal Lahir</b></label>
                                <input type="date" name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir') }}">
                                    @error('tanggal_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label><b>Status Perkawinan</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:100px" for="flexRadioDefault1">
                                        <input type="radio" name="status_perkawinan" value="Menikah" checked>
                                        Menikah
                                    </label>
                                    <label class="form-check-label" style="margin-right:100px" for="flexRadioDefault2">
                                        <input type="radio" name="status_perkawinan" value="Lajang">
                                        Lajang
                                        </label>
                                    <label class="form-check-label" style="margin-right:100px" for="flexRadioDefault3">
                                        <input type="radio" name="status_perkawinan" value="Duda">
                                        Duda
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        <input type="radio" name="status_perkawinan" value="Janda">
                                        Janda
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Status Dalam Keluarga</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:100px" for="flexRadioDefault1">
                                        <input type="radio" name="status_dalam_keluarga" value="Kepala Rumah Tangga" checked>
                                        Kepala Rumah Tangga
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <input type="radio" name="status_dalam_keluarga" value="Anggota Keluarga">
                                        Anggota Keluarga
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Agama</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:70px" for="flexRadioDefault1">
                                        <input type="radio" name="agama" value="Islam" checked>
                                        Islam
                                    </label>
                                    <label class="form-check-label" style="margin-right:70px" for="flexRadioDefault2">
                                        <input type="radio" name="agama" value="Kristen"> 
                                        Kristen
                                    </label>
                                    <label class="form-check-label" style="margin-right:70px" for="flexRadioDefault3">
                                        <input type="radio" name="agama" value="Katholik"> 
                                        Katholik
                                    </label>
                                    <label class="form-check-label" style="margin-right:70px" for="flexRadioDefault4">
                                        <input type="radio" name="agama" value="Hindu">
                                        Hindu
                                    </label>
                                    <label class="form-check-label" style="margin-right:70px" for="flexRadioDefault5">
                                        <input type="radio" name="agama" value="Budha">
                                        Budha
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault6">
                                        <input type="radio" name="agama" value="Khonghuchu" >
                                        Khonghuchu
                                    </label>
                            </div>
                            <div class="form-group row">
                                    <div class="col">
                                        <label><b>Alamat</b></label>
                                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') }}">
                                        @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-2">
                                        <label>Desa/Kel</label>
                                        <input type="text" name="desa_kel" class="form-control @error('desa_kel') is-invalid @enderror" value="{{ old('desa_kel') }}">
                                         @error('desa_kel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                         @enderror
                                    </div>
                                    <div class="col-2">
                                            <label>Kecamatan</label>
                                            <input type="text" name="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" value="{{ old('kecamatan') }}">
                                             @error('kecamatan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror
                                    </div>
                                    <div class="col-2">
                                            <label>Kab/Kota</label>
                                            <input type="text" name="kab_kota" class="form-control @error('kab_kota') is-invalid @enderror" value="{{ old('kab_kota') }}">
                                             @error('kab_kota')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror
                                    </div>
                                    <div class="col-2">
                                            <label>Provinsi</label>
                                            <input type="text" name="prov" class="form-control @error('prov') is-invalid @enderror" value="{{ old('prov') }}">
                                             @error('prov')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                             @enderror
                                    </div>
                            </div>
                            <div class="form-group">
                                    <label><b>Pendidikan</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:40px" for="flexRadioDefault1">
                                        <input type="radio" name="pendidikan" value="Tidak Tamat SD" checked>
                                        Tidak Tamat SD
                                    </label>
                                    <label class="form-check-label" style="margin-right:40px" for="flexRadioDefault2">
                                        <input type="radio" name="pendidikan" value="SD/MI"> 
                                        SD/MI
                                    </label>
                                    <label class="form-check-label" style="margin-right:40px" for="flexRadioDefault3">
                                        <input type="radio" name="pendidikan" value="SMP/Sederajat"> 
                                        SMP/Sederajat
                                    </label>
                                    <label class="form-check-label" style="margin-right:40px" for="flexRadioDefault4">
                                        <input type="radio" name="pendidikan" value="SMU/Sederajat"> 
                                        SMU/Sederajat
                                    </label>
                                    <label class="form-check-label" style="margin-right:40px" for="flexRadioDefault5">
                                        <input type="radio" name="pendidikan" value="Diploma"> 
                                        Diploma
                                    </label>
                                    <label class="form-check-label" style="margin-right:40px" for="flexRadioDefault6">
                                        <input type="radio" name="pendidikan" value="S1"> 
                                        S1
                                    </label>
                                    <label class="form-check-label" style="margin-right:40px" for="flexRadioDefault7">
                                        <input type="radio" name="pendidikan" value="S2"> 
                                        S2
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault8">
                                        <input type="radio" name="pendidikan" value="S3"> 
                                        S3
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Pekerjaan</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:50px" for="flexRadioDefault1">
                                        <input type="radio" name="pekerjaan" value="Petani" checked>
                                        Petani
                                    </label>
                                    <label class="form-check-label" style="margin-right:50px" for="flexRadioDefault2">
                                        <input type="radio" name="pekerjaan" value="Pedagang"> 
                                        Pedagang
                                    </label>
                                    <label class="form-check-label" style="margin-right:50px" for="flexRadioDefault3">
                                        <input type="radio" name="pekerjaan" value="Swasta"> 
                                        Swasta
                                    </label>
                                    <label class="form-check-label" style="margin-right:50px" for="flexRadioDefault4">
                                        <input type="radio" name="pekerjaan" value="Wirausaha"> 
                                        Wirausaha
                                    </label>
                                    <label class="form-check-label" style="margin-right:50px" for="flexRadioDefault5">
                                        <input type="radio" name="pekerjaan" value="PNS"> 
                                        PNS
                                    </label>
                                    <label class="form-check-label" style="margin-right:50px" for="flexRadioDefault5">
                                        <input type="radio" name="pekerjaan" value="TNI/POLRI"> 
                                        TNI/POLRI
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault5">
                                        <input type="radio" name="pekerjaan" value="Lainnya"> 
                                        Lainnya
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Akseptor KB</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:190px" for="flexRadioDefault1">
                                        <input type="radio" name="akseptor_kb" value="YA" checked>
                                        YA
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <input type="radio" name="akseptor_kb" value="TIDAK"> 
                                        TIDAK
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Aktif dalam Kegiatan Posyandu</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:190px" for="flexRadioDefault1">
                                        <input type="radio" name="aktif_dlm_kegiatan_posyandu" value="YA" checked>
                                        YA
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <input type="radio" name="aktif_dlm_kegiatan_posyandu" value="TIDAK"> 
                                        TIDAK
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Mengikuti Program Bina Keluarga Balita</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:190px" for="flexRadioDefault1">
                                        <input type="radio" name="mengikuti_program_bina_keluarga_balita" value="YA" checked>
                                        YA
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <input type="radio" name="mengikuti_program_bina_keluarga_balita" value="TIDAK"> 
                                        TIDAK
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Memiliki Tabungan</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:190px" for="flexRadioDefault1">
                                        <input type="radio" name="memiliki_tabungan" value="YA" checked>
                                        YA
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <input type="radio" name="memiliki_tabungan" value="TIDAK"> 
                                        TIDAK
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Mengikuti Kelompok Belajar</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:190px" for="flexRadioDefault1">
                                        <input type="radio" name="mengikuti_kelompok_belajar" value="YA" checked>
                                        YA
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <input type="radio" name="mengikuti_kelompok_belajar" value="TIDAK"> 
                                        TIDAK
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Mengikuti PAUD/Sejenis</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:190px" for="flexRadioDefault1">
                                        <input type="radio" name="mengikuti_paud" value="YA" checked>
                                        YA
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <input type="radio" name="mengikuti_paud" value="TIDAK"> 
                                        TIDAK
                                    </label>
                            </div>
                            <div class="form-group">
                                    <label><b>Ikut dalam Kegiatan Koperasi</b></label>
                                    <br>
                                    <label class="form-check-label" style="margin-right:190px" for="flexRadioDefault1">
                                        <input type="radio" name="ikut_dlm_kegiatan_koperasi" value="YA" checked>
                                        YA
                                    </label>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        <input type="radio" name="ikut_dlm_kegiatan_koperasi" value="TIDAK"> 
                                        TIDAK
                                    </label>
                            </div>
                            <label><b>Kegiatan Warga</b></label>
                            <div class="row">
                                <div class="col">
                                    <style type="text/css">
                                        .tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
                                        .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                          overflow:hidden;padding:10px 5px;word-break:normal;}
                                        .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                          font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                                        .tg .tg-n533{background-color:#dae8fc;border-color:inherit;font-weight:bold;text-align:center;vertical-align:top}
                                        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                                        @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
                                        <div class="tg-wrap"><table class="tg">
                                        <tbody>
                                          <tr>
                                            <td class="tg-n533">NO</td>
                                            <td class="tg-n533">KEGIATAN</td>
                                            <td class="tg-n533">AKTIVITAS<br>(Y/T)</td>
                                            <td class="tg-n533">KETERANGAN<br>(Jenis Kegiatan Yang Diikuti)</td>
                                          </tr>
                                          <tr>
                                            <td class="tg-0pky">1</td>
                                            <td class="tg-0pky">Penghayatan dan Pengamalan Pancasila</td>
                                            <td class="tg-0pky">
                                                <label class="form-check-label" style="margin-right:20px" for="flexRadioDefault1">
                                                    <input type="radio" name="aktivitas_penghayatan" value="Y">
                                                    Y
                                                </label>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <input type="radio" name="aktivitas_penghayatan" value="T"> 
                                                    T
                                                </label>
                                            </td>
                                            <td class="tg-0pky">
                                                <input type="text" name="ket_penghayatan" class="form-control @error('ket_penghayatan') is-invalid @enderror" value="{{ old('ket_penghayatan') }}">
                                    @error('ket_penghayatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="tg-0pky">2</td>
                                            <td class="tg-0pky">Kerja Bakti</td>
                                            <td class="tg-0pky">
                                                <label class="form-check-label" style="margin-right:20px" for="flexRadioDefault1">
                                                    <input type="radio" name="aktivitas_kerjabakti" value="Y">
                                                    Y
                                                </label>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <input type="radio" name="aktivitas_kerjabakti" value="T"> 
                                                    T
                                                </label>
                                            </td>
                                            <td class="tg-0pky">
                                                <input type="text" name="ket_kerjabakti" class="form-control @error('ket_kerjabakti') is-invalid @enderror" value="{{ old('ket_kerjabakti') }}">
                                    @error('ket_kerjabakti')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="tg-0pky">3</td>
                                            <td class="tg-0pky">Rukun Kematian</td>
                                            <td class="tg-0pky">
                                                <label class="form-check-label" style="margin-right:20px" for="flexRadioDefault1">
                                                    <input type="radio" name="aktivitas_rk_kematian" value="Y">
                                                    Y
                                                </label>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <input type="radio" name="aktivitas_rk_kematian" value="T"> 
                                                    T
                                                </label>
                                            </td>
                                            <td class="tg-0pky">
                                                <input type="text" name="ket_rk_kematian" class="form-control @error('ket_rk_kematian') is-invalid @enderror" value="{{ old('ket_rk_kematian') }}">
                                    @error('ket_rk_kematian')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="tg-0pky">4</td>
                                            <td class="tg-0pky">Kegiatan Keagamaan</td>
                                            <td class="tg-0pky">
                                                <label class="form-check-label" style="margin-right:20px" for="flexRadioDefault1">
                                                    <input type="radio" name="aktivitas_kegiatan_kegamaan" value="Y">
                                                    Y
                                                </label>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <input type="radio" name="aktivitas_kegiatan_kegamaan" value="T"> 
                                                    T
                                                </label>
                                            </td>
                                            <td class="tg-0pky">
                                                <input type="text" name="ket_kegiatan_kegamaan" class="form-control @error('ket_kegiatan_kegamaan') is-invalid @enderror" value="{{ old('ket_kegiatan_kegamaan') }}">
                                    @error('ket_kegiatan_kegamaan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="tg-0pky">5</td>
                                            <td class="tg-0pky">Jimpitan</td>
                                            <td class="tg-0pky">
                                                <label class="form-check-label" style="margin-right:20px" for="flexRadioDefault1">
                                                    <input type="radio" name="aktivitas_jimpitan" value="Y">
                                                    Y
                                                </label>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <input type="radio" name="aktivitas_jimpitan" value="T"> 
                                                    T
                                                </label>
                                            </td>
                                            <td class="tg-0pky">
                                                <input type="text" name="ket_jimpitan" class="form-control @error('ket_jimpitan') is-invalid @enderror" value="{{ old('ket_jimpitan') }}">
                                    @error('ket_jimpitan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="tg-0pky">6</td>
                                            <td class="tg-0pky">Arisan</td>
                                            <td class="tg-0pky">
                                                <label class="form-check-label" style="margin-right:20px" for="flexRadioDefault1">
                                                    <input type="radio" name="aktivitas_arisan" value="Y">
                                                    Y
                                                </label>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <input type="radio" name="aktivitas_arisan" value="T"> 
                                                    T
                                                </label>
                                            </td>
                                            <td class="tg-0pky">
                                                <input type="text" name="ket_arisan" class="form-control @error('ket_arisan') is-invalid @enderror" value="{{ old('ket_arisan') }}">
                                    @error('ket_arisan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </td>
                                          </tr>
                                          <tr>
                                            <td class="tg-0pky">7</td>
                                            <td class="tg-0pky">Lain-lain</td>
                                            <td class="tg-0pky">
                                                <label class="form-check-label" style="margin-right:20px" for="flexRadioDefault1">
                                                    <input type="radio" name="aktivitas_lainlain" value="Y">
                                                    Y
                                                </label>
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <input type="radio" name="aktivitas_lainlain" value="T"> 
                                                    T
                                                </label>
                                            </td>
                                            <td class="tg-0pky">
                                                <input type="text" name="ket_lainlain" class="form-control @error('ket_lainlain') is-invalid @enderror" value="{{ old('ket_lainlain') }}">
                                    @error('ket_lainlain')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                            </td>
                                          </tr>
                                        </tbody>
                                        </table></div>
                                </div>
                            </div>




                            <button type="submit" class="btn btn-success mt-2 d-block w-100">Buat TP-PKK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous"></script>
<script>
    function loadImg (event){
        var id = event.target.labels[0].dataset.id;
        $('#'+id).attr('src', URL.createObjectURL(event.target.files[0]));
    };
    $(document).ready(function(){
        $('.uang').mask('000.000.000.000.000', {reverse: true});
    })
</script>
@endsection
