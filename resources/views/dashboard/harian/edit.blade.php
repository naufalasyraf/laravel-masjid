@extends('dashboard.layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-6">
        <br>
        <h1>Edit Data Pelaksana</h1>
        <form action="/hariandashboard/{{ $harians->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal',$harians->tanggal)}}" id="tanggal" name="tanggal">
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
                    @if (old('imam_id',$harians->imam_id)== $imam->id)
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
                    @if (old('muadzin_id',$harians->muadzin_id)== $muadzin->id)
                    <option value="{{ $muadzin->id }}" selected>{{ $muadzin->nama }}</option>
                    @else
                    <option value="{{ $muadzin->id }}">{{ $muadzin->nama }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <select class="form-control" name="pengurus_id" aria-label="Default select example">
                    <option selected>Pilih Piket</option>
                    @foreach ($penguruses as $pengurus)
                    @if (old('pengurus_id',$harians->pengurus_id)== $pengurus->id)
                    <option value="{{ $pengurus->id }}" selected>{{ $pengurus->nama }}</option>
                    @else
                    <option value="{{ $pengurus->id }}">{{ $pengurus->nama }}</option>
                    @endif
                    @endforeach
                </select>
            </div>

            <div class="btn-group ">
                <label nama="form-label"></label>
                <a href="{{url('hariandashboard')}}" class="btn btn-warning"><i class="fa fa-reply"></i>Kembali</a>
                <div class="offset-md-11"></div>
                <button type="submit" name="submit" class="btn btn-success offset-md-10">  Edit Data</button>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection