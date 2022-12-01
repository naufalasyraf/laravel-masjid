@extends('dashboard.layouts.main')

@section('container')
@if (session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil!</strong> {{ session('pesan')}}
</div>
@endif
<h1 class="text-center">Data Imam Masjid Raya Sumatera Barat</h1>
<div class="d-inline">
    <a href="{{url('/imamdashboard/create')}}" class="btn btn-secondary"><i class="fa fa-plus"></i> Tambah Data</a>
</div>

<table class="table table-bordered mt-3 bg-light text-center" >
    <tr style="background-color:grey;" class="text-white">
        <td>No</td>
        <td>Nama</td>
        <td>Action</td>
    </tr>
    @foreach($imams as $imam)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$imam->nama}}</td>
        <td>
            <a href="/imamdashboard/{{ $imam->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i>Edit</a>
            <form action="imamdashboard/{{ $imam->id}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger btn-sm" onClick="return confirm('Yakin akan menghapus data?')"><i class="fa fa-trash"></i>Delete</button>
            </form>
        </td>
@endforeach
    </tr>
</table>
{{ $imams ->links('pagination::bootstrap-5 ')}}

@endsection