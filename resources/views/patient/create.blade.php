@extends('layouts.app', ['title' => 'Tambah Data Pasien'])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Form Pasien</div>
                    <div class="card-body">
                        <h5 class="card-title">Tambah Data Pasien</h5>
                        <form action="/pasien" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{--<div class="form-group mt-1 mb-3">
                                <label for="foto">Foto Pasien (jpg, jpeg, png)</label>
                                <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                    name="foto">
                                <span class="text-danger">{{ $errors->first('foto') }}</span>
                            </div> --}}
                            <div class="form-group mt-1 mb-3">
                                <label for="name">Nama Pasien</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                     name="name" value="{{ old('name') }}">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            </div>



                            <div class="form-group mt-1 mb-3">
                                <label for="no">Nomor Pasien</label>
                                <input type="text" class="form-control @error('no') is-invalid @enderror"
                                    id="no" name="no" value="{{ old('no') }}">
                                <span class="text-danger">{{ $errors->first('no') }}</span>
                            </div>

 

                            <div class="form-group mt-1 mb-3">
                                <label for="age">Umur</label>
                                <input type="number" class="form-control @error('age') is-invalid @enderror"
                                    id="age" name="age" value="{{ old('age') }}">
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            </div>

 

                            <div class="form-group mt-1 mb-3">
                                <label for="gender">Jenis Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="laki_laki"
                                        value="laki-laki" {{ old('gender') === 'laki-laki' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="gender" id="perempuan"
                                        value="perempuan" {{ old('gender') === 'perempuan' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="perempuan">Perempuan</label>
                                </div>
                                <span class="text-danger">{{ $errors->first('gender') }}</span>
                            </div>
                            <div class="form-group mt-1 mb-3">
                                <label for="address">Alamat</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror"
                                    id="alamat" name="alamat" value="{{ old('address') }}">
                                <span class="text-danger">{{ $errors->first('address') }}</span>
                            </div>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection