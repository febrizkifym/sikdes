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
                <strong class="card-title">Tabel Data Penduduk</strong>
            </div>
            <div class="card-body">
              
               <div class="row">
                    <div class="col-md-12">
                        <form method="GET">
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
                                        <button class="btn btn-primary" type="submit">Filter Data</button>
                                        <a href="{{url('penduduk')}}"><button class="btn btn-info" type="button">Reset Filter</button></a>
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
                                </div>
                            </div>
                        </form>
                    </div>
               </div>
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