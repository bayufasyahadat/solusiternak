<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peternak;
use App\Keluhan;
use DB;
use App\Http\Requests;
use Illuminate\support\Facedes\Redirect;

session_start();

class KeluhanController extends Controller
{
    public function simpanKeluhan(Request $request)
    {
        Keluhan::create([
            'judul_keluhan' => $request->judul_keluhan,
            'deskripsi_keluhan' => $request->deskripsi_keluhan,
            'penyuluh_id' => $request->penyuluh_id,
            'peternak_id' => auth()->id()
        ]);

        return redirect()->back();
    }
}
