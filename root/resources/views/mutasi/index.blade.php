@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong class="card-title">Data Mutasi Penduduk</strong></div>
        <div class="card-body">
           <a href="{{route('mutasi.add')}}"><button class="btn btn-success">Tambah Data</button></a>
           <div class="clearfix" style="margin-bottom:15px;"></div>
            <table class="table table-hover table-striped">
                <tr>
                    <th>#</th>
                    <th>Nomor Induk</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Mutasi</th>
                    <th>Tanggal Mutasi</th>
                    <th>Aksi</th>
                </tr>
                <?php $id=1 ?>
                @foreach($mutasi as $m)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$m->penduduk->nik}}</td>
                    <td>{{$m->penduduk->nama}}</td>
                    <td>
                        @if($m->jenis_mutasi == 1)
                        Datang
                        @elseif($m->jenis_mutasi == 2)
                        Pergi
                        @elseif($m->jenis_mutasi = 3)
                        Meninggal
                        @endif
                    </td>
                    <td>{{date('d F Y',strtotime($m->created_at))}}</td>
                    <td>
                        <a href="{{route('mutasi.detail',$m->id)}}"><button class="btn btn-sm btn-primary">Detail</button></a>
                        <a href="{{route('mutasi.delete',$m->id)}}"><button class="btn btn-sm btn-danger">Hapus</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
@endsection