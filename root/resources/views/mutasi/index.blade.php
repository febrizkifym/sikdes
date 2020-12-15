@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
              <h4 class="header-title">Data Mutasi Penduduk</h4>
           <a href="{{route('mutasi.add')}}"><button class="btn btn-success">Tambah Data</button></a>
           <div class="clearfix" style="margin-bottom:15px;"></div>
            <table id="dataTable" class="table table-hover table-striped">
                <tr>
                    <th>#</th>
                    <th>Nomor Induk</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Mutasi</th>
                    <th>Tanggal Mutasi</th>
                    <th>Aksi</th>
                </tr>
                @if($mutasi->count() == 0)
                <tr>
                    <td colspan=6 align=center>
                        Belum ada data
                    </td>
                </tr>
                @endif
                <?php $id=1 ?>
                @foreach($mutasi as $m)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$m->penduduk->nik}}</td>
                    <td>{{$m->penduduk->nama}}</td>
                    <td>
                        @if($m->status == 1)
                        Datang
                        @elseif($m->status == 2)
                        Pergi
                        @elseif($m->status == 3)
                        Meninggal
                        @elseif($m->status == 4)
                        Pisah Kartu Keluarga
                        @endif
                    </td>
                    <td>{{date('d F Y',strtotime($m->created_at))}}</td>
                    <td>
                        <a href="{{route('mutasi.cetak',$m->id)}}"><button class="btn btn-sm btn-info">Cetak Surat</button></a>
                        <a href="{{route('mutasi.delete',$m->id)}}"><button class="btn btn-sm btn-danger">Hapus</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
            <hr>
            <a href="{{route('mutasi.laporan')}}"><button class="btn btn-primary">Cetak Laporan Mutasi</button></a>
            <a href=""><button class="btn btn-info">Cetak Rekap Mutasi Perbulan</button></a>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
@endsection
@section('js')
<script type="text/javascript">
   if ($('#dataTable').length) {
        $('#dataTable').DataTable({
            responsive: true
        });
    }
</script>
@endsection