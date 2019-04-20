@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
               <h4 class="title-header">Cetak Surat Kelahiran</h4><hr>
                <div class="row">
                    <div class="col-lg-6">
                        <form method="POST" action="{{url('surat/kelahiran/cetak')}}">
                           @csrf
                            <div class="form-group">
                                <label for="no_surat">Nomor Surat</label>
                                <input type="text" class="form-control" name="no_surat" value="{{old('no_surat')}}" placeholder=".../.../.../.../..." required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_surat">Tanggal Surat</label>
                                <input type="date" class="form-control" name="tgl_surat" value="{{old('tgl_surat')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_kades">Nama Kepala Desa</label>
                                <input type="text" class="form-control" name="nama_kades" placeholder="Nama Kepala Desa" value="{{old('nama_kades')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_anak">Nama Anak</label>
                                <input type="text" class="form-control" name="nama_anak" placeholder="Nama Anak" value="{{old('nama_anak')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="jk_anak">Jenis Kelamin Anak</label>
                                <select name="jk_anak" class="form-control">
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir Anak</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="{{old('tgl_lahir')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir Anak</label>
                                <input type="text" class="form-control" name="tempat_lahir" value="{{old('tempat_lahir')}}" placeholder="Tempat Lahir" required>
                            </div>
                            <div class="form-group">
                                <label for="nik_ayah">Nomor Induk Ayah</label>
                                <select name="nik_ayah" class="penduduk form-control" id="ayah">
                                    @foreach($ayah as $a)
                                    <option value="{{$a['nik']}}">{{$a['nik']}} - {{$a['nama']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nik_ibu">Nomor Induk Ibu</label>
                                <select name="nik_ibu" class="penduduk form-control" id="ibu">
                                    @foreach($ibu as $i)
                                    <option value="{{$i['nik']}}">{{$i['nik']}} - {{$i['nama']}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit">Cetak Surat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="clearfix"></div>
@endsection
@section('js')
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.penduduk').select2({
            theme: 'bootstrap4',
        });
    });
</script>
@endsection