<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>laporan</title>
    <style>
        *{
            font-size:10pt;
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
    <header>
        <div class="row">
            <div class="col-2">
                <img src="{{asset('images/logo2.png')}}" alt="logo" class="logo">
            </div>
            <div class="col-10">
                <span class="kop">PEMERINTAH KABUPATEN BONE BOLANGO<br>
                KECAMATAN SUWAWA<br>
                DESA TINGKOHUBU</span>
                <span class="alamat">
                    Jln. Lorong Selatan Belakang SMP Neg. I Suwawa Kec. Suwawa Kab. Bone Bolango
                </span>
            </div>
        </div>
    </header>
    <h1>Laporan Kependudukan Desa Tingkohubu</h1>
    <h2>Tanggal : {{date('d F Y')}}</h2>
    <table class="table table-sm">
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>No KK</th>
            <th>JK</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Status</th>
            <th>Kedudukan</th>
            <th>Kewarganegaraan</th>
            <th>Agama</th>
            <th>Pendidikan</th>
            <th>Pekerjaan</th>
        </tr>
        <?php 
        use Carbon\Carbon;
        use Illuminate\Support\Facades\DB;
        $id=1; ?>
        @foreach($data as $d)
        @php
            $agama = DB::table('m_agama')->find($d->id_agama);
            $pendidikan = DB::table('m_pendidikan')->find($d->id_pend);
            $pekerjaan = DB::table('m_pekerjaan')->find($d->id_pekerjaan);
            $cacat = DB::table('m_cacat')->find($d->id_cacat);
        @endphp
        <tr>
            <td>{{$id++}}</td>
            <td>{{$d->nik}}</td>
            <td>{{$d->no_kk}}</td>
            <td>{{$d->nama}}</td>
            <td>
                @if($d->jk == 1)
                L
                @else
                P
                @endif
            </td>
            <td>{{$d->tempat_lahir}}</td>
            <td>{{Carbon::parse($d->tgl_lahir)->format('d M Y')}}</td>
            <td>{{$d->status==1?'Kawin':'Belum Kawin'}}</td>
            <td>
                @if($d->kedudukan==1)
                Kepala Keluarga
                @elseif($d->kedudukan==2)
                Istri
                @elseif($d->kedudukan==3)
                Anak Kandung
                @elseif($d->kedudukan==4)
                Anak Angkat
                @endif
            </td>
            <td>
                @if($d->warganegara==1)
                WNI
                @elseif($d->warganegara==2)
                WNA
                @elseif($d->warganegara==3)
                Dwi Warga Negara
                @endif
            </td>
            <td>{{$agama->agama}}</td>
            <td>{{$pekerjaan->pekerjaan}}</td>
            <td>{{$pendidikan->tingkat}}</td>
        </tr>
        @endforeach
    </table>
    <strong>Dicetak oleh : {{Auth::user()->username}}</strong>
</body>
</html>