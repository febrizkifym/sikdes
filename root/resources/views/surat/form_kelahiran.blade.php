@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong class="card-title">Cetak Surat Kelahiran</strong></div>
            <div class="card-body">
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
                                <input type="text" class="form-control" name="nama_kades" value="{{old('nama_kades')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_anak">Nama Anak</label>
                                <input type="text" class="form-control" name="nama_anak" value="{{old('nama_anak')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="jk_anak">Jenis Kelamin Anak</label>
                                <select name="jk_anak" class="form-control">
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tgl_lahir">Tanggal Lahir Anak</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="{{old('tgl_lahir')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir Anak</label>
                                <input type="text" class="form-control" name="tempat_lahir" value="{{old('tempat_lahir')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nik_ibu">NIK Ibu</label>
                                <input type="text" class="form-control" name="nik_ibu" value="{{old('nik_ibu')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nik_ayah">NIK Ayah</label>
                                <input type="text" class="form-control" name="nik_ayah" value="{{old('nik_ayah')}}" required>
                            </div>
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
    var nik = $('#nik').val();
    $('#nik').focusout(function(){
        //
    });
</script>
@endsection