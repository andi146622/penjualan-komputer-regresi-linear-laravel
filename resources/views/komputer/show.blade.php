@extends('layouts.app')
@push('page-title')
Detail Penjualan Komputer
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
    <h1 class="mb-2">Detail Penjualan Komputer</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
                <a href="{{route('komputer.index')}}">
                    <span class="mdi mdi-home"></span>
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('komputer.index')}}"">
                    Data Penjualan
                </a>
            </li>
            <li class=" breadcrumb-item" aria-current="page">
                    Detail Penjualan
            </li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card card-default">
            <div class="card-header">
                <div class="d-flex rounded-circle align-items-center justify-content-center mr-3 media-icon iconbox-45 bg-warning text-white">
                    <i class="fa fa-eye"></i>
                </div>
                <h2>Detail Penjualan Komputer</h2>
            </div>
            <div class="card-body">
                <p class="tmt-3">Merek Komputer : {{ $komputer->merek }}</p>
                <hr>
                <p class="tmt-3">Bulan Penjualan :
                    @if($komputer->bulan == 1)
                    <span>Januari</span>
                    @elseif($komputer->bulan == 2)
                    <span>Februari</span>
                    @elseif($komputer->bulan == 3)
                    <span>Maret</span>
                    @elseif($komputer->bulan == 4)
                    <span>April</span>
                    @elseif($komputer->bulan == 5)
                    <span>Mei</span>
                    @elseif($komputer->bulan == 6)
                    <span>Juni</span>
                    @elseif($komputer->bulan == 7)
                    <span>Juli</span>
                    @elseif($komputer->bulan == 8)
                    <span>Agustus</span>
                    @elseif($komputer->bulan == 9)
                    <span>September</span>
                    @elseif($komputer->bulan == 10)
                    <span>Oktober</span>
                    @elseif($komputer->bulan == 11)
                    <span>November</span>
                    @elseif($komputer->bulan == 12)
                    <span>Desember</span>
                    @else
                    <span></span>
                    @endif
                </p>
                <hr>
                <p class="tmt-3">Tahun Penjualan : {{ $komputer->tahun }}</p>
                <hr>
                <p class="tmt-3 mb-3">Jumlah Penjualan : {{ $komputer->jumlah}}</p>
                <a href="{{ route('komputer.index') }}" class="btn btn-md btn-primary">KEMBALI</a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('custom-script')
<script src="{{asset('assets/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.responsive.min.js')}}"></script>
@endpush

</body>

</html>