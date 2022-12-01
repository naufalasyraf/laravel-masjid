@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <br>
        <h1>Edit Data Keuangan</h1>
        <form action="/keuangandashboard/{{ $keuangans->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', $keuangans->tanggal)}}" id="tanggal" name="tanggal">
                @error('tanggal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label nama="form-label">Keterangan</label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" value="{{ old('keterangan', $keuangans->keterangan)}}" id="keterangan" name="keterangan">
                @error('keterangan')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            

            <div class="mb-3">
                <label for = "masuk" nama="form-label">Uang Masuk</label>
                <input type="number" class="form-control" value="{{ old('masuk', $keuangans->masuk)}}" id="masuk" name="masuk" >
                @error('masuk')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for = "keluar" nama="form-label">Uang keluar</label>
                <input type="number" class="form-control " value="{{ old('keluar', $keuangans->keluar)}}" id="keluar" name="keluar" >
                @error('keluar')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="btn-group ">
                <label nama="form-label"></label>
                <a href="{{url('keuangandashboard')}}" class="btn btn-warning"><i class="fa fa-reply"></i>Kembali</a>
                <div class="offset-md-11"></div>
                <button type="submit" name="submit" class="btn btn-success offset-md-10">Edit Data</button>
            </div>
        </form>
    </div>
</div>
@endsection