<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peternakan extends Model
{
    protected $table = 'peternakan';
    public $primaryKey = 'id';


    protected $fillable = ['id', 'nama_peternakan', 'jumlah_hewan_ternak', 'jenis_hewan_ternak', 'peternak_id', 'created_at'];

    public function peternak()
    {
        return $this->belongsTo('App\Peternak', 'id');
    }
}
