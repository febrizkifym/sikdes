<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use Carbon\Carbon;

class GrafikController extends Controller
{
    public function pekerjaan(){
        $pekerjaan = \DB::table('m_pekerjaan')->select('id','pekerjaan')->get();
        $list_p = collect();
        foreach($pekerjaan as $p){
            $list_p->push(
                "$p->pekerjaan"
            );
        }
        $jumlah = collect();
        $data = collect();
        $id = 0;
        foreach($pekerjaan as $p){
            $jumlah->push(
                Penduduk::where('id_pekerjaan',$p->id)->count()
            );
            $data->push([
                'pekerjaan' => $p->pekerjaan,
                'jumlah' => $jumlah[$id++],
            ]);
        }   
        $list_p = json_encode($list_p);
        $result = json_encode($jumlah);
        return view('grafik.pekerjaan',['list_p'=>$list_p,'result'=>$result,'data'=>$data,'penduduk'=>Penduduk::count()]);
    }
    public function pendidikan(){
        $pendidikan = \DB::table('m_pendidikan')->select('id','tingkat')->get();
        $list_p = collect();
        foreach($pendidikan as $p){
            $list_p->push(
                "$p->tingkat"
            );
        }
        $jumlah = collect();
        $data = collect();
        $id = 0;
        foreach($pendidikan as $p){
            $jumlah->push(
                Penduduk::where('id_pend',$p->id)->count()
            );
            $data->push([
                'pendidikan' => $p->tingkat,
                'jumlah' => $jumlah[$id++],
            ]);
        }   
        $list_p = json_encode($list_p);
        $result = json_encode($jumlah);
        return view('grafik.pendidikan',['list_p'=>$list_p,'result'=>$result,'data'=>$data,'penduduk'=>Penduduk::count()]);
    }
    public function agama(){
        $agama = \DB::table('m_agama')->select('agama')->get();
        $agama2 = \DB::table('m_agama')->get();
        $list_a = collect();
        $result = collect();
        foreach($agama as $a){
            $list_a->push("$a->agama");
        }
        foreach($agama2 as $a){
            $result->push(Penduduk::where('id_agama',$a->id)->count());
        }
        $data = collect();
        $id = 1;
        $id2 = 0;
        foreach($agama2 as $a){
            $data->push([
                'id' => $id++,
                'agama' => $a->agama,
                'jumlah' => $result[$id2++]
            ]);
        }
        $list_a = json_encode($list_a);
        $result = json_encode($result);
        return view('grafik.agama',['list_a'=>$list_a,'result'=>$result,'data'=>$data,'penduduk'=>Penduduk::count()]);
    }
    public function usia(){
        $penduduk_l = Penduduk::where('jk',1)->get(['id','tgl_lahir']);
        $penduduk_p = Penduduk::where('jk',2)->get(['id','tgl_lahir']);
        //data_l
        $data_l = collect();
        foreach($penduduk_l as $p){
            $data_l->push(
                [
                    'id' => $p->id,
                    'usia' => (int)Carbon::parse($p->tgl_lahir)->diff(Carbon::now())->format('%y')]
            );
        }
        $usia_l = collect([
            $data_l->where('usia','<=',1)->where('usia','>=',0)->count(),
            $data_l->where('usia','<=',7)->where('usia','>=',2)->count(),
            $data_l->where('usia','<=',13)->where('usia','>=',8)->count(),
            $data_l->where('usia','<=',19)->where('usia','>=',14)->count(),
            $data_l->where('usia','<=',25)->where('usia','>=',20)->count(),
            $data_l->where('usia','<=',31)->where('usia','>=',26)->count(),
            $data_l->where('usia','<=',37)->where('usia','>=',32)->count(),
            $data_l->where('usia','<=',43)->where('usia','>=',38)->count(),
            $data_l->where('usia','<=',49)->where('usia','>=',44)->count(),
            $data_l->where('usia','>=',50)->count(),
        ]);
        //data_p
        $data_p = collect();
        foreach($penduduk_p as $p){
            $data_p->push(
                [
                    'id' => $p->id,
                    'usia' => (int)Carbon::parse($p->tgl_lahir)->diff(Carbon::now())->format('%y')]
            );
        }
        $usia_p = collect([
            $data_p->where('usia','<=',1)->where('usia','>=',0)->count(),
            $data_p->where('usia','<=',7)->where('usia','>=',2)->count(),
            $data_p->where('usia','<=',13)->where('usia','>=',8)->count(),
            $data_p->where('usia','<=',19)->where('usia','>=',14)->count(),
            $data_p->where('usia','<=',25)->where('usia','>=',20)->count(),
            $data_p->where('usia','<=',31)->where('usia','>=',26)->count(),
            $data_p->where('usia','<=',37)->where('usia','>=',32)->count(),
            $data_p->where('usia','<=',43)->where('usia','>=',38)->count(),
            $data_p->where('usia','<=',49)->where('usia','>=',44)->count(),
            $data_p->where('usia','>=',50)->count(),
        ]);
        //data_total
        $data = collect();
        $keterangan = [ "0-12 Bulan", "2-7 Tahun", "8-13 Tahun", "14-19 Tahun", "20-25 Tahun", "26-31 Tahun", "32-37 Tahun" , "38-43 Tahun", "44-49 Tahun", "50 Tahun Keatas"];
        $id=1;
        $id2=0;
        $id3=0;
        foreach($keterangan as $k){
            $data->push([
                'id' => $id++,
                'ket' => $k,
                'usia_p' => $usia_p[$id2++],
                'usia_l' => $usia_l[$id3++],
            ]);
        }
//        $data->dd();
        return view('grafik.usia',[
            'usia_l' => $usia_l,
            'usia_p' => $usia_p,
            'data' => $data,
            'penduduk' => Penduduk::count(),
        ]);
    }
}
