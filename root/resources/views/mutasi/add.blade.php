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
                                <option value="1">Penduduk Datang</option>
                                <option value="2">Penduduk Pergi</option>
                                <option value="3">Penduduk Meninggal</option>
                                <option value="4">Pisah Kartu Keluarga</option>
                            </select>
                        </div>
                        <div class="form-group" id="nokk_form" style="display:none">
                            <label for="nokk">Nomor KK Baru</label>
                            <input type="text" class="form-control" name="nokk">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
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
                console.log(jenisMutasi);
            if(jenisMutasi == 4){
                jQuery('#nokk_form').show();
           }else{
               jQuery('#nokk_form').hide();
               }
        });
    });
</script>
@endsection