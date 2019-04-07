@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Entri Data Penduduk</strong>
            </div>
            <div class="card-body">
                <form action="{{route('penduduk.update',$p)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  <div class="row">            
                       <div class="col-lg-6">
                        @csrf
                        @php
                            use Illuminate\Support\Facades\DB;
                            $agama = DB::table('m_agama')->get();
                            $pendidikan = DB::table('m_pendidikan')->get();
                            $pekerjaan = DB::table('m_pekerjaan')->get();
                            $cacat = DB::table('m_cacat')->get();
                        @endphp
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Nama</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="text" name="nama" placeholder="Nama Lengkap" class="form-control" value="{{$p->nama}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">No. KK</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="text" name="nokk" placeholder="Nomor Kartu Keluarga" class="form-control" value="{{$p->no_kk}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">NIK</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="text" name="nik" placeholder="Nomor Induk Kependudukan" class="form-control" value="{{$p->nik}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-8">
                                <div class="form-check-inline form-check">
                                    <label for="inline-radio1" class="form-check-label ">
                                        <input type="radio" name="jk" value="1" class="form-check-input" {{$p->jk==1?'checked':''}}>Laki-Laki&nbsp;&nbsp;
                                    </label>
                                    <label for="inline-radio2" class="form-check-label ">
                                        <input type="radio" name="jk" value="2" class="form-check-input" {{$p->jk==2?'checked':''}}>Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Status Perkawinan</label></div>
                            <div class="col-12 col-md-8">
                                <select name="status" class="form-control">
                                    <option value="0" >-- Pilihan</option>
                                    <option value="1" {{$p->status==1?'selected':''}}>Kawin</option>
                                    <option value="2" {{$p->status==2?'selected':''}}>Belum Kawin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control" value="{{$p->alamat}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Tempat Lahir</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="text" name="tempatlahir" placeholder="Tempat Lahir" class="form-control" value="{{$p->tempat_lahir}}">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="date" name="tanggallahir" placeholder="YYYY-MM-DD" class="form-control" value="<?php echo date('Y-m-d',strtotime($p['tgl_lahir'])) ?>">
                            </div>
                        </div>
                   </div>
                       <div class="col-lg-6">
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Agama</label></div>
                            <div class="col-12 col-md-8">
                                <select name="agama" class="form-control">
                                    <option value="0">-- Pilihan</option>
                                    @foreach($agama as $ag)
                                    <option value="{{$ag->id}}" {{$p->id_agama==$ag->id?'selected':''}}>{{$ag->agama}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Pendidikan Terakhir</label></div>
                            <div class="col-12 col-md-8">
                                <select name="pendidikan" class="form-control">
                                    <option value="0">-- Pilihan</option>
                                    @foreach($pendidikan as $pend)
                                    <option value="{{$pend->id}}" {{$p->id_pend==$pend->id?'selected':''}}>{{$pend->tingkat}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Pekerjaan</label></div>
                            <div class="col-12 col-md-8">
                                <select name="pekerjaan" class="form-control">
                                    <option value="0">-- Pilihan</option>
                                    @foreach($pekerjaan as $pe)
                                    <option value="{{$pe->id}}" {{$p->id_pekerjaan==$pe->id?'selected':''}}>{{$pe->pekerjaan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Dapat Membaca Huruf</label></div>
                            <div class="col-12 col-md-8">
                                <div class="form-check-inline form-check">
                                    <label for="inline-radio1" class="form-check-label ">
                                        <input type="radio" name="butahuruf" value="0" class="form-check-input" {{$p->butahuruf==0?'checked':''}}>Ya&nbsp;&nbsp;
                                    </label>
                                    <label for="inline-radio2" class="form-check-label ">
                                        <input type="radio" name="butahuruf" value="1" class="form-check-input" {{$p->butahuruf==1?'checked':''}}>Tidak
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Kedudukan dalam Keluarga</label></div>
                            <div class="col-12 col-md-8">
                                <select name="kedudukan" class="form-control">
                                    <option value="0">-- Pilihan</option>
                                    <option value="1" {{$p->kedudukan==1?'selected':''}}>Kepala Keluarga</option>
                                    <option value="2" {{$p->kedudukan==2?'selected':''}}>Istri</option>
                                    <option value="3" {{$p->kedudukan==3?'selected':''}}>Anak Kandung</option>
                                    <option value="4" {{$p->kedudukan==4?'selected':''}}>Anak Angkat</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Kewarganegaraan</label></div>
                            <div class="col-12 col-md-8">
                                <select name="warganegara" class="form-control">
                                    <option value="0">-- Pilihan</option>
                                    <option value="1" {{$p->warganegara==1?'selected':''}}>Warga Negara Indonesia</option>
                                    <option value="2" {{$p->warganegara==2?'selected':''}}>Warga Negara Asing</option>
                                    <option value="3" {{$p->warganegara==3?'selected':''}}>Dwi Warga Negara</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Cacat</label></div>
                            <div class="col-12 col-md-8">
                                <select name="cacat" class="form-control">
                                    <option value="">-- Pilihan</option>
                                    <option value="0" {{$p->id_cacat==0?'selected':''}}>Tidak ada</option>
                                    @foreach($cacat as $ca)
                                    <option value="{{$ca->id}}" {{$p->id_cacat==$ca->id?'selected':''}}>{{$ca->cacat}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                   </div>
                  </div>
                  <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection