@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Peternakan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('simpan_peternakan') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama_peternakan" class="col-md-4 col-form-label text-md-right">{{ __('Nama Peternakan') }}</label>

                            <div class="col-md-6">
                                <input id="nama_peternakan" type="text" class="form-control @error('nama_peternakan') is-invalid @enderror" name="nama_peternakan" value="{{ old('nama_peternakan') }}" required autocomplete="nama_peternakan" autofocus>

                                @error('nama_peternakan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah_hewan_ternak" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Hewan Ternak') }}</label>

                            <div class="col-md-6">
                                <input id="jumlah_hewan_ternak" type="number" class="form-control @error('jumlah_hewan_ternak') is-invalid @enderror" name="jumlah_hewan_ternak" value="{{ old('jumlah_hewan_ternak') }}" required autocomplete="jumlah_hewan_ternak">

                                @error('jumlah_hewan_ternak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_hewan_ternak" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Hewan Ternak') }}</label>

                            <div class="col-md-6">
                                <input id="jenis_hewan_ternak" type="text" class="form-control @error('jenis_hewan_ternak') is-invalid @enderror" name="jenis_hewan_ternak" value="{{ old('jenis_hewan_ternak') }}" required autocomplete="jenis_hewan_ternak">

                                @error('jenis_hewan_ternak')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <input type="submit" class="btn btn-primary" value="Register">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection