@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
              <h4 class="header-title">Detail Keluarga</h4>
              <hr>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Nomor Kartu Keluarga :</label></div>
                <div class="col-12 col-md-9">
                    <p class="form-control-static">{{$keluarga->first()->no_kk}}</p>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Anggota Keluarga Terdaftar :</label></div>
                <div class="col-12 col-md-9">
                    <p class="form-control-static">{{$keluarga->count()}} Orang</p>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-12"><label class=" form-control-label">Anggota Keluarga :</label></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-12">
                   <table class="table table-bordered table-sm table-hover">
                    <tr>
                        <th>#</th>
                        <th>NIK</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Kedudukan</th>
                        <th>Usia</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                        use Carbon\Carbon;
                        $id=1;
                    ?>
                    @foreach($list_keluarga as $k)
                    <tr>
                        <td>{{$id++}}</td>
                        <td>{{$k['nik']}}</td>
                        <td>{{$k->nama}}</td>
                        <td>
                            @if($k->jk == 1)
                            {{"Laki-Laki"}}
                            @else
                            {{"Perempuan"}}
                            @endif
                        </td>
                        <td>
                            @if($k->kedudukan==1)
                                Kepala Keluarga
                                @elseif($k->kedudukan==2)
                                Istri
                                @elseif($k->kedudukan==3)
                                Anak Kandung
                                @elseif($k->kedudukan==4)
                                Anak Angkat
                            @endif
                        </td>
                        <td>{{Carbon::parse($k->tgl_lahir)->diff(Carbon::now())->format('%y Tahun')}}</td>
                        <td>
                            @if($k['deleted_at'] == true)
                            Meninggal / Pindah
                            @else
                            -
                            @endif
                        </td>
                        <td>
                            <a href="{{route('penduduk.detail',$k->id)}}"><button class="btn btn-sm btn-primary">Detail</button></a>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                    <a href="{{route('penduduk.add')}}?no_kk={{$keluarga->first()->no_kk}}"><button class="btn btn-primary">Tambah Anggota Keluarga</button></a>
<!--                    <a href="{{url('laporan/keluarga/'.$keluarga->first()->no_kk)}}"><button class="btn btn-success">Cetak Laporan</button></a>-->
                    <a href="{{url('keluarga')}}"><button class="btn btn-secondary">Kembali</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
@endsection