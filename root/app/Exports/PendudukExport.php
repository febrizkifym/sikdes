<?php

namespace App\Exports;

use App\Penduduk;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PendudukExport implements FromView
{
    public $data;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function __construct($data){
        $this->data = $data;
    }
    public function view(): View
    {
        return view('laporan.excel', [
            'data' => $this->data
        ]);
    }
}
