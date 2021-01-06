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

    public function index()
    {
        $mutasi = Mutasi::all();
        return view('mutasi.index', ['mutasi' => $mutasi]);
    }
    public function add()
    {
        return view('mutasi.add');
    }
    public function import($nik)
    {
        $penduduk = Penduduk::where('nik', $nik)->first();
        if ($penduduk) {
            return view('mutasi.add', ['p' => $penduduk]);
        } else {
            return abort(404);
        }
    }
    public function post(Request $r)
    {
        $m = new Mutasi;
        $penduduk = Penduduk::where('nik', $r->nik)->first();
        $m->id_penduduk = $penduduk->id;
        $m->status = $r->jenis_mutasi;
        $m->created_at = $r->tanggal;
        //mutasi datang/pergi
        $m->dusun = $r->dusun;
        $m->desa = $r->desa;
        $m->kecamatan = $r->kecamatan;
        $m->kabupaten = $r->kabupaten;
        $m->alasan = $r->alasan;
        //mutasi meninggal
        $m->tanggal_surat = $r->tanggal_surat;
        //
        $m->keterangan = $r->keterangan;
        $m->save();
        if ($r->jenis_mutasi == 3 || $r->jenis_mutasi == 2  ) {
            $p = Penduduk::where('nik', $r->nik)->delete();
        }
        if ($r->jenis_mutasi == 4) {
            $p = Penduduk::where('nik', $r->nik)->first();
            $p->no_kk = $r->nokk;
            $p->save();
        }
        return redirect('mutasi')->with('success', 'Input Data Berhasil');
    }
    public function detail($id)
    {
        $m = Mutasi::find($id);
        return view('mutasi.detail', ['m' => $m]);
    }
    public function edit($id)
    {
        $m = Mutasi::find($id);
        return view('mutasi.edit', ['m' => $m]);
    }
    public function update(Request $r, $id)
    {
        $old_value = Penduduk::where('nik', $r->nik)->get();
        $m = Mutasi::find($id);
        $penduduk = Penduduk::where('nik', $r->nik)->first();
        $m->id_penduduk = $penduduk->id;
        $m->status = $r->jenis_mutasi;
        $m->created_at = $r->tanggal;
        $m->keterangan = $r->keterangan;
        $m->save();
        if ($r->jenis_mutasi == 3) {
            $p = Penduduk::where('nik', $r->nik)->delete();
        } else {
            if ($penduduk->trashed()) {
                $penduduk->restore();
            }
        }
        if ($r->jenis_mutasi == 4) {
            $p = Penduduk::where('nik', $r->nik)->first();
            $p->no_kk = $r->nokk;
            $p->save();
        }
        return redirect('mutasi')->with('success', 'Update Data Berhasil');
    }
    public function delete($id)
    {
        $mutasi = Mutasi::find($id);
        $penduduk = Penduduk::withTrashed()->find($mutasi['id_penduduk']);
        if ($penduduk->trashed()) {
            $penduduk->restore();
        }
        $mutasi->delete();
        return redirect('mutasi')->with('success', 'Hapus Data Berhasil');
    }
    //
    public function cetak($id)
    {
        $mutasi = Mutasi::find($id);
        $jenis = $mutasi->status;
        switch ($jenis) {
            case '1':
                # Penduduk Datang
                echo "penduduk datang";
                break;
            case '2':
                #Penduduk Pergi
                $pdf = PDF::loadView('surat.keterangan_pindah', ['data' => $mutasi])->setPaper('a4', 'portrait');
                return $pdf->stream();
                break;
            case '3':
                #Penduduk Meninggal
                $pdf = PDF::loadView('surat.keterangan_meninggal', ['data' => $mutasi])->setPaper('a4', 'portrait');
                return $pdf->stream();
                // return view('surat.keterangan_meninggal',['data'=>$mutasi]);
                break;
                case '4':
                #Pisah Kartu Keluarga
                $pdf = PDF::loadView('surat.pengantar_kk', ['data' => $mutasi])->setPaper('legal', 'portrait');
                return $pdf->stream();
                return view('surat.pengantar_kk',['data'=>$mutasi]);
                break;
            case '5':
                #Kelahiran
                echo "lahir";
                break;
            default:
                return redirect(route('mutasi'))->with('warning', 'Terjadi Kesalahan');
        }
    }
    public function laporan()
    {
        return view('mutasi.laporan');
    }
    public function rekap()
    {
        return view('mutasi.rekap');
        // return view('laporan.rekap');
    }
}
