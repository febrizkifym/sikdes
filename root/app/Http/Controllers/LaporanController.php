<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use PDF;
use App\Exports\PendudukExport;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function index(){
        return view('laporan.index');
    }
    public function pdf(){
        $data = Penduduk::all();
        $pdf = PDF::loadView('laporan.pdf',['data'=>$data])->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
    public function excel(){
        return Excel::download(new PendudukExport, 'laporanPenduduk.xlsx');
    }
}
