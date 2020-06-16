<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;

session_start();

class SuperGembalaController extends Controller
{
    public function index()
    {
        $this->GembalaAuthCheck();
        return view('penyuluh.gembala_home');
    }

    public function GembalaAuthCheck()
    {
        $penyuluh_id = Session::get('id');
        if ($penyuluh_id) {
            return;
        } else {
            return Redirect::to('/penyuluh')->send();
        }
    }
}
