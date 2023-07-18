@extends('layouts.app')
@push('page-title')
Edit Data Penjualan
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
    <h1 class="mb-2">Edit Data Penjualan</h1>
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
                    Edit Data Penjualan
            </li>
        </ol>
    </nav>
</div>

<form action="{{ route('komputer.update', $komputer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card card-default">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Edit Data Penjualan Komputer</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Merek</label>
                            <input type="text" class="form-control @error('merek') is-invalid @enderror" name="merek" value="{{ old('merek', $komputer->merek) }}" placeholder="Masukkan merek Komputer">

                            <!-- error message untuk merek -->
                            @error('merek')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Bulan</label>
                            <select name="bulan" class="form-control">
                                <option value="1" {{old('bulan', $komputer->bulan) == 1 ? 'selected' : ''}}>Januari</option>
                                <option value="2" {{old('bulan', $komputer->bulan) == 2 ? 'selected' : ''}}>Februari</option>
                                <option value="3" {{old('bulan', $komputer->bulan) == 3 ? 'selected' : ''}}>Maret</option>
                                <option value="4" {{old('bulan', $komputer->bulan) == 4 ? 'selected' : ''}}>April</option>
                                <option value="5" {{old('bulan', $komputer->bulan) == 5 ? 'selected' : ''}}>Mei</option>
                                <option value="6" {{old('bulan', $komputer->bulan) == 6 ? 'selected' : ''}}>Juni</option>
                                <option value="7" {{old('bulan', $komputer->bulan) == 7 ? 'selected' : ''}}>Juli</option>
                                <option value="8" {{old('bulan', $komputer->bulan) == 8 ? 'selected' : ''}}>Agustus</option>
                                <option value="9" {{old('bulan', $komputer->bulan) == 9 ? 'selected' : ''}}>September</option>
                                <option value="10" {{old('bulan', $komputer->bulan) == 10 ? 'selected' : ''}}>Oktober</option>
                                <option value="11" {{old('bulan', $komputer->bulan) == 11 ? 'selected' : ''}}>November</option>
                                <option value="12" {{old('bulan', $komputer->bulan) == 12 ? 'selected' : ''}}>Desember</option>
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
                            <input type="number" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun', $komputer->tahun) }}" placeholder="Masukkan tahun">

                            <!-- error message untuk tahun -->
                            @error('tahun')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Jumlah Penjualan</label>
                            <input type="number" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah', $komputer->jumlah) }}" placeholder="Masukkan jumlah penjualan">

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
    <button type="submit" class="btn btn-primary btn-lg">Edit Data</button>
</form>
@endsection

@push('custom-script')
<script src="{{asset('assets/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.responsive.min.js')}}"></script>
@endpush