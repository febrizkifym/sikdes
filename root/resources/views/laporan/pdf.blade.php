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
    </style>
</head>
<body>
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