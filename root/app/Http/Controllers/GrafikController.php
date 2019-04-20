<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;

class GrafikController extends Controller
{
    public function pekerjaan(){
        $pekerjaan = \DB::table('m_pekerjaan')->select('pekerjaan')->get();
        $list_p = collect();
        foreach($pekerjaan as $p){
            $list_p->push(
                "$p->pekerjaan"
            );
        }
        $list_p = json_encode($list_p);
        return view('grafik.pekerjaan',['list_p'=>$list_p]);
    }
}
