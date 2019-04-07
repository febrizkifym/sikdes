<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Penduduk;

class PendudukController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    public function index(Request $r){
        if($r->has('agama')){
            $penduduk = Penduduk::where('id_agama',$r->agama)->get();
        }elseif($r->has('pekerjaan')){
            $penduduk = Penduduk::where('id_pekerjaan',$r->pekerjaan)->get();
        }elseif($r->has('pendidikan')){
            $penduduk = Penduduk::where('id_pend',$r->pendidikan)->get();
        }elseif($r->has('usia_dari')){
            $getusia = Penduduk::get(['id','tgl_lahir']);
            $usia = collect();
            foreach($getusia as $get){
                $usia->push([
                    'id_penduduk' => $get->id,
                    'usia' => (int)Carbon::parse($get->tgl_lahir)->diff(Carbon::now())->format('%y')
                ]);
            }
            $total = $usia->where('usia','>=',$r->usia_dari)->where('usia','<=',$r->usia_ke)->all();
            if($total){
                $query = collect();
                foreach($total as $t){
                    $query->push([
                       $t['id_penduduk']
                    ]);
                }
                $penduduk = Penduduk::whereIn('id',$query)->get();
            }else{
                $penduduk = Penduduk::where('id',-1)->get();
            }
        }
        else{
            $penduduk = Penduduk::all();
        }
        return view('penduduk.index',['penduduk'=>$penduduk]);
    }
    public function add(){
        return view('penduduk.add');
    }
    public function post(Request $r){
        $p = new Penduduk;
        $p->nama = $r->nama;
        $p->nik = $r->nik;
        $p->no_kk = $r->nokk;
        
        $p->jk = $r->jk;
        $p->status = $r->status;
        $p->alamat = $r->alamat;
        
        $p->tempat_lahir = $r->tempatlahir;
        $p->tgl_lahir = $r->tanggallahir;
        
        $p->warganegara = $r->warganegara;
        $p->kedudukan = $r->kedudukan;
        $p->butahuruf = $r->butahuruf;
        
        $p->id_agama = $r->agama;
        $p->id_pend = $r->pendidikan;
        $p->id_pekerjaan = $r->pekerjaan;
        $p->id_cacat = $r->cacat;
        
        $p->save();
    	return redirect('/penduduk')->with('success','Input Data Berhasil');
    }
    public function edit($id){
        $penduduk = Penduduk::find($id);
        return view('penduduk.edit',['p'=>$penduduk]);
    }
    public function update(Request $r,$id){
        $p = Penduduk::find($id);
        $p->nama = $r->nama;
        $p->nik = $r->nik;
        $p->no_kk = $r->nokk;
        
        $p->jk = $r->jk;
        $p->status = $r->status;
        $p->alamat = $r->alamat;
        
        $p->tempat_lahir = $r->tempatlahir;
        $p->tgl_lahir = $r->tanggallahir;
        
        $p->warganegara = $r->warganegara;
        $p->kedudukan = $r->kedudukan;
        $p->butahuruf = $r->butahuruf;
        
        $p->id_agama = $r->agama;
        $p->id_pend = $r->pendidikan;
        $p->id_pekerjaan = $r->pekerjaan;
        $p->id_cacat = $r->cacat;
        
        $p->save();
    	return redirect('/penduduk')->with('success','Update Data Berhasil');
    }
    public function detail($id){
        $penduduk = Penduduk::find($id);
        return view('penduduk.detail',['p'=>$penduduk]);
    }
    public function delete($id){
        $p = Penduduk::find($id);
        $p->delete();
        return redirect('/penduduk')->with('success','Hapus Data Berhasil');
    }
}
