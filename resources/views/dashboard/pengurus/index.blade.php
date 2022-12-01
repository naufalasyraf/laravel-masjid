@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> {{ session('pesan')}}
</div>
@endif
<h1 class="text-center">Data Pengurus Masjid</h1>
<table class="table table-bordered text-center bg-light mt-4">
    <a href="/pengurusdashboard/create" class="btn btn-secondary"><i class="fa fa-plus"></i>Tambah Data</a>
    <thead class="bg-dark text-white">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Tgl Lahir</td>
        <td>Jenis Kelamin</td>
        <td>Jabatan</td>
        <td>Alamat</td>
        <td>Action</td>
    </tr>
    </thead>
    @foreach($penguruses as $pengurus)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$pengurus->nama}}</td>
        <td>{{$pengurus->tanggal_lahir}}</td>
        <td>{{$pengurus->jenis_kelamin}}</td>
        <td>{{$pengurus->jabatan->nama_jabatan}}</td>
        <td>{{$pengurus->alamat}}</td>
        
        <td>
            <a href="/pengurusdashboard/{{ $pengurus->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</a>
            <form action="pengurusdashboard/{{ $pengurus->id}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
{{ $penguruses ->links('pagination::bootstrap-5 ')}}

@endsection