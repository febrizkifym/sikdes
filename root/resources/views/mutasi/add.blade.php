@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong class="card-title">Tambah Data Mutasi</strong></div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <form method="POST" action="{{route('mutasi.post')}}">
                       @csrf
                        <div class="form-group">
                            <label for="nik">Nomor Induk</label>
                            <input type="text" class="form-control" name="nik" id="nik" value="@isset($p){{$p->nik}}@endisset" required>
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
                            </select>
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
    var nik = $('#nik').val();
    $('#nik').focusout(function(){
        //
    });
</script>
@endsection