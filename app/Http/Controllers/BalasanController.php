<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peternak;
use App\Balasan;
use DB;
use App\Http\Requests;
use Illuminate\support\Facedes\Redirect;

session_start();

class BalasanController extends Controller
{
    public function simpanBalasan(Request $request)
    {
        Balasan::create([
            'judul_balasan' => $request->judul_balasan,
            'deskripsi_balasan' => $request->deskripsi_balasan,
            'peternak_id' => $request->peternak_id,
            'petnyuluh_id' => auth()->id()
        ]);

        return redirect()->back();
    }
}
