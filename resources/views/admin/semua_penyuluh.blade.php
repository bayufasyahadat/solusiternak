@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">GEMBALA</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">PENYULUH</h6>
        </div>
        <div class="card-body">
            <a href="{{URL::to('/tambah_penyuluh')}}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-flag"></i>
                </span>
                <span class="text">Registrasi Penyuluh</span>
            </a>
            <div class="table-responsive" style='margin-top:20px;'>
                <table class="table table-bordered" id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Alamat</th>
                            <th>Diibuat</th>
                            <th>Diperbaharui</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Alamat</th>
                            <th>Diibuat</th>
                            <th>Diperbaharui</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>


                        @foreach($semua_penyuluh as $v_penyuluh)

                        <tr>
                            <td>{{$v_penyuluh->id}}</td>
                            <td>{{$v_penyuluh->nama}}</td>
                            <td>{{$v_penyuluh->email}}</td>
                            <td>{{$v_penyuluh->kata_sandi}}</td>
                            <td>{{$v_penyuluh->alamat}}</td>
                            <td>{{$v_penyuluh->created_at}}</td>
                            <td>{{$v_penyuluh->update_at}}</td>
                            <td style="padding:5px">
                                <a href="{{URL::to('/ubah_penyuluh/'. $v_penyuluh->id)}}" class="btn btn-info btn-icon-split" id="ubahPenyuluh">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <span class="text">Ubah</span>
                                </a>
                                <a href="{{URL::to('/hapus_penyuluh/'. $v_penyuluh->id)}}" class="btn btn-danger btn-icon-split" id="hapusPenyuluh">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-trash"></i>
                                    </span>
                                    <span class="text">Hapus</span>
                                </a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection