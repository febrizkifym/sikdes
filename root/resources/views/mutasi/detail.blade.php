@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
           <h4 class="title-header">Detail Mutasi Penduduk</h4>
           <hr>
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
                                @if($m->status == 1)
                                    Mutasi Datang
                                @elseif($m->status == 2)
                                    Mutasi Pindah
                                @elseif($m->status == 3)
                                    Meninggal
                                @elseif($m->status == 4)
                                    Pisah Kartu Keluarga
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Tanggal Mutasi</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static"> {{date('d F Y',strtotime($m->created_at))}}</p>
                        </div>
                    </div>
                    @if($m->dusun != NULL)
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Tempat Mutasi</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">Dusun {{$m->dusun}}, Desa {{$m->desa}}, Kecamatan {{$m->kecamatan}}, Kabupaten {{$m->kabupaten}}</p>
                        </div>
                    </div>
                    @endif
                    @if($m->alasan != NULL)
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Alasan / Penyebab</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">{{$m->alasan}}</p>
                        </div>
                    </div>
                    @endif
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Keterangan</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">
                                @isset($m->keterangan)
                                    {{$m->keterangan}}
                                @else
                                    Tidak ada keterangan
                                @endisset
                            </p>
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