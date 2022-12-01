@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <br>
        <h1>Tambah Data Pelaksana Jumat</h1>
        <form action="{{url('jumatdashboard')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal')}}" id="tanggal" name="tanggal">
                @error('tanggal')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <select class="form-control" name="imam_id" aria-label="Default select example">
                    <option selected>Pilih Imam</option>
                    @foreach ($imams as $imam)
                    @if (old('imam_id')== $imam->id)
                    <option value="{{ $imam->id }}" selected>{{ $imam->nama }}</option>
                    @else
                    <option value="{{ $imam->id }}">{{ $imam->nama }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <select class="form-control" name="muadzin_id" aria-label="Default select example">
                    <option selected>Pilih Muadzin</option>
                    @foreach ($muadzins as $muadzin)
                    @if (old('muadzin_id')== $muadzin->id)
                    <option value="{{ $muadzin->id }}" selected>{{ $muadzin->nama }}</option>
                    @else
                    <option value="{{ $muadzin->id }}">{{ $muadzin->nama }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Khatib</label>
                <input type="text" class="form-control @error('khatib') is-invalid @enderror" id="khatib" name="khatib" value="{{old('khatib')}}">
                @error('khatib')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <select class="form-control" name="pengurus_id" aria-label="Default select example">
                    <option selected>Pilih Piket</option>
                    @foreach ($penguruses as $pengurus)
                    @if (old('pengurus_id')== $pengurus->id)
                    <option value="{{ $pengurus->id }}" selected>{{ $pengurus->nama }}</option>
                    @else
                    <option value="{{ $pengurus->id }}">{{ $pengurus->nama }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="btn-group ">
                <label nama="form-label"></label>
                <a href="{{url('jumatdashboard')}}" class="btn btn-warning"><i class="fa fa-reply"></i>Kembali</a>
                <div class="offset-md-8"></div>
                <button type="submit" name="submit" class="btn btn-success offset-md-6">Tambah Data</button>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection