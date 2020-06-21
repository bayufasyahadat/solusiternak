<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Keluhan;
use App\Balasan;
use DB;
use App\Http\Requests;
use Illuminate\support\Facedes\Redirect;
use Session;
use Auth;

session_start();

class BalasanController extends Controller
{
    public function simpanBalasan(Request $request)
    {
        $peternak = User::find($request->peternak_id);

        $keluhan = Keluhan::find($request->keluhan_id);
        
        Balasan::create([
            'judul_balasan' => $keluhan->judul_keluhan,
            'deskripsi_balasan' => $request->deskripsi_balasan,
            'peternak_id' => $peternak->id,
            'penyuluh_id' => Session::get('id'),
            'keluhan_id' => $keluhan->id,
        ]);

        return redirect()->back();
    }
}
