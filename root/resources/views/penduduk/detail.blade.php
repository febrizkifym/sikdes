@extends('layouts.template')
@section('content')
                        @php
                            use Illuminate\Support\Facades\DB;
                            $agama = DB::table('m_agama')->find($p->id_agama);
                            $pendidikan = DB::table('m_pendidikan')->find($p->id_pend);
                            $pekerjaan = DB::table('m_pekerjaan')->find($p->id_pekerjaan);
                        @endphp
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                   <h4 class="header-title">Detail Penduduk</h4>
                   <hr>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Nama Lengkap</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$p->nama}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">NIK</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$p->nik}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Nomor Kartu Keluarga</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$p->no_kk}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Jenis Kelamin</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$p->jk==1?'Laki-Laki':'Perempuan'}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Alamat Lengkap</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$p->alamat}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Status Perkawinan</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$p->status==1?'Kawin':'Belum Kawin'}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Tanggal Lahir</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$p->tgl_lahir}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Tempat Lahir</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$p->tempat_lahir}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Agama</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$agama->agama}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Pekerjaan</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$pekerjaan->pekerjaan}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Pendidikan</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: {{$pendidikan->tingkat}}</p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Kewarganegraan</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: 
                                @if($p->warganegara==1)
                                Warga Negara Indonesia
                                @elseif($p->warganegara==2)
                                Warga Negara Asing
                                @elseif($p->warganegara==3)
                                Dwi Warga Negara
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3"><label class=" form-control-label">Kedudukan dalam Keluarga</label></div>
                        <div class="col-12 col-md-9">
                            <p class="form-control-static">: 
                                @if($p->kedudukan==1)
                                Kepala Keluarga
                                @elseif($p->kedudukan==2)
                                Istri
                                @elseif($p->kedudukan==3)
                                Anak Kandung
                                @elseif($p->kedudukan==4)
                                Anak Angkat
                                @endif
                            </p>
                        </div>
                    </div>
                    <a href="{{route('mutasi.import',$p->nik)}}"><button class="btn btn-info">Mutasi Penduduk</button></a> 
                    <a href="{{route('penduduk.edit',$p->id)}}"><button class="btn btn-primary">Edit Data</button></a> 
                    <a href="{{route('penduduk.delete',$p->id)}}"><button class="btn btn-danger">Hapus Data</button></a> 
                  <a href="{{url('penduduk')}}"><button type="button" class="btn btn-secondary">Kembali</button></a>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection