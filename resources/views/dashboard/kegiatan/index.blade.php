@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> {{ session('pesan')}}
</div>
@endif
<h1 class="text-center">Agenda Kegiatan Masjid Raya Sumatera Barat</h1>
<table class="table table-bordered text-center bg-light mt-4">
    <a href="/kegiatandashboard/create" class="btn btn-secondary"><i class="fa fa-plus"></i>Tambah Data</a>
    <thead class="bg-dark text-white">
    <tr>
        <td>No</td>
        <td>Tanggal</td>
        <td>Kegiatan</td>
        <td>Jam Mulai</td>
        <td>Jam Selesai</td>
        <td>Action</td>
    </tr>
    </thead>
    @foreach($kegiatans as $kegiatan)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$kegiatan->tanggal}}</td>
        <td>{{$kegiatan->kegiatan}}</td>
        <td>{{$kegiatan->jam_mulai}}</td>
        <td>{{$kegiatan->jam_selesai}}</td>
        <td>
            <a href="/kegiatandashboard/{{ $kegiatan->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</a>
            <form action="kegiatandashboard/{{ $kegiatan->id}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $kegiatans ->links('pagination::bootstrap-5 ')}}

@endsection