@extends('layouts.admin')
@section('content')
<script src='https://cdn.tiny.cloud/1/ip0rkeafploig1u7xvh8y8bb0c7qg3gz1kesdzcwab09fnzx/tinymce/5/tinymce.min.js' referrerpolicy="origin">
</script>
<script>
  tinymce.init({
    selector: '#mytextarea'
  });
</script>
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambahkan ibu-hamil!</h3>
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
                    <div class="card-header bg-info text-white">Data ibu-hamil</div>
                    <div class="card-body">
                        <form action="{{ route('ibu-hamil.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <label>Desa wisma</label>
                                    <input type="text" name="desa_wisma" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label>RT</label>
                                    <input type="text" name="rt" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-2">
                                    <label>RW</label>
                                    <input type="text" name="rw" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm">
                                    <label>Dusun/Lingkungan</label>
                                    <input type="text" name="desa_wisma" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label>Bulan</label>
                                    <select name="bulan" class="form-control">
                                        <option value="januari">Januari</option>
                                        <option value="februari">Februari</option>
                                        <option value="maret">Maret</option>
                                        <option value="april">April</option>
                                        <option value="mei">Mei</option>
                                        <option value="juni">Juni</option>
                                        <option value="july">July</option>
                                        <option value="agustus">Agustus</option>
                                        <option value="september">September</option>
                                        <option value="oktober">Oktober</option>
                                        <option value="november">November</option>
                                        <option value="desember">Desember</option>
                                    </select>
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label>Tahun</label>
                                    <input type="number" name="rt" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <style type="text/css">
                                        .tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
                                        .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                          overflow:hidden;padding:10px 5px;word-break:normal;}
                                        .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                          font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                                        .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                                        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                                        @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
                                        <div class="tg-wrap table-responsive"><table class="tg">
                                        <thead>
                                          <tr>
                                            <th class="tg-0pky" rowspan="3"><br><br><br>NO<br></th>
                                            <th class="tg-c3ow" rowspan="3"><br><br><br>NAMA IBU<br><br></th>
                                            <th class="tg-c3ow" rowspan="3"><br><br><br>NAMA SUAMI<br></th>
                                            <th class="tg-c3ow" rowspan="3"><br><br>STATUS<br> (HAMIL/<br>MELAHIRKAN/<br>NIFAS)</th>
                                            <th class="tg-c3ow" colspan="8">CATATAN KELAHIRAN</th>
                                            <th class="tg-0pky text-center" colspan="8">CATATAN KEMATIAN</th>
                                            {{-- <th class="tg-0pky" colspan="2"></th> --}}
                                            {{-- <th class="tg-c3ow" colspan="2"></th>
                                            <th class="tg-0pky" colspan="2"></th> --}}
                                          </tr>
                                          <tr>
                                            <td class="tg-c3ow" rowspan="2"><br><br>NAMA BAYI<br></td>
                                            <td class="tg-c3ow" colspan="2"><br>JENIS KELAMIN</td>
                                            <td class="tg-0pky" rowspan="2"><br><br>TGL.LAHIR</td>
                                            <td class="tg-c3ow" colspan="2"><br>AKTA KELAHIRAN</td>
                                            <td class="tg-c3ow" rowspan="2"><br>NAMA IBU/<br>BALITA/<br>(BAYI)</td>
                                            <td class="tg-c3ow" rowspan="2"><br>STATUS IBU<br>BALITA/<br>(BAYI)</td>
                                            <td class="tg-c3ow" colspan="2"><br>JENIS KELAMIN<br></td>
                                            <td class="tg-0pky" rowspan="2"><br><br>TGL.MENINGGAL</td>
                                            <td class="tg-c3ow" rowspan="2"><br>SEBAB <br>MENINGGAL</td>
                                            <td class="tg-c3ow" rowspan="2"><br><br>KETERANGAN</td>
                                          </tr>
                                          <tr>
                                            <td class="tg-c3ow">L</td>
                                            <td class="tg-c3ow">P</td>
                                            <td class="tg-0pky">ADA</td>
                                            <td class="tg-c3ow">TIDAK</td>
                                            <td class="tg-c3ow">L</td>
                                            <td class="tg-c3ow">P</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td class="tg-c3ow">1</td>
                                            <td class="tg-c3ow">2</td>
                                            <td class="tg-c3ow">3</td>
                                            <td class="tg-c3ow">4</td>
                                            <td class="tg-c3ow">5</td>
                                            <td class="tg-c3ow">6</td>
                                            <td class="tg-c3ow">7</td>
                                            <td class="tg-c3ow">8</td>
                                            <td class="tg-c3ow">9</td>
                                            <td class="tg-c3ow">10</td>
                                            <td class="tg-c3ow">11</td>
                                            <td class="tg-c3ow">12</td>
                                            <td class="tg-c3ow">13</td>
                                            <td class="tg-c3ow">14</td>
                                            <td class="tg-c3ow">15</td>
                                            <td class="tg-c3ow">16</td>
                                            <td class="tg-c3ow">17</td>
                                          </tr>
                                          <tr>
                                            <td class="tg-0pky"></td>
                                            <td class="tg-0pky"><input type="text" name="nama_ibu"></td>
                                            <td class="tg-0pky"><input type="text" name="nama_suami"></td>
                                            <td class="tg-0pky">
                                                <label>Hamil <input type="radio" name="status"></label>
                                                <label>Melahirkan <input type="radio" name="status"></label>
                                                <label>Nifas <input type="radio" name="status"></label>
                                            </td>
                                            <td class="tg-0pky"><input type="text" name="clahir_nama_bayi"></td>
                                            <td class="tg-0pky"><input type="radio" name="clahir_jenis_kelamin"></td>
                                            <td class="tg-0pky"><input type="radio" name="clahir_jenis_kelamin"></td>
                                            <td class="tg-0pky"><input type="date" name="clahir_tgl_lahir"></td>
                                            <td class="tg-0pky"><input type="radio" name="akte_kelahiran"></td>
                                            <td class="tg-0pky"><input type="radio" name="akte_kelahiran"></td>
                                            <td class="tg-0pky"><input type="text" name="nama_ibu_balita_bayi"></td>
                                            <td class="tg-0pky"><input type="text" name="status_ibu_balita_bayi"></td>
                                            <td class="tg-0pky"><input type="radio" name="cmati_jenis_kelamin"></td>
                                            <td class="tg-0pky"><input type="radio" name="cmati_jenis_kelamin"></td>
                                            <td class="tg-0pky"><input type="date" name="cmati_tgl_meninggal"></td>
                                            <td class="tg-0pky"><input type="text" name="sebab_meninggal"></td>
                                            <td class="tg-0pky"><input type="text" name="keterangan"></td>
                                          </tr>
                                        </tbody>
                                        </table></div>
                                </div>
                            </div>
                            <br>
                            {{-- <h5><b>Catatan</b></h5>
                            <hr> --}}
                            {{-- <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Jumlah Ibu Hamil</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" name="jmlh_ibu_hamil" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Jumlah Ibu Melahirkan</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" name="jmlh_ibu_hamil" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Jumlah Ibu Nifas</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" name="jmlh_ibu_hamil" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Jumlah Ibu Meninggal</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" name="jmlh_ibu_hamil" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Jumlah Bayi Lahir</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" name="jmlh_ibu_hamil" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Jumlah Bayi Meninggal</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" name="jmlh_ibu_hamil" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Jumlah Balita Meninggal</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" name="jmlh_ibu_hamil" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <button type="submit" class="btn btn-success d-block w-100 mt-3">Buat ibu-hamil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


