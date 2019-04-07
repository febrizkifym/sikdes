<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mutasi;
use App\Penduduk;

class MutasiController extends Controller
{
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
        $m->jenis_mutasi = $r->jenis_mutasi;
        $m->created_at = $r->tanggal;
        $m->keterangan = $r->keterangan;
        $m->save();
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
        $m = Mutasi::find($id);
        $penduduk = Penduduk::where('nik',$r->nik)->first();
        $m->id_penduduk = $penduduk->id;
        $m->jenis_mutasi = $r->jenis_mutasi;
        $m->created_at = $r->tanggal;
        $m->keterangan = $r->keterangan;
        $m->save();
        return redirect('mutasi')->with('success','Update Data Berhasil');
    }
    public function delete($id){
        Mutasi::find($id)->delete();
        return redirect('mutasi')->with('success','Hapus Data Berhasil');
    }
}
