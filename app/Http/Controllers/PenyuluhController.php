<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class PenyuluhController extends Controller
{
    public function index()
    {
        $semua_penyuluh = DB::table('penyuluh')->get();
        $manage_penyuluh = view('admin.semua_penyuluh')
            ->with('semua_penyuluh', $semua_penyuluh);

        return view('admin_layout')
            ->with('admin.semua_penyuluh', $manage_penyuluh);
    }

    public function tambahPenyuluh()
    {
        return view('admin.tambah_penyuluh');
    }

    public function simpanPenyuluh(Request $request)
    {
        $data = array();
        $data['nama'] = $request->penyuluh_nama;
        $data['email'] = $request->penyuluh_email;
        $data['kata_sandi'] = md5($request->penyuluh_katasandi);
        $data['alamat'] = $request->penyuluh_alamat;
        $data['created_at'] = null;
        $data['update_at'] = null;

        DB::table('penyuluh')->insert($data);
        Session::put('message', 'registrasi penyuluh berhasil !!');
        return Redirect::to('/tambah_penyuluh');
    }

    public function hapusPenyuluh($id)
    {
        DB::table('penyuluh')
            ->where('id', $id)
            ->delete();

        Session::get('messege', 'Akun penyuluh berhasil dihapus');
        return Redirect::to('/semua_penyuluh');
    }

    public function ubahPenyuluh($id)
    {
        $penyuluh_info = DB::table('penyuluh')
            ->where('id', $id)
            ->first();
        $penyuluh_info = view('admin.ubah_penyuluh')
            ->with('penyuluh_info', $penyuluh_info);
        return view('admin_layout')
            ->with('admin.ubah_penyuluh', $penyuluh_info);
    }
    public function updatePenyuluh(Request $request, $id)
    {
        $data = array();
        $data['nama'] = $request->penyuluh_nama;
        $data['email'] = $request->penyuluh_email;
        $data['kata_sandi'] = md5($request->penyuluh_katasandi);
        $data['alamat'] = $request->penyuluh_alamat;
        $data['created_at'] = null;
        $data['update_at'] = null;

        DB::table('penyuluh')
            ->where('id', $id)
            ->update($data);

        Session::put('message', 'registrasi penyuluh berhasil !!');
        return Redirect::to('/semua_penyuluh');
    }
}
