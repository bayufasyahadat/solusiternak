@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">
    <form action="{{URL::to('/simpan_penyuluh')}}" method="post">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Nama</label>
                <input name="penyuluh_nama" type="text" class="form-control" id="inputEmail4" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input name="penyuluh_email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Kata Sandi</label>
                <input name="penyuluh_katasandi" type="password" class="form-control" id="inputPassword4" placeholder="Kata Sandi">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Alamat</label>
            <input name="penyuluh_alamat" type="text" class="form-control" id="inputAddress" placeholder="Alamat">
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>

@endsection