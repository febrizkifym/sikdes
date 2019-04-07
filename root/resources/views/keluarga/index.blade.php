@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong class="card-title">Data Keluarga</strong></div>
        <div class="card-body">
            <table class="table table-sm table-striped">
                <tr>
                    <th>#</th>
                    <th>No. Kartu Keluarga</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>Nama Istri</th>
                    <th>Jumlah Anak</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php $id=1 ?>
                @foreach($keluarga as $k)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$k['no_kk']}}</td>
                    <td>{{$k['kepala_keluarga']}}</td>
                    <td>{{$k['istri']}}</td>
                    <td>{{$k['jumlah_1']+$k['jumlah_2']}}</td>
                    <td>{{$k['alamat']}}</td>
                    <td>
                        <a href="{{route('keluarga.detail',$k['no_kk'])}}"><button class="btn btn-sm btn-primary">Detail</button></a>
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