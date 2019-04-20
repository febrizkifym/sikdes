@extends('layouts.template')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="row" style="">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="seo-fact sbg2">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-id-badge"></i> Total Penduduk</div>
                            <h2>{{$total}} Orang</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="seo-fact sbg4">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="ti-home"></i> Total Keluarga</div>
                            <h2>{{$total_k}} Keluarga</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="seo-fact sbg1">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="fa fa-mars"></i> Penduduk Laki-Laki</div>
                            <h2>{{$total_l}} Orang</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mt-4">
                <div class="card">
                    <div class="seo-fact sbg3">
                        <div class="p-4 d-flex justify-content-between align-items-center">
                            <div class="seofct-icon"><i class="fa fa-venus"></i> Penduduk Perempuan</div>
                            <h2>{{$total_p}} Orang</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Grafik Usia Penduduk</h4>
                        <canvas id="usiaChart"></canvas>
                    </div>
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
        ctx.height = 150;
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