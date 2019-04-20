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
                        <th>Nama Kepala Keluarga</th>
                        <th>Nama Istri</th>
                        <th>Jumlah Anak</th>
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
                        <td>{{$k['kepala_keluarga']}}</td>
                        <td>{{$k['istri']}}</td>
                        <td>{{$k['jumlah_1']+$k['jumlah_2']}}</td>
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