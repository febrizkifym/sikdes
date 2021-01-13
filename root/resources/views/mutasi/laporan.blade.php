@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
           <h4 class="title-header">Cetak Laporan Mutasi</h4>
           <hr>
                <form action="{{route('mutasi.cetak_laporan')}}" method="POST">
                @csrf
                 <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <select name="bulan" id="bulan" class="form-control">
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                 </div>
                 <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" name="tahun" id="tahun" min="2010" value="2020" max="2100" class="form-control">
                 </div>
                  <button type="submit" class="btn btn-primary">Cetak</button>
                  @if(Auth::user()->tipe != 3)
                  <a href="{{url('mutasi')}}"><button type="button" class="btn btn-secondary">Kembali</button></a>
                  @endif
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection