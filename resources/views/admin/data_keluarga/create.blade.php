@extends('layouts.admin')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Tambahkan Produk!</h3>
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
                    <div class="card-header bg-info text-white">Data Produk</div>
                    <div class="card-body">
                        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-5">
                                    <label>Nama produk</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                                    @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-5">
                                    <label>Stock</label>
                                    <input type="number" min="1" name="stok" class="form-control @error('stok') is-invalid @enderror" value="{{ old('stok') }}">
                                    @error('stok')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col">
                                    <label>Berat</label>
                                    <div class="input-group">
                                        <input type="number" name="berat" class="form-control @error('berat') is-invalid @enderror" value="{{ old('berat') }}" step=any>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary disabled" type="button">Kg</button>
                                    </div>
                                    @error('berat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" cols="30" rows="5" class="form-control @error('deskripsi') is-invalid @enderror">{{ old('deskripsi') }}</textarea>
                                    @error('deskripsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="form-group row">
                                <div class="text-center col">
                                    <label>Harga area 1</label>
                                    <input value="{{ old('harga1') }}" type="text" data-toggle="tooltip" data-placement="bottom" title="1-50km" name="harga1" class="uang form-control @error('harga1') is-invalid @enderror" placeholder="Rp.">
                                    @error('harga1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="text-center col">
                                    <label>Harga area 2</label>
                                    <input value="{{ old('harga2') }}" type="text" data-toggle="tooltip" data-placement="bottom" title="51-100km" name="harga2" class="form-control uang @error('harga2') is-invalid @enderror" placeholder="Rp.">
                                    @error('harga2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="text-center col">
                                    <label>Harga area 3</label>
                                    <input value="{{ old('harga3') }}" type="text" data-toggle="tooltip" data-placement="bottom" title="101-200km" name="harga3" class="form-control uang @error('harga3') is-invalid @enderror" placeholder="Rp.">
                                    @error('harga3')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="text-center col">
                                    <label>Harga area 4</label>
                                    <input value="{{ old('harga4') }}" type="text" data-toggle="tooltip" data-placement="bottom" title=">200km" name="harga4" class="form-control uang @error('harga4') is-invalid @enderror" placeholder="Rp.">
                                    @error('harga4')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-row">
                                    <div class="col col-sm-4 mr-5">
                                        <h6 class="text-center">Gambar utama</h6>
                                        <hr>
                                            <label for="image1" class="text-center" data-id="img1">
                                                <img src="{{asset('images/addImage.png')}}" id="img1" style="height:259px; width:300px">
                                            </label>
                                            <input type="file" name="image1" id="image1"  onchange="loadImg(event)" hidden>
                                    </div>
                                    <div class="col">
                                        <h6 class="text-center">Gambar pendukung</h6>
                                        <hr>
                                        <div class="row text-center">
                                            <div class="col">
                                                <label for="image2" class="text-center" data-id="img2">
                                                    <img src="{{asset('images/addImage.png')}}" id="img2" style="height:150px; width:170px">
                                                </label>
                                                <input type="file" name="image2" id="image2" onchange="loadImg(event)" hidden>
                                            </div>
                                            <div class="col">
                                                <label for="image3" class="text-center" data-id="img3">
                                                    <img src="{{asset('images/addImage.png')}}" id="img3" style="height:150px; width:170px">
                                                </label>
                                                <input type="file" name="image3" id="image3" onchange="loadImg(event)" hidden>
                                            </div>
                                            <div class="col">
                                                <label for="image4" class="text-center" data-id="img4">
                                                    <img src="{{asset('images/addImage.png')}}" id="img4" style="height:150px; width:170px">
                                                </label>
                                                <input type="file" name="image4" id="image4" onchange="loadImg(event)" hidden>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success d-block w-100">Buat Produk</button>
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
