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
            <div class="card-header">
                <strong class="card-title">Filter Data</strong>
            </div>
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
                       <a href="{{url('penduduk')}}"><button class="btn btn-info">Reset Pencarian</button></a>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Tabel Data Penduduk</strong>
            </div>
            <div class="card-body">
               <a href="{{route('penduduk.add')}}"><button class="btn btn-success">Tambah Data</button></a>
               <div class="clearfix" style="margin-bottom:15px;"></div>
               <div class="table-responsive">
                <table id="bootstrap-data-table" class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No. KK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Usia</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        use Carbon\Carbon;
                        $id = 1;
                    ?>
                    @foreach($penduduk as $p)
                        <tr>
                            <td>{{$id++}}</td>
                            <td>{{$p->no_kk}}</td>
                            <td>{{$p->nama}}</td>
                            <td>
                                @if($p->jk == 1)
                                {{"Laki-Laki"}}
                                @else
                                {{"Perempuan"}}
                                @endif
                            </td>
                            <td>{{$p->tempat_lahir}}</td>
                            <td>{{Carbon::parse($p->tgl_lahir)->format('d F Y')}}</td>
                            <td>{{Carbon::parse($p->tgl_lahir)->diff(Carbon::now())->format('%y Tahun')}}</td>
                            <td>
                                <a href="{{route('penduduk.detail',$p->id)}}"><button class="btn btn-sm btn-primary">Detail</button></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
               </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table').DataTable();
  } );
</script>
@endsection