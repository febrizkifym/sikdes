@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Grafik Agama Penduduk</h4>
                <canvas id="agamaChart"></canvas><hr>
                <div class="table-responsive">
                   <?php $id=1; ?>
                    <table class="table">
                        <thead class="bg-dark">
                           <tr class="text-white">
                                <th>#</th>
                                <th>Agama</th>
                                <th>Jumlah</th>
                                <th>Persentase</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d['id']}}</td>
                                <td>{{$d['agama']}}</td>
                                <td>{{$d['jumlah']}}</td>
                                <td>{{100/$penduduk*$d['jumlah']}}%</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
( function ( $ ) {
    "use strict";
    var list_agama = {!! $list_a !!};
    var result = {!! $result !!};
    var ctx = document.getElementById( "agamaChart" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: result,
                backgroundColor: [
                                    "rgba(37, 0, 194, 0.9)",
                                    "rgba(194, 119, 0, 0.9)",
                                    "rgba(134, 0, 194, 0.9)",
                                    "rgba(0, 127, 194, 0.9)",
                                    "rgba(0, 194, 194, 0.9)",
                                    "rgba(0, 194, 112, 0.9)",
                                    "rgba(0, 194, 15, 0.9)",
                                    "rgba(157, 194, 0, 0.9)",
                                ]

                            } ],
            labels: list_agama
        },
        options: {
            responsive: true
        }
    } );
} )( jQuery );
</script>
@endsection