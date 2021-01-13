<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Mutasi Bulan {{$bulan}} Tahun {{$tahun}}</title>
    <style>
        *{
            font-size:9pt;
        }
        .noborder{
            border:0px;
        }
        table{width:100%;}
        table, tr, td, th{
            border:1px solid #333;
            border-collapse: collapse;
        }
        td, th{padding:2px 3px;}
        h1{font-size:16pt;}
        strong{margin-top:5px;}
        body{
            font-family:"Bookman Old Style";
            font-size:9pt;
        }
        .a4wrapper{
            margin:15px auto;
            width:595px;
            height:842px;
            background-color:#FFF;
        }
        .margin{
            padding:20px 50px;
        }
        header{
            font-family:"Times New Roman";
            font-weight: bold;
            text-align:center;
            border-bottom:4px #000;
            border-bottom-style: double;
            padding-bottom:5px;
        }
        .kop{
            font-size:14pt;
            margin-bottom:10px;
        }
        .alamat{
            font-size:11pt;
            font-style:oblique;
            display:block;
        }
        .logo{
            width:85px;
            float:left;
            position:absolute;
            left:1000px;
        }
    </style>
</head>
<body>
    <!-- <header>
        <div class="row">
            <div class="col-2">
                <img src="{{asset('images/logo2.png')}}" alt="logo" class="logo">
            </div>
            <div class="col-10">
                <span class="kop">PEMERINTAH KABUPATEN GORONTALO<br>
                KECAMATAN PULUBALA<br>
                DESA BUKIT AREN</span>
                <span class="alamat">
                Pongongaila, Pulubala, Gorontalo
                </span>
            </div>
        </div>
    </header> -->
    <h1>B.2 BUKU MUTASI PENDUDUK DESA</h1>
    <br>
    <br>
    <h1>BUKU MUTASI PENDUDUK DESA BULAN {{$bulan}} TAHUN {{$tahun}}</h1>
    <table class="table table-sm">
        <tr>
            <th>NO</th>
            <th>NAMA LENGKAP</th>
            <th>TEMPAT & TANGGAL LAHIR</th>
            <th>JENIS KELAMIN</th>
            <th>JENIS MUTASI</th>
            <th>TANGGAL</th>
            <th>KETERANGAN</th>
        </tr>
        <!-- <tr>
            <th rowspan="2">NOMOR URUT</th>
            <th rowspan="2">NAMA LENGKAP / PANGGILAN</th>
            <th colspan="2">TEMPAT & TANGGAL LAHIR</th>
            <th rowspan="2">JENIS KELAMIN</th>
            <th rowspan="2">KEWARGANEGARAAN</th>
            <th colspan="2">PENAMBAHAN</th>
            <th colspan="4">PENGURANGAN</th>
            <th rowspan="2">KET</th>
        </tr>
        <tr>
            <th>TEMPAT</th>
            <th>TANGGAL</th>
            <th>DATANG DARI</th>
            <th>TANGGAL</th>
            <th>PINDAH KE</th>
            <th>TANGGAL</th>
            <th>MENINGGAL</th>
            <th>TANGGAL</th>
        </tr>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
            <th>9</th>
            <th>10</th>
            <th>11</th>
            <th>12</th>
            <th>13</th>
        </tr> -->
        <?php 
        use Carbon\Carbon;
        use Illuminate\Support\Facades\DB;
        $id=1; 
        $kades = DB::table('users')->where('tipe','3')->first();
        ?>
        @foreach($data as $d)
        <tr>
            <td>{{$id++}}</td>
            <td>{{$d->nama}}</td>
            <td>{{$d->tempat_lahir}} - {{$d->tgl_lahir}}</td>
            <td>
                @if($d->jk == 1)
                    Laki-Laki
                @else
                    Perempuan
                @endif
            </td>
            <td>
                @if($d->status === 1)
                    Datang
                @elseif($d->status === 2)
                    Pergi
                @elseif($d->status === 3)
                    Meninggal
                @elseif($d->status === 4)
                    Pisah Kartu Keluarga
                @elseif($d->status === 5)
                    Lahir
                @endif
            </td>
            <td>
                {{Carbon::parse($d->created_at)->format('d M Y')}}
            </td>
            <td>
                {{$d->keterangan}}
            </td>
        </tr>
        @endforeach
    </table>
    <h2>Tanggal : {{date('d F Y')}}</h2>
    <!-- <strong>Dicetak oleh : {{Auth::user()->username}}</strong> -->
    <table class="noborder" style="float:right;width:6cm;border:0;">
        <tr class="noborder">
            <th class="noborder">Bukit Aren,<span style="display:inline-block; width: 2.5cm;"></span>{{date('Y')}}<br>KEPALA DESA BUKIT AREN</th>
        </tr>
        <tr class="noborder">
            <th class="noborder" style="height:2cm"></th>
        </tr>
        <tr class="noborder">
            <th class="noborder"><span style="font-weight:bold;text-decoration:underline;text-transform:uppercase">{{$kades->nama_lengkap}}</span><br>NIP. {{$kades->nip}}</th>
        </tr>
    </table>
</body>
</html>