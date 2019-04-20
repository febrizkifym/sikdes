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
                            <input type="text" class="form-control" name="nik" value="{{$m->penduduk->nik}}">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Nama</label>
                            <input type="text" class="form-control" id="nama" value="{{$m->penduduk->nama}}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="jenis_mutasi">Jenis Mutasi</label>
                            <select name="jenis_mutasi" id="jenisMutasi" class="form-control">
                                <option value="1" {{$m->jenis_mutasi==1?'selected':''}}>Penduduk Datang</option>
                                <option value="2" {{$m->jenis_mutasi==2?'selected':''}}>Penduduk Pergi</option>
                                <option value="3" {{$m->jenis_mutasi==3?'selected':''}}>Penduduk Meninggal</option>
                            </select>
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