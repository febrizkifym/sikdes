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
        
        $penduduk = Penduduk::where('id','>',0);
        if($r->has('status') && $r->status !== null){
            $penduduk->where('deleted_at',true);
        }if($r->has('agama') && $r->agama !== null){
            $penduduk->where('id_agama',$r->agama);
        }
        if($r->has('pekerjaan') && $r->pekerjaan !== null){
            $penduduk->where('id_pekerjaan',$r->pekerjaan);
        }
        if($r->has('pendidikan') && $r->pendidikan !== null){
            $penduduk->where('id_pend',$r->pendidikan);
        }
        if($r->has('usia_dari') && $r->usia_dari !== null){
            if($r->usia_ke == null){
                return redirect('penduduk')->with('warning','Mohon lengkapi form filter');
            }
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
                $penduduk->whereIn('id',$query);
            }else{
                $penduduk->where('id',-1);
            }
        }
        $penduduk = $penduduk->get();
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
        // $p->butahuruf = $r->butahuruf;
        
        $p->id_agama = $r->agama;
        $p->id_pend = $r->pendidikan;
        $p->id_pekerjaan = $r->pekerjaan;
        // $p->id_cacat = $r->cacat;
        
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
        // $p->butahuruf = $r->butahuruf;
        
        $p->id_agama = $r->agama;
        $p->id_pend = $r->pendidikan;
        $p->id_pekerjaan = $r->pekerjaan;
        // $p->id_cacat = $r->cacat;
        
        $p->save();
    	return redirect('/penduduk')->with('success','Update Data Berhasil');
    }
    public function detail($id){
        $penduduk = Penduduk::withTrashed()->find($id);
        return view('penduduk.detail',['p'=>$penduduk]);
    }
    public function delete($id){
        $p = Penduduk::find($id);
        $p->forceDelete();
        return redirect('/penduduk')->with('success','Hapus Data Berhasil');
    }
}
