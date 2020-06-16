<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    protected $table = 'keluhan';
    public $primaryKey = 'id';


    protected $fillable = ['id', 'judul_keluhan', 'deskripsi_keluhan', 'penyuluh_id', 'peternak_id', 'created_at'];

    public function peternak()
    {
        return $this->belongsTo('App\Peternak', 'id');
    }
}
