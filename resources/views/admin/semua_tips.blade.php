@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">GEMBALA</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tips</h6>
        </div>
        <div class="card-body">
            <a href="{{URL::to('/tambah_tips')}}" class="btn btn-primary btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-flag"></i>
                </span>
                <span class="text">Tambah Tips</span>
            </a>
            <div class="table-responsive" style='margin-top:20px;'>
                <table class="table table-bordered" id="example" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Diibuat</th>
                            <th>Diperbaharui</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Diibuat</th>
                            <th>Diperbaharui</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>


                        @foreach($semua_tips as $v_tips)

                        <tr>
                            <td>{{$v_tips->id}}</td>
                            <td>{{$v_tips->judul_tips}}</td>
                            <td>{{$v_tips->deskripsi_tips}}</td>
                            <td>{{$v_tips->created_at}}</td>
                            <td>{{$v_tips->updated_at}}</td>
                            <td style="padding:5px">
                                <a href="{{URL::to('/ubah_tips/'. $v_tips->id)}}" class="btn btn-info btn-icon-split" id="ubahtips">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-info-circle"></i>
                                    </span>
                                    <span class="text">Ubah</span>
                                </a>
                                <a href="{{URL::to('/hapus_tips/'. $v_tips->id)}}" class="btn btn-danger btn-icon-split" id="hapustips">
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