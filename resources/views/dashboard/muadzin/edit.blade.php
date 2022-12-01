@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <br>
        <h1 class="text-center">Edit Nama Muadzin Masjid</h1>
        <form action="/muadzindashboard/{{ $muadzins->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Imam</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama',$muadzins->nama)}}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="btn-group ">
                <label nama="form-label"></label>
                <a href="{{url('muadzindashboard')}}" class="btn btn-warning"><i class="fa fa-reply"></i>Kembali</a>
                <div class="offset-md-11"></div>
                <button type="submit" name="submit" class="btn btn-success offset-md-10">Edit Data</button>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection