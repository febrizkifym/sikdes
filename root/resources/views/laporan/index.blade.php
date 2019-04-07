@extends('layouts.template')
@section('content')
@php
    use Illuminate\Support\Facades\DB;
    $agama = DB::table('m_agama')->get();
    $pendidikan = DB::table('m_pendidikan')->get();
    $pekerjaan = DB::table('m_pekerjaan')->get();
    $cacat = DB::table('m_cacat')->get();
@endphp
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong class="card-title">Laporan Data Penduduk</strong></div>
            <div class="card-body">
                              <div class="row">
                   
                <div class="col-md-3">
                    <form action="#" method="GET" class="form-horizontal">
                        <label for="">Berdasarkan Usia</label>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input required name="usia_dari" type="text" placeholder="Dari" class="form-control" value="@isset($_GET['usia_dari']){{$_GET['usia_dari']}}@endisset">
                            </div>
                            <div class="col-md-6">
                                <input required name="usia_ke" type="text" placeholder="Ke" class="form-control" value="@isset($_GET['usia_ke']){{$_GET['usia_ke']}}@endisset" required>
                            </div>
                        </div>
                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                    </form>
                    
                </div>
                <div class="col-md-3">
                    <form action="#" method="GET" class="form-horizontal">
                        <label for="">Berdasarkan Agama</label>
                        <div class="row form-group">
                            <div class="col-12">
                                <select name="agama" id="" class="form-control">
                                    @foreach($agama as $a)
                                    <option value="{{$a->id}}">{{$a->agama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <form action="#" method="GET" class="form-horizontal">
                        <label for="">Berdasarkan Pekerjaan</label>
                        <div class="row form-group">
                            <div class="col-12">
                                <select name="pekerjaan" id="" class="form-control">
                                    @foreach($pekerjaan as $pe)
                                    <option value="{{$pe->id}}">{{$pe->pekerjaan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                    </form>
                </div>
                <div class="col-md-3">
                    <form action="#" method="GET" class="form-horizontal">
                        <label for="">Berdasarkan Pendidikan</label>
                        <div class="row form-group">
                            <div class="col-12">
                                <select name="pendidikan" id="" class="form-control">
                                    @foreach($pendidikan as $p)
                                    <option value="{{$p->id}}">{{$p->tingkat}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                            <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                    </form>
                </div>
               </div>
               <div class="row">
                   <div class="col-md-12">
                     <hr>
                     <div class="alert alert-info">
                      @if(isset($_GET['usia_dari']) && isset($_GET['usia_ke']))
                          <strong>Data yang akan di-export adalah data penduduk dari usia {{$_GET['usia_dari']}} tahun sampai {{$_GET['usia_ke']}} tahun</strong>
                      @elseif(isset($_GET['agama']))
                          <strong>Data yang akan di-export adalah data penduduk dengan agama {{$agama->where('id',$_GET['agama'])->first()->agama}}</strong>
                      @elseif(isset($_GET['pekerjaan']))
                          <strong>Data yang akan di-export adalah data penduduk dengan pekerjaan {{$pekerjaan->where('id',$_GET['pekerjaan'])->first()->pekerjaan}}</strong>
                      @elseif(isset($_GET['pendidikan']))
                          <strong>Data yang akan di-export adalah data penduduk dengan pendidikan {{$pendidikan->where('id',$_GET['pendidikan'])->first()->tingkat}}</strong>
                      @else
                          <strong>Data yang akan di-export adalah seluruh data penduduk</strong>
                      @endif
                      </div>
                       <a href="{{url('laporan')}}"><button class="btn btn-info">Reset Filter</button></a>
                      <hr>
                        <a href="{{url('laporan/pdf')}}"><button class="btn btn-danger"><i class="fa fa-file"></i> Export PDF</button></a>
                        <a href="{{url('laporan/excel')}}"><button class="btn btn-success"><i class="fa fa-table"></i> Export Excel</button></a>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection