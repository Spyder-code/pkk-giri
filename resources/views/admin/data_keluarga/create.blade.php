@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 text-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">DATA KELUARGA</h3>
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
                    <div class="card-header bg-info text-white">Data</div>
                    <div class="card-body">
                        <form action="{{ route('data-keluarga.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label>Desa wisma</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-1">
                                    <label>RT</label>
                                    <input type="text" min="1" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}">
                                    @error('jumlah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-1">
                                    <label>RW</label>
                                    <input type="text" min="1" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}">
                                    @error('jumlah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label>Dusun/Lingkungan</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-3">
                                    <label>Desa/Kelurahan</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label>Kecamatan</label>
                                    <input type="text" min="1" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}">
                                    @error('jumlah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label>Kab/Kota</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
                                    <label>Provinsi</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>  `
                            <div class="card">
                              <div class="card-header">Anggota Keluarga</div>
                              <div class="card-body">
                                <div class="form-group row">
                                  <div class="col-8">
                                    <label>Nama kepala rumah tangga</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-4">
                                    <label>Jumlah KK</label>
                                    <input type="number" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-8">
                                    <label>Jumlah anggota keluarga</label>
                                    <input type="number" min="1" id="anggota_keluarga" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-2">
                                    <label>Laki-laki</label>
                                    <input type="number" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-2">
                                    <label>Perempuan</label>
                                    <input type="number" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                </div>
                                <h3><b>Jumlah</b></h3>
                                <hr>
                                <div class="form-group row">
                                  <div class="col-2">
                                    <label>Balita</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-1">
                                    <label>PUS</label>
                                    <input type="number" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-1">
                                    <label>WUS</label>
                                    <input type="number" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-2">
                                    <label>Buta</label>
                                    <input type="number" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-2">
                                    <label>Ibu Hamil</label>
                                    <input type="number" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-2">
                                    <label>Ibu Menyusui</label>
                                    <input type="number" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-2">
                                    <label>Lansia</label>
                                    <input type="number" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                            </div>
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
                                  <div class="tg-wrap table-responsive">
                                <table class="tg">
                                  <thead>
                                    <tr>
                                      <th class="tg-0pky" rowspan="2"><br>NO</th>
                                      <th class="tg-0pky" rowspan="2"><br>NO.REG</th>
                                      <th class="tg-c3ow" rowspan="2"><br>NAMA<br>ANGGOTA <br>KELUARGA</th>
                                      <th class="tg-c3ow" rowspan="2"><br>STATUS <br>DLM<br>KELUARGA</th>
                                      <th class="tg-c3ow" rowspan="2"><br>STATUS <br>DLM <br>PERKAWINAN</th>
                                      <th class="tg-c3ow" colspan="2">JENIS <br>KELAMIN</th>
                                      <th class="tg-c3ow" rowspan="2"><br>TGL<br>LAHIR/<br>UMUR</th>
                                      <th class="tg-c3ow" rowspan="2"><br>PENDIDIKAN<br><br><br><br></th>
                                      <th class="tg-c3ow" rowspan="2"><br>PEKERJAAN</th>
                                    </tr>
                                    <tr>
                                      <td class="tg-c3ow">L</td>
                                      <td class="tg-c3ow">P</td>
                                    </tr>
                                  </thead>
                                  <tbody id="col-inputt">
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
                                    </tr>
                                    
                                  </tbody>
                                  </table></div>
                              </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Makanan pokok sehari-hari</label>
                                        </div>
                                        <div class="col-8 d-flex">
                                            <label>Beras <input type="radio" name="makanan_pokok"></label>
                                            <label>Non Beras <input type="radio" name="makanan_pokok"></label>
                                            <input type="number" name="jumlah_jabatan" class="ml-2 form-control" placeholder="jenis">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Mempunyai jabatan keluarga</label>
                                        </div>
                                        <div class="col-8 d-flex">
                                            <label>Ya <input type="radio" name="jabatan_keluarga"></label>
                                            <label>Tidak <input type="radio" name="jabatan_keluarga"></label>
                                            <input type="number" name="jumlah_jabatan" class="ml-2 form-control" placeholder="jumlah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Sumber air keluarga</label>
                                        </div>
                                        <div class="col-8 d-flex">
                                            <label>PDAM <input type="radio" name="sumber_air"></label>
                                            <label class="ml-1">Sumur <input type="radio" name="sumber_air"></label>
                                            <label class="ml-1">Sungai <input type="radio" name="sumber_air"></label>
                                            <input type="number" name="jumlah_jabatan" class="ml-2 form-control" placeholder="lainnya">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Memiliki tempat pembuangan sampah</label>
                                        </div>
                                        <div class="col-8">
                                            <label>Ya <input type="radio" name="pembuangan_sampah"></label>
                                            <label>Tidak <input type="radio" name="pembuangan_sampah"></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Memiliki saluran pembuangan air limbah</label>
                                        </div>
                                        <div class="col-8">
                                            <label>Ya <input type="radio" name="pembuangan_air"></label>
                                            <label>Tidak <input type="radio" name="pembuangan_air"></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Menempel stiker P4K</label>
                                        </div>
                                        <div class="col-8">
                                            <label>Ya <input type="radio" name="stiker_p4k"></label>
                                            <label>Tidak <input type="radio" name="stiker_p4k"></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Kriteria rumah</label>
                                        </div>
                                        <div class="col-8x">
                                            <label>Sehat <input type="radio" name="kriteria_rumah"></label>
                                            <label>Kurang sehat <input type="radio" name="kriteria_rumah"></label>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Aktifitas UP2k</label>
                                        </div>
                                        <div class="col-8 d-flex">
                                            <label>Ya <input type="radio" name="aktifitas_up2k"></label>
                                            <label>Tidak <input type="radio" name="aktifitas_up2k"></label>
                                            <input type="number" name="jumlah_jabatan" class="ml-2 form-control" placeholder="jenis usaha">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-4">
                                            <label>Aktifitas kegiatan usaha kesehatan lingkungan</label>
                                        </div>
                                        <div class="col-8">
                                            <label>Ya <input type="radio" name="kesehatan_lingkungan"></label>
                                            <label>Tidak <input type="radio" name="kesehatan_lingkungan"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4 class="text-center">PEMANFAATAN TANAH PEKARANGAN KELUARGA</h4>
                                <style type="text/css">
                                    .tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
                                    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                    overflow:hidden;padding:10px 5px;word-break:normal;}
                                    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                    font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                                    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                                    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                                    @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
                                    <div class="tg-wrap table-responsive"><table class="tg" style="undefined;table-layout: fixed; width: 755px">
                                    <colgroup>
                                    <col style="width: 126px">
                                    <col style="width: 230px">
                                    <col style="width: 172px">
                                    <col style="width: 227px">
                                    </colgroup>
                                    <thead>
                                    <tr>
                                        <th class="tg-c3ow">NO</th>
                                        <th class="tg-c3ow">KATEGORI</th>
                                        <th class="tg-c3ow">KOMODITI</th>
                                        <th class="tg-c3ow">JUMLAH</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="tg-c3ow">1</td>
                                        <td class="tg-c3ow">2</td>
                                        <td class="tg-c3ow">3</td>
                                        <td class="tg-c3ow">4</td>
                                    </tr>
                                    <tr>
                                        <td class="tg-0pky text-center">1</td>
                                        <td class="tg-0pky"><input type="text" style="width:100%" name="kategori" id=""></td>
                                        <td class="tg-0pky"><input type="text" style="width:100%" name="komoditi" id=""></td>
                                        <td class="tg-0pky"><input type="text" style="width:100%" name="jumlah" id=""></td>
                                    </tr>
                                    </tbody>
                                    </table></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h6 class="text-center"><i>Kategori : Peternakan, perikanan, warung hidup, toga, tanaman keras, lainnya</i></h6>
                                    <br>
                                    <h4 class="text-center">INDUSTRI RUMAH TANGGA</h4>
                                    <style type="text/css">
                                        .tg  {border-collapse:collapse;border-spacing:0;}
                                .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                  overflow:hidden;padding:10px 5px;word-break:normal;}
                                .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                                  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                                .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                                       </style>
                                    <div class="table-responsive">
                                      <table class="tg">
                                        <colgroup>
                                        <col style="width: 126px">
                                        <col style="width: 230px">
                                        <col style="width: 172px">
                                        <col style="width: 227px">
                                        </colgroup>
                                        <thead>
                                          <tr>
                                            <th class="tg-c3ow">NO</th>
                                            <th class="tg-c3ow">KATEGORI</th>
                                            <th class="tg-c3ow">KOMODITI</th>
                                            <th class="tg-c3ow">JUMLAH</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td class="tg-c3ow">1</td>
                                            <td class="tg-c3ow">2</td>
                                            <td class="tg-c3ow">3</td>
                                            <td class="tg-c3ow">4</td>
                                          </tr>
                                          <tr>
                                            <td class="tg-0pky text-center">1</td>
                                            <td class="tg-0pky"><input type="text" style="width:100%" name="kategori" id=""></td>
                                            <td class="tg-0pky"><input type="text" style="width:100%" name="komoditi" id=""></td>
                                            <td class="tg-0pky"><input type="text" style="width:100%" name="jumlah" id=""></td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success d-block mt-3 w-100">Tambah data keluarga</button>
                        </form>
                    </div>
                </div>
                    <br>
                    
                        
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

    $('#anggota_keluarga').change(function (e) { 
      var val = $(this).val();
      var a = `<tr>
                <td class="tg-0pky">-</td>
                <td class="tg-0pky"><input type="text" name="no_reg" id=""></td>
                <td class="tg-0pky"><input type="text" name="nama_anggota_keluarga" id=""></td>
                <td class="tg-0pky"><input type="text" name="status_dalam_keluarga" id=""></td>
                <td class="tg-0pky">
                  <label>Kawin <input value="K" type="radio" name="status_dalam_perkawinan"></label>
                  <label>Belum Kawin <input value="BK" type="radio" name="status_dalam_perkawinan"></label>
                </td>
                <td class="tg-0pky"><input type="radio" name="jenis_kelamin" id=""></td>
                <td class="tg-0pky"><input type="radio" name="jenis_kelamin" id=""></td>
                <td class="tg-0pky"><input type="date" name="tanggal_lahir/umur" id=""></td>
                <td class="tg-0pky"><input type="text" name="pendidikan" id=""></td>
                <td class="tg-0pky"><input type="text" name="pekerjaan" id=""></td>
              </tr>`;
      $('#col-inputt').html('');
      for (let i = 0; i < val; i++) {
        $('#col-inputt').append(a);
      }
    });
</script>
@endsection
