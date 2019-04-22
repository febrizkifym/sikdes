@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Grafik Usia Penduduk</h4>
                <canvas id="usiaChart"></canvas>
                <div class="table-responsive">
                   <?php $id=1; ?>
                    <table class="table">
                        <thead class="bg-dark">
                           <tr class="text-white">
                                <th>#</th>
                                <th>Rentang Usia</th>
                                <th>Laki-Laki</th>
                                <th>Perempuan</th>
                                <th>Total</th>
                                <th>Persentase</th>
                           </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$d['ket']}}</td>
                                <td>{{$d['usia_l']}} Orang</td>
                                <td>{{$d['usia_p']}} Orang</td>
                                <td>{{$d['usia_l']+$d['usia_p']}} Orang</td>
                                <td>{{100/$penduduk*($d['usia_l']+$d['usia_p'])}}%</td>
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
    var ctx = document.getElementById( "usiaChart" );
        ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "0-12 Bulan", "2-7 Tahun", "8-13 Tahun", "14-19 Tahun", "20-25 Tahun", "26-31 Tahun", "32-37 Tahun" , "38-43 Tahun", "44-49 Tahun", "50 Tahun Keatas"],
            datasets: [
                {
                    label: "Laki-Laki",
                    data: {{$usia_l}},
                    borderColor: "rgba(0,90,194,0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgb(77, 77, 253)"
                            },
                {
                    label: "Perempuan",
                    data: {{$usia_p}},
                    borderColor: "rgba(194,0,67,0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgb(216, 88, 79)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        suggestedMax: 5,
                        beginAtZero: true,
                         userCallback: function(label, index, labels) {
                             if (Math.floor(label) === label) {
                                 return label;
                             }

                         },
                    }
                                } ]
            }
        }
    } );
    

} )( jQuery );
</script>
@endsection