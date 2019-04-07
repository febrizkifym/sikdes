<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use Carbon\Carbon;
//use Collection;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = Penduduk::count();
        $total_k = Penduduk::all()->unique('no_kk')->count();
        $total_p = Penduduk::where('jk',1)->count();
        $total_l = Penduduk::where('jk',2)->count();
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
        //
        return view('dashboard',[
            'total' => $total,
            'total_k' => $total_k,
            'total_l' => $total_l,
            'total_p' => $total_p,
            'usia_l' => $usia_l,
            'usia_p' => $usia_p,
        ]);
    }
}
