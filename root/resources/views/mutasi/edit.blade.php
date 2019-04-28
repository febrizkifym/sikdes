@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
           <h4 class="title-header">Edit Mutasi Penduduk</h4>
           <hr>
            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="{{route('mutasi.update',$m->id)}}">
                       @csrf
                        <div class="form-group">
                            <label for="nik">Nomor Induk</label>
                            <input type="text" class="form-control" name="nik" value="{{$m->penduduk->nik}}" readonly>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nama</label>
                            <input type="text" class="form-control" id="nama" value="{{$m->penduduk->nama}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="jenis_mutasi">Jenis Mutasi</label>
                            <select name="jenis_mutasi" id="jenisMutasi" class="form-control">
                                <option value="1" {{$m->status==1?'selected':''}}>Penduduk Datang</option>
                                <option value="2" {{$m->status==2?'selected':''}}>Penduduk Pergi</option>
                                <option value="3" {{$m->status==3?'selected':''}}>Penduduk Meninggal</option>
                                <option value="4" {{$m->status==4?'selected':''}}>Pisah Kartu Keluarga</option>
                            </select>
                        </div>
                        <div class="form-group" id="nokk_form" style="display:none">
                            <label for="nokk">Nomor KK Baru</label>
                            <input type="text" class="form-control" name="nokk" value="{{$m->penduduk->no_kk}}">
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?php echo date('Y-m-d',strtotime($m['created_at'])) ?>">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="" cols="30" rows="3" class="form-control">{{$m->keterangan}}</textarea>
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
<script>
    $(document).ready(function(){
        if($('#jenisMutasi').val() == 4){
            $('#nokk_form').show();
        }
       $('#jenisMutasi').change(function(){
           var jenisMutasi = $('#jenisMutasi').val();
           var noKK = $('#nokk_form');
           if(jenisMutasi == 4){
                noKK.show();
              }else{
                  noKK.hide();
              }
       }); 
    });
</script>
@endsection