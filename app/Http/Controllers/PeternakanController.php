<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Peternakan;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Session;

session_start();

class PeternakanController extends Controller
{
    public function simpanPeternakan(Request $request)
    {
        $this->validate($request, array(
            'nama_peternakan' => 'required',
            'jenis_hewan_ternak' => 'required',
            'jumlah_hewan_ternak' => 'required',
        ));

        Peternakan::create([
            'nama_peternakan' => $request->nama_peternakan,
            'jumlah_hewan_ternak' => $request->jumlah_hewan_ternak,
            'jenis_hewan_ternak' => $request->jenis_hewan_ternak,
            'peternak_id' => auth()->id()
        ]);

        return Redirect::to('/home');
    }
}
