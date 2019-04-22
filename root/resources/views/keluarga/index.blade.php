@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
              <h4 class="header-title">Data Keluarga</h4>           
            <div class="data-tables datatable-primary">
              <table id="bootstrap-data-table" class="table table-sm table-striped">
               <thead> 
                   <tr>
                        <th>#</th>
                        <th>No. Kartu Keluarga</th>
                        <th>Kepala Keluarga</th>
                        <th>Istri</th>
                        <th>Anggota Keluarga</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $id=1 ?>
                    @foreach($keluarga as $k)
                    <tr>
                        <td>{{$id++}}</td>
                        <td>{{$k['no_kk']}}</td>
                        <td>
                            @isset($k['kepala_keluarga'])
                                {{$k['kepala_keluarga']}}
                            @else
                                <em class="text-muted">Tidak/Belum Terdaftar</em>
                            @endisset
                        </td>
                        <td>
                            @isset($k['istri'])
                                {{$k['istri']}}
                            @else
                                <em class="text-muted">Tidak/Belum Terdaftar</em>
                            @endisset</td>
                        <td>{{$k['jumlah']}} Orang</td>
                        <td>{{$k['alamat']}}</td>
                        <td>
                            <a href="{{route('keluarga.detail',$k['no_kk'])}}"><button class="btn btn-xs btn-primary">Detail</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function() {
      $('#bootstrap-data-table').DataTable();
  } );
</script>
@endsection