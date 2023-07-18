@extends('layouts.app')
@push('page-title')
Prediksi Penjualan Komputer
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
    <h1>
        Prediksi Penjualan Komputer Menggunakan Algoritma Regresi Linier
    </h1>
</div>
<form id="predictForm" class="mt-4" method="post">
    <div class="row">
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="card card-default">
                <div class="card-header-border-bottom card-header d-flex justify-content-between">
                    <h2>Prediksi Penjualan Komputer</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Merek</label>
                            <select name="merek" class="form-control" id="merek">
                                @foreach($merek as $m)
                                <option value="{{$m->merek}}">{{$m->merek}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Bulan</label>
                            <select name="bulan" class="form-control" id="bulan">
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
                        </div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <label>Tahun</label>
                            <input type="number" class="form-control" id="tahun" name="tahun" required>
                        </div>
                        <div class="form-row col-lg-12 col-md-12 col-sm-12 mb-4">
                            <div id="result" class="mt-4" style="display: none;">
                                <h3 class="mb-2">Hasil Prediksi :</h3>
                                <p id="prediksi"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">Prediksi</button>
</form>
@endsection


@push('custom-script')
<script src="{{asset('assets/select2/js/select2.min.js')}}"></script>
<script src="{{asset('assets/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/data-tables/datatables.responsive.min.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#predictForm').submit(function(e) {
            e.preventDefault();
            // Mengambil nilai input dari form
            var formData = {
                merek: $('#merek').val(),
                processor: $('#processor').val(),
                ram: $('#ram').val(),
                storage: $('#storage').val(),
                ukuran_layar: $('#ukuran_layar').val(),
                tahun: $('#tahun').val(),
                _token: $('meta[name="csrf-token"]').attr('content')
            };

            // Mengirim permintaan POST ke endpoint prediksi penjualan
            $.ajax({
                type: 'POST',
                url: "{{ url('prediksi')}}",
                data: formData,
                success: function(response) {
                    // Menampilkan hasil prediksi Penjualan
                    console.log(response.prediksiPenjualan);
                    $('#prediksi').text("Jumlah Penjualan = " + response.prediksiPenjualan);
                    $('#result').show();
                },
                error: function(xhr, status, error) {
                    // Tangani kesalahan jika permintaan gagal
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>
@endpush