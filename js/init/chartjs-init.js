( function ( $ ) {
    "use strict";

    //chart usia
    var ctx = document.getElementById( "usiaChart" );
    //    ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: [ "0-12 Bulan", "2-7 Tahun", "8-13 Tahun", "14-19 Tahun", "20-25 Tahun", "26-31 Tahun", "32-37 Tahun" , "38-43 Tahun", "44-49 Tahun", "50 Tahun Keatas"],
            datasets: [
                {
                    label: "Laki-Laki",
                    data: [ 65, 59, 80, 81, 56, 55, 45 , 23 , 11, 9],
                    borderColor: "rgba(0, 90, 194, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 90, 194, 0.5)"
                            },
                {
                    label: "Perempuan",
                    data: [ 28, 48, 40, 19, 86, 27, 76 , 11, 9, 6],
                    borderColor: "rgba(194, 0,67, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(194, 0, 67, 0.5)"
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