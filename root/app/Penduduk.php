<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penduduk extends Model
{
    use SoftDeletes;
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
