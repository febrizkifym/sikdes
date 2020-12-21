@extends('layouts.template')
@section('content')
@php
    use Illuminate\Support\Facades\DB;
    $agama = DB::table('m_agama')->get();
    $pendidikan = DB::table('m_pendidikan')->get();
    $pekerjaan = DB::table('m_pekerjaan')->get();
@endphp
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
              <h4 class="title-header">Cetak Laporan Penduduk</h4>
              <hr>             
               <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{url('laporan/cetak')}}">
                           @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="agama">Agama</label>
                                        <select name="agama" id="" class="form-control">
                                            <option value="">Tidak Difilter</option>
                                            @if(isset($_GET['agama']) && $_GET['agama'] !== null)
                                                @foreach($agama as $a)
                                                <option value="{{$a->id}}" {{$_GET['agama']==$a->id?'selected':''}}>{{$a->agama}}</option>
                                                @endforeach
                                            @else
                                                @foreach($agama as $a)
                                                <option value="{{$a->id}}">{{$a->agama}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Pekerjaan</label>
                                        <select name="pekerjaan" id="" class="form-control">
                                            <option value="">Tidak difilter</option>
                                            @if(isset($_GET['pekerjaan']) && $_GET['pekerjaan'] !== null)
                                                @foreach($pekerjaan as $pe)
                                                <option value="{{$pe->id}}" {{$_GET['pekerjaan']==$pe->id?'selected':''}}>{{$pe->pekerjaan}}</option>
                                                @endforeach
                                            @else
                                                @foreach($pekerjaan as $pe)
                                                <option value="{{$pe->id}}">{{$pe->pekerjaan}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pekerjaan">Status</label>
                                        <select name="status" id="" class="form-control">
                                            <option value="hidup" selected>Hidup</option>
                                            <option value="mati">Mati</option>
                                        </select>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                       <label for="tipe">Format Laporan</label>
                                        <select name="tipe" id="" class="form-control">
                                            <option value="pdf">PDF</option>
                                            <option value="excel">Excel</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Cetak Laporan</button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="pendidikan">Pendidikan</label>
                                        <select name="pendidikan" id="" class="form-control">
                                            <option value="">Tidak difilter</option>
                                            @if(isset($_GET['pendidikan']) && $_GET['pekerjaan'] !== null)
                                                @foreach($pendidikan as $p)
                                                <option value="{{$p->id}}" {{$_GET['pendidikan']==$p->id?'selected':''}}>{{$p->tingkat}}</option>
                                                @endforeach
                                            @else
                                                @foreach($pendidikan as $p)
                                                <option value="{{$p->id}}">{{$p->tingkat}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                   </div>
                                    <label for="">Berdasarkan Usia</label>
                                    <div class="row form-group">
                                        <div class="col-md-6">
                                            <input name="usia_dari" type="number" min=1 placeholder="Dari" class="form-control" value="@isset($_GET['usia_dari']){{$_GET['usia_dari']}}@endisset">
                                        </div>
                                        <div class="col-md-6">
                                            <input name="usia_ke" type="number" min=1 placeholder="Ke" class="form-control" value="@isset($_GET['usia_ke']){{$_GET['usia_ke']}}@endisset">
                                        </div>
                                    </div>
                                    <div class="form-group">  
                                        <button class="btn btn-info" type="reset">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection