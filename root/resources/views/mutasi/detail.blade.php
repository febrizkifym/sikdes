@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong class="card-title">Detail Mutasi Penduduk</strong></div>
            <div class="card-body">
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Nama Lengkap</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{$m->penduduk->nama}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">NIK</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{$m->penduduk->nik}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Jenis Kelamin</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{$m->penduduk->jk==1?'Laki-Laki':'Perempuan'}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Alamat Lengkap</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{$m->penduduk->alamat}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Jenis Mutasi</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">
                                 @if($m->jenis_mutasi == 1)
                                Datang
                                @elseif($m->jenis_mutasi == 2)
                                Pergi
                                @elseif($m->jenis_mutasi = 3)
                                Meninggal
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Tanggal Mutasi</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{$m->created_at}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Keterangan</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{$m->keterangan}}</p>
                        </div>
                    </div>
                    <a href="{{route('penduduk.detail',$m->penduduk->id)}}"><button class="btn btn-success">Detail Penduduk</button></a>
                    <a href="{{route('mutasi.edit',$m->id)}}"><button class="btn btn-primary">Edit Data</button></a> 
                    <a href="{{route('mutasi.delete',$m->id)}}"><button class="btn btn-danger">Hapus Data</button></a> 
                  <a href="{{url('mutasi')}}"><button type="button" class="btn btn-secondary">Kembali</button></a>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection