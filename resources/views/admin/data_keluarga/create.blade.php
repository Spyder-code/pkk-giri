@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambahkan data-keluarga!</h3>
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
                    <div class="card-header bg-info text-white">Data data-keluargaan</div>
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
                                <div class="col-sm-3">
                                    <label>RT/RW</label>
                                    <input type="text" min="1" name="jumlah" class="form-control @error('jumlah') is-invalid @enderror" value="{{ old('jumlah') }}">
                                    @error('jumlah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-3">
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
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <textarea name="kegiatan" cols="30" rows="5" class="form-control @error('kegiatan') is-invalid @enderror">{{ old('kegiatan') }}</textarea>
                                    @error('kegiatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-success d-block mt-3 w-100">Buat data-keluarga</button>
                        </form>
                    </div>
                </div>
                <style type="text/css">
                    .tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
                    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                      overflow:hidden;padding:10px 5px;word-break:normal;}
                    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                    @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
                    <div class="tg-wrap"><table class="tg">
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
                      </tr>
                      <tr>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                      </tr>
                      <tr>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                        <td class="tg-0pky"></td>
                      </tr>
                    </tbody>
                    </table></div>
                    <br>
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
                        <div class="tg-wrap"><table class="tg" style="undefined;table-layout: fixed; width: 755px">
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
                            <td class="tg-0pky"></td>
                            <td class="tg-0pky"></td>
                            <td class="tg-0pky"></td>
                            <td class="tg-0pky"></td>
                          </tr>
                          <tr>
                            <td class="tg-0pky"></td>
                            <td class="tg-0pky"></td>
                            <td class="tg-0pky"></td>
                            <td class="tg-0pky"></td>
                          </tr>
                          <tr>
                            <td class="tg-0pky"></td>
                            <td class="tg-0pky"></td>
                            <td class="tg-0pky"></td>
                            <td class="tg-0pky"></td>
                          </tr>
                        </tbody>
                        </table></div>
                        <h6 class="text-center"><i>Kategori : Peternakan, perikanan, warung hidup, toga, tanaman keras, lainnya</i></h6>
                        <br>
                        <h4 class="text-center">INDUSTRI RUMAH TANGGA</h4>
                        <style type="text/css">
                            .tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
                            .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                              overflow:hidden;padding:10px 5px;word-break:normal;}
                            .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                              font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                            .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                            .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                            @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
                            <div class="tg-wrap"><table class="tg" style="undefined;table-layout: fixed; width: 755px">
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
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky"></td>
                              </tr>
                              <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky"></td>
                              </tr>
                              <tr>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky"></td>
                                <td class="tg-0pky"></td>
                              </tr>
                            </tbody>
                            </table></div>
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
