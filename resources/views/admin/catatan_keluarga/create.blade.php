@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambahkan catatan-keluarga!</h3>
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
                    <div class="card-header bg-info text-white">Data catatan-keluarga</div>
                    <div class="card-body">
                        <form action="{{ route('catatan-keluarga.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label>Catatan Keluarga Dari</label>
                                    <input type="text" name="keluarga_dari" class="form-control @error('keluarga_dari') is-invalid @enderror" value="{{ old('keluarga_dari') }}">
                                    @error('keluarga_dari')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <label>Kelompok Dasa Wisma</label>
                                    <input type="text" name="kelompok_dasa_wisma_dari" class="form-control @error('kelompok_dasa_wisma_dari') is-invalid @enderror" value="{{ old('kelompok_dasa_wisma_dari') }}">
                                    @error('kelompok_dasa_wisma_dari')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="number" name="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}">
                                    @error('tahun')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            
                            <input type="file" name="file">
                            <button type="submit" class="btn btn-success mt-3 d-block w-100">Buat catatan-keluarga</button>
                        </form>
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
                    .tg .tg-baqh{text-align:center;vertical-align:top}
                    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                    .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                    .tg .tg-0lax{text-align:left;vertical-align:top}
                    @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
                    <div class="tg-wrap table-responsive"><table class="tg">
                    <thead>
                      <tr>
                        <th class="tg-0pky" rowspan="2"><br>No</th>
                        <th class="tg-c3ow" rowspan="2"><br>Nama Anggota<br>Keluarga<br></th>
                        <th class="tg-c3ow" rowspan="2"><br>Status<br>Perkawinan</th>
                        <th class="tg-c3ow" rowspan="2"><br>Jenis Kelamin<br>(L/P)</th>
                        <th class="tg-0pky" rowspan="2"><br>Tempat Lahir<br></th>
                        <th class="tg-0pky" rowspan="2"><br>Tanggal Lahir</th>
                        <th class="tg-0pky" rowspan="2"><br>Agama</th>
                        <th class="tg-0pky" rowspan="2"><br>Pendidikan</th>
                        <th class="tg-0lax" rowspan="2"><br>Pekerjaan</th>
                        <th class="tg-c3ow" rowspan="2"><br>Berkebutuhan<br>Khusus</th>
                      </tr>
                      <tr>
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
                        <td class="tg-baqh">9</td>
                        <td class="tg-c3ow">10</td>
                      </tr>
                      <tr>
                        <td class="tg-0pky">a</td>
                        <td class="tg-0pky"><input type="text" name="nama_anggota_keluarga"></td>
                        <td class="tg-0pky"><input type="text" name="status_perkawinan"></td>
                        <td class="tg-0pky"><input type="text" name="jenis_kelamin"></td>
                        <td class="tg-0pky"><input type="text" name="tempat_lahir"></td>
                        <td class="tg-0pky"><input type="text" name="tanggal_lahir"></td>
                        <td class="tg-0pky"><input type="text" name="agama"></td>
                        <td class="tg-0pky"><input type="text" name="pendidikan"></td>
                        <td class="tg-0lax"><input type="text" name="pekerjaan"></td>
                        <td class="tg-0pky"><input type="text" name="berkebutuhan_khusus"></td>
                      </tr>
                    </tbody>
                    </table></div>
                    <br>    
                    <style type="text/css">
                        .tg  {border-collapse:collapse;border-spacing:0;margin:0px auto;}
                        .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                          overflow:hidden;padding:10px 5px;word-break:normal;}
                        .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                          font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                        .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                        .tg .tg-9ydz{border-color:#333333;font-weight:bold;text-align:center;vertical-align:top}
                        .tg .tg-de2y{border-color:#333333;text-align:left;vertical-align:top}
                        .tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
                        @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
                        <div class="tg-wrap table-responsive"><table class="tg">
                        <thead>
                          <tr>
                            <th class="tg-9ydz" colspan="8">Kegiatan PKK yang di ikuti</th>
                            <th class="tg-de2y" rowspan="2"><br>Keterangan</th>
                          </tr>
                          <tr>
                            <td class="tg-c3ow">Penghayatan<br>&amp;<br>Pengamalan Pancasila</td>
                            <td class="tg-0pky">Gotong<br>Royong</td>
                            <td class="tg-c3ow">Pendidikan<br>&amp;<br>Keterampilan</td>
                            <td class="tg-c3ow">Pengembangan<br>Kehidupan<br>Berkoperasi</td>
                            <td class="tg-0pky">Pangan</td>
                            <td class="tg-0pky">Sandang</td>
                            <td class="tg-0pky">Kesehatan</td>
                            <td class="tg-c3ow">Perencanaan<br>Sehat</td>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="tg-c3ow">11</td>
                            <td class="tg-c3ow">12</td>
                            <td class="tg-c3ow">13</td>
                            <td class="tg-c3ow">14</td>
                            <td class="tg-c3ow">15</td>
                            <td class="tg-c3ow">16</td>
                            <td class="tg-c3ow">17</td>
                            <td class="tg-c3ow">18</td>
                            <td class="tg-c3ow">19</td>
                          </tr>
                          <tr>
                            <td class="tg-0pky"><input type="text" name="penghayatan_dan_pengamalan_pancasila"></td>
                            <td class="tg-0pky"><input type="text" name="gotong_royong"></td>
                            <td class="tg-0pky"><input type="text" name="pendidikan_dan_keterampilan"></td>
                            <td class="tg-0pky"><input type="text" name="pengembangan_kehidupan_beroperasi"></td>
                            <td class="tg-0pky"><input type="text" name="pangan"></td>
                            <td class="tg-0pky"><input type="text" name="sandang"></td>
                            <td class="tg-0pky"><input type="text" name="kesehatan"></td>
                            <td class="tg-0pky"><input type="text" name="perencanaan_kesehatan"></td>
                            <td class="tg-0pky"><input type="text" name="keterangan"></td>
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
