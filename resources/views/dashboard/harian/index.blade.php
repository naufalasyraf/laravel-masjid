@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> {{ session('pesan')}}
</div>
@endif
<h1 class="text-center">Data Pelaksana Harian</h1>
<div class="d-inline">
    <a href="{{url('/hariandashboard/create')}}" class="btn btn-secondary"><i class="fa fa-plus"></i> Tambah Data</a>
</div>

<table class="table table-bordered mt-3 bg-light text-center" >
    <tr style="background-color:grey;" class="text-white">
        <td>No</td>
        <td>Tanggal</td>
        <td>Imam</td>
        <td>Muadzin</td>
        <td>Piket</td>
        <td>Action</td>
    </tr>
    @foreach($harians as $harian)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$harian->tanggal}}</td>
        <td>{{$harian->imam->nama}}</td>
        <td>{{$harian->muadzin->nama}}</td>
        <td>{{$harian->pengurus->nama}}</td>
        
        <td>
            <a href="/hariandashboard/{{ $harian->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</a>
            <form action="hariandashboard/{{ $harian->id}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i>Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $harians ->links('pagination::bootstrap-5 ')}}

@endsection