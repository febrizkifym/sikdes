<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penduduk;
use App\Mutasi;
use App\Exports\PendudukExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Auth;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        return view('laporan.index');
    }
    public function cetak(Request $r)
    {
        $penduduk = Penduduk::where('id', '>', 0);
        if ($r->has('agama') && $r->agama !== null) {
            $penduduk->where('id_agama', $r->agama);
        }
        if ($r->has('pekerjaan') && $r->pekerjaan !== null) {
            $penduduk->where('id_pekerjaan', $r->pekerjaan);
        }
        if ($r->has('pendidikan') && $r->pendidikan !== null) {
            $penduduk->where('id_pend', $r->pendidikan);
        }
        if ($r->has('dusun') && $r->dusun !== null) {
            $penduduk->where('alamat', $r->dusun);
        }
        if ($r->has('status') && $r->status !== null) {
            $status = $r->status;
            if ($status == 'mati') {
                $penduduk->onlyTrashed();
            }
        }
        if ($r->has('usia_dari') && $r->usia_dari !== null) {
            if ($r->usia_ke == null) {
                return redirect('penduduk')->with('warning', 'Mohon lengkapi form filter');
            }
            $getusia = Penduduk::get(['id', 'tgl_lahir']);
            $usia = collect();
            if ($r->usia_tipe == 'tahun') {
                foreach ($getusia as $get) {
                    $usia->push([
                        'id_penduduk' => $get->id,
                        'usia' => (int)Carbon::parse($get->tgl_lahir)->diff(Carbon::now())->format('%y')
                        // 'usia' => Carbon::parse($get->tgl_lahir)->diffinMonths(Carbon::now())
                    ]);
                }
            } else {
                foreach ($getusia as $get) {
                    $usia->push([
                        'id_penduduk' => $get->id,
                        // 'usia' => (int)Carbon::parse($get->tgl_lahir)->diff(Carbon::now())->format('%y')
                        'usia' => Carbon::parse($get->tgl_lahir)->diffinMonths(Carbon::now())
                    ]);
                }
            }
            $total = $usia->where('usia', '>=', $r->usia_dari)->where('usia', '<=', $r->usia_ke)->all();
            // dd($total);
            if ($total) {
                $query = collect();
                foreach ($total as $t) {
                    $query->push([
                        $t['id_penduduk']
                    ]);
                }
                $penduduk->whereIn('id', $query);
            } else {
                $penduduk->where('id', -1);
            }
        }
        if ($penduduk->count() > 0) {
            $data = $penduduk->get();
        } else {
            return redirect(route('laporan'))->with('warning', 'Data tidak ditemukan');
        }
        $namaFile = 'laporanPenduduk_' . date('dmY');
        if ($r->tipe == 'pdf') {
            $pdf = PDF::loadView('laporan.pdf', ['data' => $data])->setPaper('a4', 'landscape');
            return $pdf->stream();
        } else {
            return Excel::download(new PendudukExport($data), $namaFile . '.xlsx');
        }
    }
    public function mutasi(Request $r)
    {
        switch ($r->bulan) {
            case 01:
                $bulan = "Januari";
                break;
            case 02:
                $bulan = "Februari";
                break;
            case 03:
                $bulan = "Maret";
                break;
            case 04:
                $bulan = "April";
                break;
            case 05:
                $bulan = "Mei";
                break;
            case 06:
                $bulan = "Juni";
                break;
            case 07:
                $bulan = "Juli";
                break;
            case "08":
                $bulan = "Agustus";
                break;
            case "09":
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;
        }
        $tahun = $r->tahun;
        $tanggal = $r->tahun . "-" . $r->bulan . "-01 00:00:00";
        $tanggal2 = $r->tahun . "-" . $r->bulan . "-31 00:00:00";
        $data = Mutasi::join('t_penduduk', 't_mutasi.id_penduduk', '=', 't_penduduk.id')->whereBetween("t_mutasi.created_at", [$tanggal, $tanggal2]);
        if ($data->count() > 0) {
            // dd($data->get());
            $namaFile = 'laporanPenduduk_' . date('dmY');
            $pdf = PDF::loadView('laporan.mutasi', ['data' => $data->select(['nama', 'tempat_lahir', 'tgl_lahir', 'jk', 't_mutasi.status', 't_mutasi.created_at', 'keterangan'])->get(), 'bulan' => $bulan, 'tahun' => $tahun])->setPaper('a4', 'landscape');
            return $pdf->stream();
        } else {
            return redirect(route('mutasi.laporan'))->with('warning', 'Tidak ada data di bulan yang dipilih');
        }
    }
    public function rekap(Request $r)
    {
        switch ($r->bulan) {
            case 01:
                $bulan = "Januari";
                break;
            case 02:
                $bulan = "Februari";
                break;
            case 03:
                $bulan = "Maret";
                break;
            case 04:
                $bulan = "April";
                break;
            case 05:
                $bulan = "Mei";
                break;
            case 06:
                $bulan = "Juni";
                break;
            case 07:
                $bulan = "Juli";
                break;
            case "08":
                $bulan = "Agustus";
                break;
            case "09":
                $bulan = "September";
                break;
            case 10:
                $bulan = "Oktober";
                break;
            case 11:
                $bulan = "November";
                break;
            case 12:
                $bulan = "Desember";
                break;
        }
        $kode_bulan = $r->bulan;
        $tahun = $r->tahun;
        $tanggal = $r->tahun . "-" . $r->bulan . "-01 00:00:00";
        $tanggal2 = $r->tahun . "-" . $r->bulan . "-31 00:00:00";
        $data = Mutasi::whereBetween("t_mutasi.created_at", [$tanggal, $tanggal2]);
        // if ($data->count() > 0) {
            $namaFile = 'laporanPenduduk_' . date('dmY');
            $pdf = PDF::loadView('laporan.rekap', ['data' => $data->get(), 'bulan' => $bulan, 'tahun' => $tahun, 'kode_bulan' => $kode_bulan])->setPaper('a4', 'landscape');
            return $pdf->stream();
            // return view('laporan.rekap', ['data' => $data->get(), 'bulan' => $bulan, 'tahun' => $tahun, 'kode_bulan' => $kode_bulan]);
        // } else {
        
            // return redirect(route('mutasi.laporan'))->with('warning', 'Tidak ada data di bulan yang dipilih');
            
        // }
        
    }
}
