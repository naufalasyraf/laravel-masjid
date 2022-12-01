@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> {{ session('pesan')}}
</div>
@endif
<h1 class="text-center">Data Keuangan Masjid</h1>
<div class="d-inline">
    <a href="/keuangandashboard/create" class="btn btn-secondary"><i class="fa fa-plus"></i>Tambah Data</a>
</div>

<table class="table table-bordered mt-3 bg-light text-center" >
    <tr style="background-color:grey;" class="text-white">
        <td>No</td>
        <td>Tanggal</td>
        <td>Keterangan</td>
        <td>Masuk</td>
        <td>Keluar</td>
        <td>Action</td>
    </tr>
    @foreach($keuangans as $keuangan)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$keuangan->tanggal}}</td>
        <td>{{$keuangan->keterangan}}</td>
        <td>@currency($keuangan->masuk)</td>
        <td>@currency($keuangan->keluar)</td>
        
        <td>
            <a href="/keuangandashboard/{{ $keuangan->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</a>
            <form action="keuangandashboard/{{ $keuangan->id}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    <tr>
        <td colspan="5" class="bg-dark" style="color:white;">Total Uang Masuk</td>
        <td>@currency($keuangan->sum('masuk'))</td>
    </tr>
    <tr>
        <td colspan="5" class="bg-dark" style="color:white;">Total Uang Keluar</td>
        <td>@currency($keuangan->sum('keluar'))</td>
    </tr>
    <tr>
        <td colspan="5" class="bg-dark" style="color:white;">Sisa Kas</td>
        <td>@currency(($keuangan->sum('masuk'))-($keuangan->sum('keluar')))</td>
    </tr>
</table>

{{ $keuangans ->links('pagination::bootstrap-5 ')}}

@endsection