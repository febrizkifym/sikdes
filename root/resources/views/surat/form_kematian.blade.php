@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header"><strong class="card-title">Cetak Surat Kematian</strong></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="POST" action="{{url('surat/kematian/cetak')}}">
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
                                <label for="nama_camat">Nama Camat</label>
                                <input type="text" class="form-control" name="nama_camat" value="{{old('nama_camat')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nip_camat">NIP Camat</label>
                                <input type="text" class="form-control" name="nip_camat" value="{{old('nip_camat')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK Yang Meninggal</label>
                                <input type="text" class="form-control" name="nik" value="{{old('nik')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_meninggal">Tanggal Meninggal</label>
                                <input type="date" class="form-control" name="tgl_meninggal" value="{{old('tgl_meninggal')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu_meninggal">Waktu Meninggal</label>
                                <input type="text" class="form-control" name="waktu_meninggal" value="{{old('waktu_meninggal')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_kebumikan">Tanggal Akan Dikebumikan</label>
                                <input type="date" class="form-control" name="tanggal_kebumikan" value="{{old('tgl_kebumikan')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu_kebumikan">Waktu Akan Dikebumikan</label>
                                <input type="text" class="form-control" name="waktu_kebumikan" value="{{old('waktu_kebumikan')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="tempat_kebumikan">Tempat Akan Dikebumikan</label>
                                <input type="text" class="form-control" name="tempat_kebumikan" value="{{old('tempat_kebumikan')}}" required>
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