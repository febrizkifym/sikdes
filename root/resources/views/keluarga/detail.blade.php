@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong class="card-title">Detail Keluarga</strong></div>
        <div class="card-body">
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Nomor Kartu Keluarga :</label></div>
                <div class="col-12 col-md-9">
                    <p class="form-control-static">{{$kepala_k->no_kk}}</p>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3"><label class=" form-control-label">Jumlah Anggota Keluarga :</label></div>
                <div class="col-12 col-md-9">
                    <p class="form-control-static">{{$keluarga->count()}}</p>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-12"><label class=" form-control-label">Anggota Keluarga :</label></div>
            </div>
            <div class="row form-group">
                <div class="col col-md-12">
                   <table class="table table-bordered table-hover">
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Kedudukan</th>
                        <th>Usia</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                        use Carbon\Carbon;
                        $id=1;
                    ?>
                    @foreach($keluarga->get() as $k)
                    <tr>
                        <td>{{$id++}}</td>
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
                            <a href="{{route('penduduk.detail',$k->id)}}"><button class="btn btn-primary">Detail</button></a>
                        </td>
                    </tr>
                    @endforeach
                    </table>
                    <a href="{{url('keluarga')}}"><button class="btn btn-info">Kembali</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
@endsection