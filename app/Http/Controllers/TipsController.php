<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class TipsController extends Controller
{
    public function index()
    {
        $semua_tips = DB::table('tips')->get();
        $manage_tips = view('admin.semua_tips')
            ->with('semua_tips', $semua_tips);

        return view('admin_layout')
            ->with('admin.semua_tips', $manage_tips);
    }

    public function tambahTips()
    {
        return view('admin.tambah_tips');
    }

    public function simpanTips(Request $request)
    {
        $data = array();
        $data['judul_tips'] = $request->judul_tips;
        $data['deskripsi_tips'] = $request->deskripsi_tips;
        $data['created_at'] = null;
        $data['updated_at'] = null;

        DB::table('tips')->insert($data);
        Session::put('message', 'pembuatan tips berhasil !!');
        return Redirect::to('/tambah_tips');
    }

    public function hapusTips($id)
    {
        DB::table('tips')
            ->where('id', $id)
            ->delete();

        Session::get('messege', 'Tips berhasil dihapus');
        return Redirect::to('/semua_tips');
    }

    public function ubahTips($id)
    {
        $tips_info = DB::table('tips')
            ->where('id', $id)
            ->first();
        $tips_info = view('admin.ubah_tips')
            ->with('tips_info', $tips_info);
        return view('admin_layout')
            ->with('admin.ubah_tips', $tips_info);
    }

    public function updateTips(Request $request, $id)
    {
        $data = array();
        $data['judul_tips'] = $request->judul_tips;
        $data['deskripsi_tips'] = $request->deskripsi_tips;
        $data['created_at'] = null;
        $data['updated_at'] = null;

        DB::table('tips')
            ->where('id', $id)
            ->update($data);

        Session::put('message', 'update tips berhasil !!');
        return Redirect::to('/semua_tips');
    }
}
