@extends('layouts.app')
@push('page-title')
Data Penjualan Komputer
@endpush
@push('custom-style')
<link href="{{asset('assets/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
<!-- <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}"> -->
<link href="{{asset('assets/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/data-tables/responsive.datatables.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/select2/css/select2-boostrap.min.css')}}">
@endpush

@section('content')
<div class="breadcrumb-wrapper">
    <h1>
        Data Penjualan Komputer
    </h1>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom d-flex justify-content-between mb-4">
                <h2>Data Penjualan Komputer</h2>
                <div>
                    <a href="{{ route('komputer.create') }}" target="" class="btn btn-outline-primary text-uppercase">
                        <i class="fas fa-plus-circle mr-2"></i> Tambah Data
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="responsive-data-table">
                    <table class="table dt-responsive nowrap data-table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Merek</th>
                                <th>Bulan</th>
                                <th>Tahun</th>
                                <th>Jumlah</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @forelse ($komputer as $k)
                            <tr>
                                <td>{{$no}}</td>
                                <td>{{ $k->merek }}</td>
                                <td>
                                    @if($k->bulan == 1)
                                    <span>Januari</span>
                                    @elseif($k->bulan == 2)
                                    <span>Februari</span>
                                    @elseif($k->bulan == 3)
                                    <span>Maret</span>
                                    @elseif($k->bulan == 4)
                                    <span>April</span>
                                    @elseif($k->bulan == 5)
                                    <span>Mei</span>
                                    @elseif($k->bulan == 6)
                                    <span>Juni</span>
                                    @elseif($k->bulan == 7)
                                    <span>Juli</span>
                                    @elseif($k->bulan == 8)
                                    <span>Agustus</span>
                                    @elseif($k->bulan == 9)
                                    <span>September</span>
                                    @elseif($k->bulan == 10)
                                    <span>Oktober</span>
                                    @elseif($k->bulan == 11)
                                    <span>November</span>
                                    @elseif($k->bulan == 12)
                                    <span>Desember</span>
                                    @else
                                    <span></span>
                                    @endif
                                </td>
                                <td>{{ $k->tahun }}</td>
                                <td>{{ $k->jumlah }}</td>
                                <td class="text-center">
                                    <a href="{{ route('komputer.show', $k->id) }}" class="btn btn-sm btn-dark"><i class="fa fa-eye"></i></a>
                                    <a href="{{ route('komputer.edit', $k->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-pencil-alt"></i></a>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('komputer.destroy', $k->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @php $no++; @endphp
                            @empty
                            <div class="alert alert-danger">
                                Data belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-script')
<!-- <script src="{{asset('assets/bootstrap/js/bootstrap.min.js') }}"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<script src="{{asset('assets/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.responsive.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('.data-table').DataTable();
    });
</script>
@endpush