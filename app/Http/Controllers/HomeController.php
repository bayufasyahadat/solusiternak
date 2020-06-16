<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.home');
    }

    public function konsultasi()
    {
        return view('pages.konsultasi');
    }

    public function penyuluh()
    {
        $semua_penyuluh = DB::table('penyuluh')->get();
        $manage_penyuluh = view('pages.penyuluh')
            ->with('semua_penyuluh', $semua_penyuluh);

        return view('layout')
            ->with('pages.penyuluh', $manage_penyuluh);
    }

    public function profilPenyuluh($id)
    {
        $penyuluh_info = DB::table('penyuluh')
            ->where('penyuluh.id', $id)
            ->first();

        $penyuluh_info = view('pages.profil_penyuluh')
            ->with('penyuluh_info', $penyuluh_info);
        return view('layout')
            ->with('pages.profil_penyuluh', $penyuluh_info);
    }

    public function profilPeternak($id)
    {
        $users_info = DB::table('users')
            ->join('peternakan', 'users.id', '=', 'peternakan.peternak_id')
            ->select('users.*', 'peternakan.*')
            ->where('users.id', $id)
            ->first();

        $users_info = view('pages.profil_peternak')
            ->with('users_info', $users_info);
        return view('layout')
            ->with('pages.profil_peternak', $users_info);
    }

    public function registerPeternakan()
    {
        return view('pages.register_peternakan');
    }

    public function tips()
    {
        $semua_tips = DB::table('tips')->get();
        $manage_tips = view('pages.tips')
            ->with('semua_tips', $semua_tips);

        return view('layout')
            ->with('pages.tips', $manage_tips);
    }

    public function detailTips($id)
    {
        $tips_info = DB::table('tips')
            ->where('tips.id', $id)
            ->first();

        $tips_info = view('pages.detail_tips')
            ->with('tips_info', $tips_info);
        return view('layout')
            ->with('pages.detail_tips', $tips_info);
    }
}
