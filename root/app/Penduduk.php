<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = "t_penduduk";
    public $timestamps = false;
    protected $dates = [
        'tgl_lahir',    
    ];
//    public function setTglLahirAttribute($value)
//    {
//        $this->attributes['tgl_lahir'] = 'convertion rules';
//    }
}
