@extends('layouts.main')

@section('container')
<br>
<br>
<br>
<br>
<br>
<div class="row justify-content-center">
<div class="col-lg-10">
<div class="card-body bg-primary">
<div class="card-body bg-light">
<h4 class="text-center">Neraca Keuangan Masjid Raya Sumatera Barat</h4>
<font size="1">
<table class="table table-bordered mt-3 bg-light text-center" >
    <thead>
    <tr style="background-color:grey;" class="text-white">
        <td>No</td>
        <td>Tanggal</td>
        <td>Keterangan</td>
        <td>Masuk</td>
        <td>Keluar</td>
    </tr>
    </thead>
    @foreach($keuangans as $keuangan)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$keuangan->tanggal}}</td>
        <td>{{$keuangan->keterangan}}</td>
        <td>@currency($keuangan->masuk)</td>
        <td>@currency($keuangan->keluar)</td>
    </tr>
    @endforeach
    <tr>
        <td colspan="4" class="bg-dark" style="color:white;">Total Uang Masuk</td>
        <td>@currency($keuangan->sum('masuk'))</td>
    </tr>
    <tr>
        <td colspan="4" class="bg-dark" style="color:white;">Total Uang Keluar</td>
        <td>@currency($keuangan->sum('keluar'))</td>
    </tr>
    <tr>
        <td colspan="4" class="bg-dark" style="color:white;">Sisa Kas</td>
        <td>@currency(($keuangan->sum('masuk'))-($keuangan->sum('keluar')))</td>
    </tr>
</table>
</font>
</div>
</div>
</div>
</div>

{{ $keuangans ->links('pagination::bootstrap-5 ')}}

@endsection