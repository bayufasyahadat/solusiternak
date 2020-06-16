<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peternak extends Model
{
    protected $table = 'peternak';
    public $primaryKey = 'id';

    protected $fillable = ['id', 'nama', 'email', 'kata_sandi', 'alamat'];
    public function keluhan()
    {
        return $this->hasMany('App\Keluhan', 'id');
    }
}
