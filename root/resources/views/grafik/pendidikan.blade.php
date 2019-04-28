@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Grafik Pendidikan Penduduk</h4>
<!--                <canvas id="pendidikanChart"></canvas><hr>-->
                <div class="table-responsive">
                   <?php $id=1; ?>
                    <table class="table">
                        <thead class="bg-dark">
                           <tr class="text-white">
                                <th>#</th>
                                <th>Pendidikan</th>
                                <th>Jumlah</th>
                                <th>Persentase</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$d['pendidikan']}}</td>
                                <td>{{$d['jumlah']}}</td>
                                <td>{{round(100/$penduduk*$d['jumlah'],2)}}%</td>
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
    var list_pendidikan = {!! $list_p !!};
    var result = {!! $result !!};
    var ctx = document.getElementById( "pendidikanChart" );
    ctx.height = 150;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: list_pendidikan,
            datasets: [
                {
                    label: "Jumlah",
                    data: result,
                    borderColor: "rgba(0, 194, 146, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 194, 146, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );
} )( jQuery );
</script>
@endsection