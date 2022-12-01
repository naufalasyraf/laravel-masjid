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
<h4 class="text-center">Kegiatan Masjid Raya Sumatera Barat</h4>
<font size="1">
<table class="table table-bordered mt-3 bg-light text-center" >
    <tr style="background-color:grey;" class="text-white">
        <td>No</td>
        <td>Tanggal</td>
        <td>Kegiatan</td>
        <td>Jam Mulai</td>
        <td>Jam Selesai</td>
    </tr>
    @foreach($kegiatans as $kegiatan)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$kegiatan->tanggal}}</td>
        <td>{{$kegiatan->kegiatan}}</td>
        <td>{{$kegiatan->jam_mulai}}</td>
        <td>{{$kegiatan->jam_selesai}}</td>
    </tr>
    @endforeach
</table>
</font>
</div>
</div>
</div>
</div>

{{ $kegiatans ->links('pagination::bootstrap-5 ')}}

@endsection