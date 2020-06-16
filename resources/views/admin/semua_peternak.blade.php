@extends('admin_layout')
@section('admin_content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">Gembala</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">PETERNAK</h6>
        </div>
        <div class="card-body">
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
                        </tr>
                    </tfoot>
                    <tbody>


                        @foreach($semua_peternak as $v_peternak)

                        <tr>
                            <td>{{$v_peternak->id}}</td>
                            <td>{{$v_peternak->name}}</td>
                            <td>{{$v_peternak->email}}</td>
                            <td>{{$v_peternak->password}}</td>
                            <td>{{$v_peternak->alamat}}</td>
                            <td>{{$v_peternak->created_at}}</td>
                            <td>{{$v_peternak->updated_at}}</td>
                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection