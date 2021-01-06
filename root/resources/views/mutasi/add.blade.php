@extends('layouts.template')
@section('content')
<?php
    $penduduk = App\Penduduk::all();
?>
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
           <h4 class="header-title">Tambah Mutasi Penduduk</h4>
           <hr>
            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="{{route('mutasi.post')}}">
                       @csrf
                        <div class="form-group">
                            <label for="nik">Nomor Induk</label>
                            <select name="nik" id="penduduk" class="form-control">
                                @foreach($penduduk as $pe)
                                <option value="{{$pe->nik}}">{{$pe->nik}} - {{$pe->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        @isset($p)
                        <div class="form-group">
                            <label class="form-control-label">Nama</label>
                            <input type="text" class="form-control" id="nama" value="@isset($p){{$p->nama}}@endisset" disabled>
                        </div>
                        @endisset
                        <div class="form-group">
                            <label for="jenis_mutasi">Jenis Mutasi</label>
                            <select name="jenis_mutasi" id="jenisMutasi" class="form-control" required>
                                <option value="1" selected>Penduduk Datang</option>
                                <option value="2">Penduduk Pergi</option>
                                <option value="3">Penduduk Meninggal</option>
                                <option value="4">Pisah Kartu Keluarga</option>
                                <option value="5">Lahir</option>
                            </select>
                        </div>
                        <div class="form-group" id="nokk_form" style="display:none">
                            <label for="nokk">Nomor KK Baru</label>
                            <input type="text" class="form-control" name="nokk">
                        </div>
                        <!-- MENINGGAL -->
                        <div class="form-group" id="tanggal_form" class="tanggal_form" style="display:none">
                            <label for="tanggal_surat">Tanggal Meninggal</label>
                            <input type="date" class="form-control" name="tanggal_surat">
                        </div>
                        <!-- /MENINGGAL -->
                        <!-- PERGI -->
                        <div class="form-group" id="dusun_form" class="pindah_form" style="display:none">
                            <label for="dusun">Dusun</label>
                            <input type="text" class="form-control" name="dusun">
                        </div>
                        <div class="form-group" id="desa_form" class="pindah_form" style="display:none">
                            <label for="desa">Desa</label>
                            <input type="text" class="form-control" name="desa">
                        </div>
                        <div class="form-group" id="kecamatan_form" class="pindah_form" style="display:none">
                            <label for="kecamatan">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan">
                        </div>
                        <div class="form-group" id="kabupaten_form" class="pindah_form" style="display:none">
                            <label for="kabupaten">Kabupaten</label>
                            <input type="text" class="form-control" name="kabupaten">
                        </div>
                        <div class="form-group" id="alasan_form" class="pindah_form" style="display:none">
                            <label for="alasan">Alasan/Penyebab</label>
                            <input type="text" class="form-control" name="alasan">
                        </div>
                        <!-- /PERGI -->
                        <div class="form-group">
                            <label for="tanggal">Tanggal Mutasi</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan / Klasifikasi</label>
                            <textarea name="keterangan" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                          <a href="{{url('mutasi')}}"><button type="button" class="btn btn-secondary">Kembali</button></a>
                        </div>
                    </form>
                </div>
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
        var nik = jQuery('#penduduk').val();
        jQuery('#penduduk').select2({
            theme: 'bootstrap4',
        });
        jQuery('#jenisMutasi').change(function(){
        var jenisMutasi = jQuery('#jenisMutasi').val();
            if(jenisMutasi == 1){
                //DATANG
                jQuery('#nokk_form').hide(100);
                //
                jQuery('#dusun_form').hide(100);
                jQuery('#alasan_form').hide(100);
                jQuery('#desa_form').hide(100);
                jQuery('#kecamatan_form').hide(100);
                jQuery('#kabupaten_form').hide(100);
                //
                jQuery('#tanggal_form').hide(100);
            }
            else if(jenisMutasi == 2){
                //PERGI
                jQuery('#nokk_form').hide(100);
                //
                jQuery('#alasan_form').show(100);
                jQuery('#dusun_form').show(100);
                jQuery('#desa_form').show(100);
                jQuery('#kecamatan_form').show(100);
                jQuery('#kabupaten_form').show(100);
                //
                jQuery('#tanggal_form').hide(100);

            }
            else if(jenisMutasi == 3){
                //MENINGGAL
                jQuery('#nokk_form').hide(100);
                //
                jQuery('#dusun_form').show(100);
                jQuery('#desa_form').show(100);
                jQuery('#alasan_form').show(100);
                jQuery('#kecamatan_form').show(100);
                jQuery('#kabupaten_form').show(100);
                //
                jQuery('#tanggal_form').show(100);
            }
            else if(jenisMutasi == 4){
                //PINDAH KK
                jQuery('#nokk_form').show(100);
                //
                jQuery('#dusun_form').hide(100);
                jQuery('#desa_form').hide(100);
                jQuery('#alasan_form').hide(100);
                jQuery('#kecamatan_form').hide(100);
                jQuery('#kabupaten_form').hide(100);
                //
                jQuery('#tanggal_form').hide(100);
            }else{
                jQuery('#nokk_form').hide(100);
                //
                jQuery('#alasan_form').hide(100);
                jQuery('#dusun_form').hide(100);
                jQuery('#desa_form').hide(100);
                jQuery('#kecamatan_form').hide(100);
                jQuery('#kabupaten_form').hide(100);
                //
                jQuery('#tanggal_form').hide(100);
            }
        });
    });
</script>
@endsection