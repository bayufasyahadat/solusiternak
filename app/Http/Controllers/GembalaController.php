<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;

session_start();

class GembalaController extends Controller
{
    public function index()
    {
        return view('penyuluh.gembala_login');
    }

    public function cekLogin(Request $request)
    {
        $penyuluh_email = $request->penyuluh_email;
        $penyuluh_katasandi = $request->penyuluh_katasandi;
        $result = DB::table('penyuluh')
            ->where('email', $penyuluh_email)
            ->where('kata_sandi', $penyuluh_katasandi)
            ->first();

        if ($result) {
            Session::put('nama', $result->nama);
            Session::put('id', $result->id);
            return Redirect::to('/gembala');
        } else {
            Session::put('message', 'Email atau Password salah');
            return Redirect::to('/penyuluh');
        }
    }

    public function keluhanPeternak()
    {
        $semua_keluhan = DB::table('keluhan')
            ->join('users', 'users.id', '=', 'keluhan.peternak_id')
            ->select('keluhan.*', 'users.name')
            ->where('penyuluh_id', Session::get('id'))
            ->get();
        $manage_keluhan = view('penyuluh.keluhan-peternak')
            ->with('semua_keluhan', $semua_keluhan);

        return view('/gembala')
            ->with('penyuluh.keluhan-peternak', $manage_keluhan);
    }

    public function lihatKeluhan($id)
    {
        $keluhan_info = DB::table('keluhan')
            ->where('keluhan.id', $id)
            ->first();

        $keluhan_info = view('penyuluh.lihat_keluhan')
            ->with('keluhan_info', $keluhan_info);
        return view('gembala')
            ->with('penyuluh.lihat_keluhan', $keluhan_info);
    }

    public function logout(Request $request)
    {
        Session::flush();
        return Redirect::to('/penyuluh');
    }
}
