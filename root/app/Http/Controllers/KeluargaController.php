<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;

class KeluargaController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $data = Penduduk::all();
        $penduduk = $data->unique('no_kk');
        $keluarga = collect();
        foreach($penduduk as $p){
            $keluarga->push([
                'id' => $p->id,
                'no_kk' => $p->no_kk,
                'kepala_keluarga' => Penduduk::where('no_kk',$p->no_kk)->where('kedudukan',1)->pluck('nama')->first(),
                'istri' => Penduduk::where('no_kk',$p->no_kk)->where('kedudukan',2)->pluck('nama')->first(),
                'jumlah_1' => Penduduk::where('no_kk',$p->no_kk)->where('kedudukan',3)->count(),
                'jumlah_2' => Penduduk::where('no_kk',$p->no_kk)->where('kedudukan',4)->count(),
                'alamat' => $p->alamat
            ]);
        }
        return view('keluarga.index',['keluarga'=>$keluarga]);
    }
    public function detail($nokk){
        $keluarga = Penduduk::where('no_kk',$nokk);
        $kepala_k = Penduduk::where('no_kk',$nokk)->where('kedudukan',1)->first();
        $istri = Penduduk::where('no_kk',$nokk)->where('kedudukan',2)->first();
        return view('keluarga.detail',['keluarga'=>$keluarga, 'kepala_k'=>$kepala_k, 'istri'=>$istri]);
    }
}
