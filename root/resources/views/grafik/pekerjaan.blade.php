@extends('layouts.template')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Grafik Pekerjaan Penduduk</h4>
                <canvas id="pekerjaanChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
( function ( $ ) {
    "use strict";
    var list_pekerjaan = {!! $list_p !!};
    var ctx = document.getElementById( "pekerjaanChart" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: list_pekerjaan,
            datasets: [
                {
                    label: "My First dataset",
                    data: [ 55, 50, 75, 80, 56, 55, 60 ],
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