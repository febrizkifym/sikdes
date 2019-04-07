<?php

namespace App\Exports;

use App\Penduduk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PendudukExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('laporan.excel', [
            'data' => Penduduk::all()
        ]);
    }
}
