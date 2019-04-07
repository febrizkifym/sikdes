@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Entri Data Penduduk</strong>
            </div>
            <div class="card-body">
                <form action="{{route('penduduk.post')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                                <input required type="text" name="nama" placeholder="Nama Lengkap" class="form-control" autofocus>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">No. KK</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="text" name="nokk" placeholder="Nomor Kartu Keluarga" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">NIK</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="text" name="nik" placeholder="Nomor Induk Kependudukan" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-8">
                                <div class="form-check-inline form-check">
                                    <label for="jk_1" class="form-check-label ">
                                        <input required id="jk_1" type="radio" name="jk" value="1" class="form-check-input">Laki-Laki&nbsp;&nbsp;
                                    </label>
                                    <label for="jk_2" class="form-check-label ">
                                        <input required id="jk_2" type="radio" name="jk" value="2" class="form-check-input">Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Status Perkawinan</label></div>
                            <div class="col-12 col-md-8">
                                <select name="status" class="form-control">
                                    <option value="0">-- Pilihan</option>
                                    <option value="1">Kawin</option>
                                    <option value="2">Belum Kawin</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="text" name="alamat" placeholder="Alamat Lengkap" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Tempat Lahir</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="text" name="tempatlahir" placeholder="Tempat Lahir" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-8">
                                <input required type="date" name="tanggallahir" placeholder="YYYY-MM-DD" class="form-control">
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
                                    <option value="{{$ag->id}}">{{$ag->agama}}</option>
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
                                    <option value="{{$pend->id}}">{{$pend->tingkat}}</option>
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
                                    <option value="{{$pe->id}}">{{$pe->pekerjaan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Dapat Membaca Huruf</label></div>
                            <div class="col-12 col-md-8">
                                <div class="form-check-inline form-check">
                                    <label for="inline-radio1" class="form-check-label ">
                                        <input required type="radio" name="butahuruf" value="0" class="form-check-input">Ya&nbsp;&nbsp;
                                    </label>
                                    <label for="inline-radio2" class="form-check-label ">
                                        <input required type="radio" name="butahuruf" value="1" class="form-check-input">Tidak
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Kedudukan dalam Keluarga</label></div>
                            <div class="col-12 col-md-8">
                                <select name="kedudukan" class="form-control">
                                    <option value="0">-- Pilihan</option>
                                    <option value="1">Kepala Keluarga</option>
                                    <option value="2">Istri</option>
                                    <option value="3">Anak Kandung</option>
                                    <option value="4">Anak Angkat</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Kewarganegaraan</label></div>
                            <div class="col-12 col-md-8">
                                <select name="warganegara" class="form-control">
                                    <option value="0">-- Pilihan</option>
                                    <option value="1">Warga Negara Indonesia</option>
                                    <option value="2">Warga Negara Asing</option>
                                    <option value="3">Dwi Warga Negara</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label class="form-control-label">Cacat</label></div>
                            <div class="col-12 col-md-8">
                                <select name="cacat" class="form-control">
                                    <option value="">-- Pilihan</option>
                                    <option value="0" selected>Tidak ada</option>
                                    @foreach($cacat as $ca)
                                    <option value="{{$ca->id}}">{{$ca->cacat}}</option>
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