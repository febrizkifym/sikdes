@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                   <h4 class="header-title">Edit Data Penduduk</h4>
                   <hr>
                <form action="{{route('penduduk.update',$p)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                  <div class="row">            
                       <div class="col-lg-6">
                        @csrf
                        @php
                            use Illuminate\Support\Facades\DB;
                            $agama = DB::table('m_agama')->get();
                            $pendidikan = DB::table('m_pendidikan')->get();
                            $pekerjaan = DB::table('m_pekerjaan')->get();
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
                                @if($errors->has('nik'))
                                <div class="alert alert-danger" style="margin-top:5px;text-transform:capitalize">
                                    {{$errors->first('nik')}}
                                </div>
                                @endif
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
                                <select name="alamat" class="form-control">
                                    <option value="HULAWALU" {{$p->alamat=='HULAWALU'?'selected':''}}>HULAWALU</option>
                                    <option value="TOAO TIMUR" {{$p->alamat=='TOAO TIMUR'?'selected':''}}>TOAO TIMUR</option>
                                    <option value="TOAO BARAT" {{$p->alamat=='TOAO BARAT'?'selected':''}}>TOAO BARAT</option>
                                </select>
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
                            <div class="col col-md-4"><label for="foto" class="form-control-label">Pas Foto (Max : 2 MB)</label></div>
                            <div class="col-12 col-md-8">
                                <input type="file" name="foto" id="foto" class="form-control">
                                @if($errors->has('foto'))
                                <div class="alert alert-danger" style="margin-top:5px;text-transform:capitalize">
                                    {{$errors->first('foto')}}
                                </div>
                                @endif
                            </div>
                        </div>
                   </div>
                  </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <a href="{{url('penduduk')}}"><button type="button" class="btn btn-secondary">Kembali</button></a>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection