@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-3 col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-1">
                        <i class="pe-7s-user"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{$total}}</span></div>
                            <div class="stat-heading">Total Penduduk</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-2">
                        <i class="pe-7s-users"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{$total_k}}</span></div>
                            <div class="stat-heading">Jumlah Keluarga</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-3">
                        <i class="pe-7s-male"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{$total_l}}</span></div>
                            <div class="stat-heading">Penduduk Laki-laki</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-4">
                        <i class="pe-7s-female"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-text"><span class="count">{{$total_p}}</span></div>
                            <div class="stat-heading">Penduduk Perempuan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
        <div class="card-header"><strong class="card-title">Data Penduduk Berdasarkan Usia</strong></div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-8">
                <canvas id="usiaChart"></canvas>
                        
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /# column -->
</div>
<div class="clearfix"></div>
@endsection

@section('js')
<script>
( function ( $ ) {
    "use strict";

    //chart usia
    var ctx = document.getElementById( "usiaChart" );
        ctx.height = 200;
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
                    backgroundColor: "rgba(0,90,194,0.5)"
                            },
                {
                    label: "Perempuan",
                    data: {{$usia_p}},
                    borderColor: "rgba(194,0,67,0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(194,0,67,0.5)"
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