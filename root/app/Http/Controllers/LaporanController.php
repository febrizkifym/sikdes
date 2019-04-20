<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use PDF;
use App\Exports\PendudukExport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
use Carbon\Carbon;

class LaporanController extends Controller
{
    public function index(){
        return view('laporan.index');
    }
    public function cetak(Request $r){
        $penduduk = Penduduk::where('id','>',0);
        if($r->has('agama') && $r->agama !== null){
            $penduduk->where('id_agama',$r->agama);
        }
        if($r->has('pekerjaan') && $r->pekerjaan !== null){
            $penduduk->where('id_pekerjaan',$r->pekerjaan);
        }
        if($r->has('pendidikan') && $r->pendidikan !== null){
            $penduduk->where('id_pend',$r->pendidikan);
        }
        if($r->has('status') && $r->status !== null){
            $status = $r->status;
            if($status == 'mati'){
                $penduduk->onlyTrashed();
            }
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
        $data = $penduduk->get();
        $namaFile = 'laporanPenduduk_'.date('dmY');
        if($r->tipe == 'pdf'){
            $pdf = PDF::loadView('laporan.pdf',['data'=>$data])->setPaper('a4', 'landscape');
            return $pdf->stream();
        }else{
            return Excel::download(new PendudukExport($data), $namaFile.'.xlsx');       
        }
    }
}
    