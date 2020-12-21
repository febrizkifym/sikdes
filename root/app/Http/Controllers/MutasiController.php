<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutasi;
use App\Penduduk;
use PDF;

class MutasiController extends Controller
{
    /*
        kode jenis mutasi
        1 => penduduk datang
        2 => penduduk pergi
        3 => penduduk meninggal
        4 => pindah nomor kk
    */
    
    public function index(){
        $mutasi = Mutasi::all();
        return view('mutasi.index',['mutasi'=>$mutasi]);
    }
    public function add(){
        return view('mutasi.add');
    }
    public function import($nik){
        $penduduk = Penduduk::where('nik',$nik)->first();
        if($penduduk){
            return view('mutasi.add',['p'=>$penduduk]);
        }else{
            return abort(404);
        }
    }
    public function post(Request $r){
        $m = new Mutasi;
        $penduduk = Penduduk::where('nik',$r->nik)->first();
        $m->id_penduduk = $penduduk->id;
        $m->status = $r->jenis_mutasi;
        $m->created_at = $r->tanggal;
        $m->keterangan = $r->keterangan;
        $m->save();
        if($r->jenis_mutasi == 3){
            $p = Penduduk::where('nik',$r->nik)->delete();
        }
        if($r->jenis_mutasi == 4){
            $p = Penduduk::where('nik',$r->nik)->first();
            $p->no_kk = $r->nokk;
            $p->save();
        }
        return redirect('mutasi')->with('success','Input Data Berhasil');
    }
    public function detail($id){
        $m = Mutasi::find($id);
        return view('mutasi.detail',['m'=>$m]);
    }
    public function edit($id){
        $m = Mutasi::find($id);
        return view('mutasi.edit',['m'=>$m]);
    }
    public function update(Request $r, $id){
        $old_value = Penduduk::where('nik',$r->nik)->get();
        $m = Mutasi::find($id);
        $penduduk = Penduduk::where('nik',$r->nik)->first();
        $m->id_penduduk = $penduduk->id;
        $m->status = $r->jenis_mutasi;
        $m->created_at = $r->tanggal;
        $m->keterangan = $r->keterangan;
        $m->save();
        if($r->jenis_mutasi == 3){
            $p = Penduduk::where('nik',$r->nik)->delete();
        }else{
            if($penduduk->trashed()){
                $penduduk->restore();
            }
        }
        if($r->jenis_mutasi == 4){
            $p = Penduduk::where('nik',$r->nik)->first();
            $p->no_kk = $r->nokk;
            $p->save();
        }
        return redirect('mutasi')->with('success','Update Data Berhasil');
    }
    public function delete($id){
        $mutasi = Mutasi::find($id);
        $penduduk = Penduduk::withTrashed()->find($mutasi['id_penduduk']);
        if($penduduk->trashed()){
            $penduduk->restore();
        }
        $mutasi->delete();
        return redirect('mutasi')->with('success','Hapus Data Berhasil');
    }
    //
    public function laporan(){
        return view('mutasi.laporan');
    }
    public function rekap(){
        return view('mutasi.rekap');
        // return view('laporan.rekap');
    }
}
