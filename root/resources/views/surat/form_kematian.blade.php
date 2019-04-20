@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
               <h4 class="title-header">Cetak Surat Kematian</h4>
               <hr>
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
                                <input type="text" class="form-control" name="nama_kades" placeholder="Kepala Desa" value="{{old('nama_kades')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama_camat">Nama Camat</label>
                                <input type="text" class="form-control" name="nama_camat" placeholder="Camat" value="{{old('nama_camat')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nip_camat">NIP Camat</label>
                                <input type="text" class="form-control" name="nip_camat" placeholder="Nomor Induk Pegawai Camat" value="{{old('nip_camat')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="nama">Penduduk Yang Meninggal</label>
                                <select name="nik" class="cari form-control" id="penduduk">
                                    @foreach($penduduk as $p)
                                    <option value="{{$p['nik']}}">{{$p['nik']}} - {{$p['nama']}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tgl_meninggal">Tanggal Meninggal</label>
                                <input type="date" class="form-control" name="tgl_meninggal" value="{{old('tgl_meninggal')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu_meninggal">Waktu Meninggal</label>
                                <input type="text" class="form-control" name="waktu_meninggal" placeholder="00:00 Wita" value="{{old('waktu_meninggal')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="tgl_kebumikan">Tanggal Dikebumikan</label>
                                <input type="date" class="form-control" name="tanggal_kebumikan" value="{{old('tgl_kebumikan')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="waktu_kebumikan">Waktu Dikebumikan</label>
                                <input type="text" class="form-control" name="waktu_kebumikan" placeholder="00:00 Wita" value="{{old('waktu_kebumikan')}}" required>
                            </div>
                            <div class="form-group">
                                <label for="tempat_kebumikan">Tempat Dikebumikan</label>
                                <input type="text" class="form-control" name="tempat_kebumikan" placeholder="Tempat" value="{{old('tempat_kebumikan')}}" required>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
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
        jQuery('#penduduk').select2({
            theme: 'bootstrap4',
        });
    });
</script>
@endsection