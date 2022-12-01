@extends('layouts.main')

@section('container')
<br>
<br>
<br>
<br>
<br>
<div class="row justify-content-center">
<div class="col-lg-9">
<div class="card-body bg-primary">
<div class="card-body bg-light">
<h4 class="text-center">Data Pelaksana Harian</h4>
<font size="1">
<table class="table table-bordered mt-3 bg-light text-center" >
    <tr style="background-color:grey;" class="text-white">
        <td>No</td>
        <td>Tanggal</td>
        <td>Imam</td>
        <td>Muadzin</td>
        <td>Piket</td>
    </tr>
    @foreach($harians as $harian)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$harian->tanggal}}</td>
        <td>{{$harian->imam->nama}}</td>
        <td>{{$harian->muadzin->nama}}</td>
        <td>{{$harian->pengurus->nama}}</td>
    </tr>
    @endforeach
</table>
</font>
</div>
</div>
</div>
</div>

{{ $harians ->links('pagination::bootstrap-5 ')}}

@endsection