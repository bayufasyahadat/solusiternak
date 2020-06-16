<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;

session_start();

class AdminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_katasandi = $request->admin_katasandi;
        $result = DB::table('admin')
            ->where('email', $admin_email)
            ->where('kata_sandi', $admin_katasandi)
            ->first();

        if ($result) {
            Session::put('nama', $result->nama);
            Session::put('id', $result->id);
            return Redirect::to('/dashboard');
        } else {
            Session::put('message', 'Email atau Password salah');
            return Redirect::to('/admin');
        }
    }
}
