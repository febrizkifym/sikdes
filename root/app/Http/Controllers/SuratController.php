<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use App\Mutasi;
use PDF;

class SuratController extends Controller
{
    public function index(){
        $penduduk = Penduduk::all();
        return view('surat.index',['penduduk'=>$penduduk]);
    }
    public function formKematian(){
        $penduduk = Penduduk::all();
        return view('surat.form_kematian',['penduduk'=>$penduduk]);
    }
    public function formKelahiran(){
        $penduduk = Penduduk::all();
        $ibu = Penduduk::where('jk',2)->get();
        $ayah = Penduduk::where('jk',1)->get();
        return view('surat.form_kelahiran',['penduduk'=>$penduduk,'ayah'=>$ayah,'ibu'=>$ibu]);
    }
    public function loadData(Request $r){
        if($r->has('q')){
            $cari = $r->q;
            $data = Penduduk::where('nama','LIKE','%'.$cari.'%')->get();
            return response()->json($data);
        }
    }
    public function cetakKematian(Request $r){
        $data = [
            'no_surat' => $r->no_surat,
            'tgl_surat' => $r->tgl_surat,
            'nama_kades' => $r->nama_kades,
            'nama_camat' => $r->nama_camat,
            'nip_camat' => $r->nip_camat,
            'nik' => $r->nik,
            'tgl_meninggal' => $r->tgl_meninggal,
            'waktu_meninggal' => $r->waktu_meninggal,
            'tgl_kebumikan' => $r->tgl_kebumikan,
            'waktu_kebumikan' => $r->waktu_kebumikan,
            'tempat_kebumikan' => $r->tempat_kebumikan,
        ];
        $p = Penduduk::where('nik',$r->nik)->first();
        if($p){
            $m = new Mutasi;
            $m->id_penduduk = $p->id;
            $m->status = 3;
            $m->created_at = $r->tgl_meninggal;
            $m->save();
            $mati = Penduduk::where('nik',$r->nik)->delete();
            $pdf = PDF::loadView('surat.pdf_kematian',['data'=>$data,'p'=>$p])->setPaper('a4', 'portrait');
            return $pdf->stream();
        }else{
            return redirect('surat/kematian')->withInput()->with('error','Penduduk tidak ditemukan');
        }
    }
    public function cetakKelahiran(Request $r){
        $data = [
            'no_surat' => $r->no_surat,
            'tgl_surat' => $r->tgl_surat,
            'nama_kades' => $r->nama_kades,
            'nama_anak' => $r->nama_anak,
            'jk_anak' => $r->jk_anak,
            'tempat_lahir' => $r->tempat_lahir,
            'tgl_lahir' => $r->tgl_lahir,
            'nik_ibu' => $r->nik_ibu,
            'nik_ayah' => $r->nik_ayah,
        ];
        $ibu = Penduduk::where('nik',$r->nik_ibu)->first();
        $ayah = Penduduk::where('nik',$r->nik_ayah)->first();
        if($ibu || $ayah){
        $pdf = PDF::loadView('surat.pdf_kelahiran',['data'=>$data,'ibu'=>$ibu,'ayah'=>$ayah])->setPaper('a4', 'portrait');
        return $pdf->stream();
        }else{
            return redirect('surat/kematian')->withInput()->with('error','Penduduk tidak ditemukan');
        }
    }
}
