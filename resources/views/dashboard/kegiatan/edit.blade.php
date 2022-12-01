@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <br>
        <h1>Edit Data Kegiatan</h1>
        <form action="/kegiatandashboard/{{ $kegiatans->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal')}}" id="tanggal" name="tanggal">
                @error('tanggal',$kegiatans->tanggal)
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Kegiatan</label>
                <input type="text" class="form-control @error('Kegiatan') is-invalid @enderror" id="kegiatan" name="kegiatan" value="{{old('kegiatan')}}">
                @error('kegiatan',$kegiatans->kegiatan)
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jam Mulai</label>
                <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" id="jam_mulai" name="jam_mulai" value="{{old('jam_mulai')}}">
                @error('jam_mulai',$kegiatans->jam_mulai)
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jam Selesai</label>
                <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" id="jam_selesai" name="jam_selesai" value="{{old('jam_selesai')}}">
                @error('jam_selesai',$kegiatans->jam_selesai)
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="btn-group ">
                <label nama="form-label"></label>
                <a href="{{url('kegiatandashboard')}}" class="btn btn-warning"><i class="fa fa-reply"></i>Kembali</a>
                <div class="offset-md-11"></div>
                <button type="submit" name="submit" class="btn btn-success offset-md-10">Edit Data</button>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection