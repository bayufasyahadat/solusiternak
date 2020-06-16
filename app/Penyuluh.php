<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyuluh extends Model
{
    protected $table = 'peternak';
    public $primaryKey = 'id';

    protected $fillable = ['id', 'nama', 'email', 'kata_sandi', 'alamat'];
    public function balasan()
    {
        return $this->hasMany('App\Balasan', 'id');
    }
}
