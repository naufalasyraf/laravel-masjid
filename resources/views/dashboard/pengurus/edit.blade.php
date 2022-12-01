@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <br>
        <h1>Tambah Data Pengurus</h1>
        <form action="/pengurusdashboard/{{ $penguruses->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Pengurus</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{old('nama',$penguruses->nama)}}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ old('tanggal_lahir',$penguruses->tanggal_lahir)}}" id="tanggal_lahir" name="tanggal_lahir">
                @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="mb-2">
                <label class="form-label">Jenis Kelamin</label>
                <div d-flex>
            <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="jenis_kelamin" class="custom-control-input" value="L" {{ old('jenis_kelamin',$penguruses->jenis_kelamin)=='L' ? 'checked' : ''}} checked><span class="custom-control-label">Laki-Laki</span>
            </label>
            <label class="custom-control custom-radio custom-control-inline">
                <input type="radio" name="jenis_kelamin" class="custom-control-input" value="P" {{ old('jenis_kelamin',$penguruses->jenis_kelamin)=='P' ? 'checked' : ''}}><span class="custom-control-label">Perempuan</span>
            </label>
            </div>
            @error('jenis_kelamin')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
        </div>

            <div class="mb-3">
                <select class="form-control" name="jabatan_id" aria-label="Default select example">
                    <option selected>Pilih jabatan</option>
                    @foreach ($jabatans as $jabatan)
                    @if (old('jabatan_id',$penguruses->jabatan_id)== $jabatan->id)
                    <option value="{{ $jabatan->id }}" selected>{{ $jabatan->nama_jabatan }}</option>
                    @else
                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3">{{ old('alamat',$penguruses->alamat)}}</textarea>
                @error('alamat')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3 ">
                <label nama="form-label"></label>
                <button type="submit" name="submit" class="btn btn-success col-md-3 offset-md-9">Tambah Data</button>
            </div>
        </form>
    </div>
</div>
@endsection