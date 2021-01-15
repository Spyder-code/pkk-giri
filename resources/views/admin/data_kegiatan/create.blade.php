@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambahkan data-kegiatan!</h3>
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
                    <div class="card-header bg-info text-white">Data data-kegiatanan</div>
                    <div class="card-body">
                        <form action="{{ route('data-kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col">
                                    <label>Nama Kepala Rumah Tangga</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>
                            <h5>Jumlah anggota keluarga</h5>
                            <div class="form-group">
                                <label>Jumlah KK</label>
                                <input type="number" name="" class="form-control">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">Total</div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>L</label>
                                                    <input type="number" name="" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label>L</label>
                                                    <input type="number" name="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card">
                                        <div class="card-header">Balita</div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col">
                                                    <label>L</label>
                                                    <input type="number" name="" class="form-control">
                                                </div>
                                                <div class="col">
                                                    <label>L</label>
                                                    <input type="number" name="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Kegiatan</label>
                                <textarea name="kegiatan" cols="30" rows="5" class="form-control @error('kegiatan') is-invalid @enderror">{{ old('kegiatan') }}</textarea>
                                    @error('kegiatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <button type="submit" class="btn btn-success d-block mt-3 w-100">Buat data-kegiatan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <style type="text/css">
                    .tg  {border-collapse:collapse;border-spacing:0;}
                    .tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                      overflow:hidden;padding:10px 5px;word-break:normal;}
                    .tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
                      font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
                    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                    </style>
                    <table class="tg">
                    <thead>
                      <tr>
                        <th class="tg-c3ow" rowspan="3">NO</th>
                        <th class="tg-c3ow" rowspan="3">Nama Kepala<br>Rumah Tangga</th>
                        <th class="tg-c3ow" colspan="12">Jumlah Anggota Keluarga</th>
                        <th class="tg-c3ow" colspan="6"></th>
                      </tr>
                      <tr>
                        <td class="tg-c3ow" rowspan="2">Jumlah<br>KK</td>
                        <td class="tg-c3ow" colspan="2">Total</td>
                        <td class="tg-c3ow" colspan="2">Balita</td>
                        <td class="tg-c3ow" rowspan="2">PUS</td>
                        <td class="tg-c3ow" rowspan="2">WUS</td>
                        <td class="tg-c3ow" rowspan="2">Ibu<br>Hamil</td>
                        <td class="tg-c3ow" rowspan="2">Ibu<br>Menyusui</td>
                        <td class="tg-c3ow" rowspan="2">Lansia</td>
                        <td class="tg-c3ow" rowspan="2">Buta</td>
                        <td class="tg-c3ow" rowspan="2">Berkebutuhan<br>Khusus</td>
                        <td class="tg-c3ow" rowspan="2">Sehat<br>Layak<br>Huni</td>
                        <td class="tg-c3ow" rowspan="2">Tidak Sehat<br>Layak Huni</td>
                        <td class="tg-c3ow" rowspan="2">Memiliki<br>Tempat<br>Pembuangan<br>Sampah</td>
                        <td class="tg-c3ow" rowspan="2">Memiliki<br>spal</td>
                        <td class="tg-c3ow" rowspan="2">Memiliki<br>Jamban<br>Keluarga</td>
                        <td class="tg-c3ow" rowspan="2">Menempel<br>Stiker<br>P4K</td>
                      </tr>
                      <tr>
                        <td class="tg-c3ow">L</td>
                        <td class="tg-c3ow">P</td>
                        <td class="tg-c3ow">L</td>
                        <td class="tg-c3ow">P</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="tg-c3ow">a</td>
                        <td class="tg-c3ow"><input type="text" name="nama_kepala_rumah_tangga" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="jumlah_kk" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="total_l" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="total_p" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="balita_l" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="balita_p" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="pus" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="wus" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="ibu_hamil" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="ibu_menyusui" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="lansia" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="buta" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="berkebutuhan_khusus" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="sehat_layak_huni" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="tidak_sehat_layak_huni" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="memiliki_temp_pemb_sampah" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="memiliki_spal" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="memiliki_jamban_keluarga" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="menempel_stiker_p4k" id=""></td>
                      </tr>
                      <tr>
                        <td class="tg-c3ow">a</td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                      </tr>
                    </tbody>
                    </table>
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
                    .tg .tg-baqh{text-align:center;vertical-align:top}
                    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                    @media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}</style>
                    <div class="tg-wrap"><table class="tg" style="undefined;table-layout: fixed; width: 1022px">
                    <colgroup>
                    <col style="width: 55px">
                    <col style="width: 72px">
                    <col style="width: 84px">
                    <col style="width: 95px">
                    <col style="width: 114px">
                    <col style="width: 84px">
                    <col style="width: 152px">
                    <col style="width: 127px">
                    <col style="width: 118px">
                    <col style="width: 121px">
                    </colgroup>
                    <thead>
                      <tr>
                        <th class="tg-c3ow" colspan="3">Sumber Air Keluarga</th>
                        <th class="tg-c3ow" colspan="2">Makanan Pokok</th>
                        <th class="tg-c3ow" colspan="4">Warga Mengikuti Kegiatan</th>
                        <th class="tg-c3ow" rowspan="2">Ket</th>
                      </tr>
                      <tr>
                        <td class="tg-c3ow">PDAM</td>
                        <td class="tg-c3ow">Sumur</td>
                        <td class="tg-c3ow">dll</td>
                        <td class="tg-c3ow">Beras</td>
                        <td class="tg-c3ow">Non Beras</td>
                        <td class="tg-c3ow">UP2K</td>
                        <td class="tg-c3ow">Pemanfaatan Tanabalitah<br>Pekarangan</td>
                        <td class="tg-baqh">Industri Rumah<br>Tangga</td>
                        <td class="tg-c3ow">Kerja Bakti</td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="tg-c3ow"><input type="text" name="sumber_air_pdam" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="sumber_air_sumur" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="sumber_air_dll" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="makanan_pokok_beras" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="makanan_pokok_non_beras" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="warga_mengikuti_kegiatan_up2k" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="warga_mengikuti_kegiatan_pemanfaatan_tanah_pekarangan" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="warga_mengikuti_kegiatan_industri_rumah_tangga" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="warga_mengikuti_kegiatan_kerjabakti" id=""></td>
                        <td class="tg-c3ow"><input type="text" name="keterangan" id=""></td>
                      </tr>
                      <tr>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                      </tr>
                      <tr>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
                        <td class="tg-c3ow"></td>
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
