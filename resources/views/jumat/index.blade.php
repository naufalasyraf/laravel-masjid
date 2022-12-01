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
<h4 class="text-center">Data Pelaksana Jumat</h4>
<font size="1">
<table class="table table-bordered mt-3 bg-light text-center" >
    <tr style="background-color:grey;" class="text-white">
        <td>No</td>
        <td>Tanggal</td>
        <td>Imam</td>
        <td>Muadzin</td>
        <td>Khatib</td>
        <td>Piket</td>
    </tr>
    @foreach($jumats as $jumat)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>jumat, {{$jumat->tanggal}}</td>
        <td>{{$jumat->imam->nama}}</td>
        <td>{{$jumat->muadzin->nama}}</td>
        <td>{{$jumat->khatib}}</td>
        <td>{{$jumat->pengurus->nama}}</td>
    </tr>
    @endforeach
</table>
</font>
</div>
</div>
</div>
</div>

{{ $jumats ->links('pagination::bootstrap-5 ')}}

@endsection