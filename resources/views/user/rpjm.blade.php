@extends('layouts.user')
@section('nav-pembangunan','active')
@section('content')
    <div class="cat-news my-5 container">
        <div class="row">
            <div class="col">
                <h2>RPJM Desa</h2>
                <div class="card border border-info">
                    <div class="card-header bg-info">List RPJM</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Bidang</th>
                                        <th>Lokasi</th>
                                        <th>Tahun</th>
                                        <th>Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->bidang }}</td>
                                        <td>{{ $item->lokasi }}</td>
                                        <td>{{ $item->tahun }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!-- CSS Here -->
<link href="{{ asset('admin/assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
<!-- Javascript Here -->
<script src="{{ asset('admin/assets/extra-libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/dist/js/pages/datatable/datatable-basic.init.js')}}"></script>
<script>
    $('#zero_config').DataTable();
</script>
@endsection
