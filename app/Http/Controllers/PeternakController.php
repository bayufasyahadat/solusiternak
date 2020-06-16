<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class PeternakController extends Controller
{
    public function index()
    {
        $semua_peternak = DB::table('users')->get();
        $manage_peternak = view('admin.semua_peternak')
            ->with('semua_peternak', $semua_peternak);

        return view('admin_layout')
            ->with('admin.semua_peternak', $manage_peternak);
    }

    public function simpanPeternak(Request $request)
    {
        $data = array();
        $data['nama'] = $request->peternak_nama;
        $data['email'] = $request->peternak_email;
        $data['kata_sandi'] = md5($request->peternak_katasandi);
        $data['alamat'] = $request->peternak_alamat;
        $data['created_at'] = null;
        $data['update_at'] = null;

        DB::table('users')->insert($data);
        Session::put('message', 'registrasi peternak berhasil !!');
        return Redirect::to('/layout');
    }
}
