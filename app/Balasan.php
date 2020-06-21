<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balasan extends Model
{
    protected $table = 'balasan';
    public $primaryKey = 'id';


    protected $fillable = ['id', 'judul_balasan', 'deskripsi_balasan', 'penyuluh_id', 'peternak_id', 'keluhan_id', 'created_at'];

    public function penyuluh()
    {
        return $this->belongsTo('App\Penyuluh', 'id');
    }
}
