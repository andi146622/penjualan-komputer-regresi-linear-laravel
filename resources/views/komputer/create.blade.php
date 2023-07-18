@extends('layouts.app')
@push('page-title')
Tambah Data Penjualan
@endpush
@push('custom-style')
<link href="{{asset('assets/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />
<link href="{{asset('assets/data-tables/datatables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/data-tables/responsive.datatables.min.css')}}" rel="stylesheet" />
<link href="{{asset('assets/select2/css/select2.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="{{asset('assets/select2/css/select2-boostrap.min.css')}}">
@endpush

@section('content')
<div class="breadcrumb-wrapper">
    <h1 class="mb-2">Tambah Data Penjualan</h1>
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
                    Tambah Data Penjualan
            </li>
        </ol>
    </nav>
</div>

<form action="{{ route('komputer.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card card-default">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Input Data Penjualan Komputer</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Merek</label>
                            <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek') }}" placeholder="Masukkan merek Komputer">

                            <!-- error message untuk merek -->
                            @error('merek')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Bulan</label>
                            <select name="bulan" class="form-control" id="bulan">
                                <option value="">Pilih Bulan</option>
                                <option value="1">Januari</option>
                                <option value="2">Februari</option>
                                <option value="3">Maret</option>
                                <option value="4">April</option>
                                <option value="5">Mei</option>
                                <option value="6">Juni</option>
                                <option value="7">Juli</option>
                                <option value="8">Agustus</option>
                                <option value="9">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>

                            <!-- error message untuk bulan -->
                            @error('bulan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Tahun</label>
                            <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}" placeholder="Masukkan tahun">

                            <!-- error message untuk tahun -->
                            @error('tahun')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Jumlah Penjualan</label>
                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah') }}" placeholder="Masukkan jumlah penjualan">

                            <!-- error message untuk Alamat -->
                            @error('jumlah')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Tambah Data</button>
</form>
@endsection

@push('custom-script')
<script src="{{asset('assets/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.responsive.min.js')}}"></script>
@endpush