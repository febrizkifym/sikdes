<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Penduduk;

class Mutasi extends Model
{
    protected $table = 't_mutasi';
    public function penduduk(){
        return $this->belongsTo('App\Penduduk','id_penduduk','id')->withTrashed();
    }
}
