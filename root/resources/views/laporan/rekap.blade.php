<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>laporan</title>
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
        td, th{padding:2px 3px;text-align:center}
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
                <span class="kop">PEMERINTAH KABUPATEN GORONTALO<br>
                KECAMATAN PULUBALA<br>
                DESA BUKIT AREN</span>
                <span class="alamat">
                Pongongaila, Pulubala, Gorontalo
                </span>
            </div>
        </div>
    </header>
    <h1>DAFTAR LAPORAN PENDUDUK WARGA NEGARA INDONESIA</h1>
    <h2>DESA BUKIT AREN KECAMATAN PULUBALA</h2>
    <h2>BULAN {{$bulan}} TAHUN {{$tahun}}</h2>
    <?php
    //dummy
    // $bulan = $data['bulan'];
    
    //mutasi bulan ini
    $m_bulan_ini[0] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where('alamat','like','%timur%')->count();
    $m_bulan_ini[1] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where('alamat','like','%timur%')->count();
    $m_bulan_ini[2] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where('alamat','like','%barat%')->count();
    $m_bulan_ini[3] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where('alamat','like','%barat%')->count();
    $m_bulan_ini[4] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where('alamat','like','%hulawalu%')->count();
    $m_bulan_ini[5] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where('alamat','like','%hulawalu%')->count();
    $m_bulan_ini[6] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->count();
    $m_bulan_ini[7] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->count();
    //penduduk bulan ini
    $p_bulan_ini[0] = DB::table('t_penduduk')->where('jk','1')->where('alamat','like','%timur%')->count() - $m_bulan_ini[0];
    $p_bulan_ini[1] = DB::table('t_penduduk')->where('jk','2')->where('alamat','like','%timur%')->count() - $m_bulan_ini[1];
    $p_bulan_ini[2] = DB::table('t_penduduk')->where('jk','1')->where('alamat','like','%barat%')->count() - $m_bulan_ini[2];
    $p_bulan_ini[3] = DB::table('t_penduduk')->where('jk','2')->where('alamat','like','%barat%')->count() - $m_bulan_ini[3];
    $p_bulan_ini[4] = DB::table('t_penduduk')->where('jk','1')->where('alamat','like','%hulawalu%')->count() - $m_bulan_ini[4];
    $p_bulan_ini[5] = DB::table('t_penduduk')->where('jk','2')->where('alamat','like','%hulawalu%')->count() - $m_bulan_ini[5];
    $p_bulan_ini[6] = DB::table('t_penduduk')->where('jk','1')->count() - $m_bulan_ini[6];
    $p_bulan_ini[7] = DB::table('t_penduduk')->where('jk','2')->count() - $m_bulan_ini[7];
    // dd($p_bulan_ini);
    //penduduk bulan lalu
    $p_bulan_lalu[0] = $p_bulan_ini[0] + $m_bulan_ini[0];
    $p_bulan_lalu[1] = $p_bulan_ini[1] + $m_bulan_ini[1];
    $p_bulan_lalu[2] = $p_bulan_ini[2] + $m_bulan_ini[2];
    $p_bulan_lalu[3] = $p_bulan_ini[3] + $m_bulan_ini[3];
    $p_bulan_lalu[4] = $p_bulan_ini[4] + $m_bulan_ini[4];
    $p_bulan_lalu[5] = $p_bulan_ini[5] + $m_bulan_ini[5];
    $p_bulan_lalu[6] = $p_bulan_ini[6] + $m_bulan_ini[6];
    $p_bulan_lalu[7] = $p_bulan_ini[7] + $m_bulan_ini[7];
    //lahir bulan ini
    $l_bulan_ini[0] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",4)->where('alamat','like','%timur%')->count();
    $l_bulan_ini[1] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",4)->where('alamat','like','%timur%')->count();
    $l_bulan_ini[2] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",4)->where('alamat','like','%barat%')->count();
    $l_bulan_ini[3] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",4)->where('alamat','like','%barat%')->count();
    $l_bulan_ini[4] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",4)->where('alamat','like','%hulawalu%')->count();
    $l_bulan_ini[5] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",4)->where('alamat','like','%hulawalu%')->count();
    $l_bulan_ini[6] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",4)->count();
    $l_bulan_ini[7] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",4)->count();
    //meninggal bulan ini
    $m_bulan_ini[0] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",3)->where('alamat','like','%timur%')->count();
    $m_bulan_ini[1] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",3)->where('alamat','like','%timur%')->count();
    $m_bulan_ini[2] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",3)->where('alamat','like','%barat%')->count();
    $m_bulan_ini[3] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",3)->where('alamat','like','%barat%')->count();
    $m_bulan_ini[4] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",3)->where('alamat','like','%hulawalu%')->count();
    $m_bulan_ini[5] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",3)->where('alamat','like','%hulawalu%')->count();
    $m_bulan_ini[6] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",3)->count();
    $m_bulan_ini[7] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",3)->count();
    //datang bulan ini
    $d_bulan_ini[0] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",1)->where('alamat','like','%timur%')->count();
    $d_bulan_ini[1] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",1)->where('alamat','like','%timur%')->count();
    $d_bulan_ini[2] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",1)->where('alamat','like','%barat%')->count();
    $d_bulan_ini[3] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",1)->where('alamat','like','%barat%')->count();
    $d_bulan_ini[4] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",1)->where('alamat','like','%hulawalu%')->count();
    $d_bulan_ini[5] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",1)->where('alamat','like','%hulawalu%')->count();
    $d_bulan_ini[6] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",1)->count();
    $d_bulan_ini[7] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",1)->count();
    //pindah bulan ini
    $pn_bulan_ini[0] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",2)->where('alamat','like','%timur%')->count();
    $pn_bulan_ini[1] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",2)->where('alamat','like','%timur%')->count();
    $pn_bulan_ini[2] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",2)->where('alamat','like','%barat%')->count();
    $pn_bulan_ini[3] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",2)->where('alamat','like','%barat%')->count();
    $pn_bulan_ini[4] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",2)->where('alamat','like','%hulawalu%')->count();
    $pn_bulan_ini[5] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",2)->where('alamat','like','%hulawalu%')->count();
    $pn_bulan_ini[6] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",1)->where("t_mutasi.status",2)->count();
    $pn_bulan_ini[7] = DB::table('t_mutasi')->whereMonth('created_at','=',$kode_bulan)->join('t_penduduk','t_penduduk.id','t_mutasi.id_penduduk')->where("jk",2)->where("t_mutasi.status",2)->count();
    ?>
    <table class="table table-sm">
        <tr>
            <th rowspan="2">NO</th>
            <th rowspan="2">DUSUN</th>
            <th colspan="3">PEND. BULAN LALU</th>
            <th colspan="3">LAHIR BULAN INI</th>
            <th colspan="3">MATI BULAN INI</th>
            <th colspan="3">DATANG BULAN INI</th>
            <th colspan="3">PINDAH BULAN INI</th>
            <th colspan="3">PEND. BULAN INI</th>
        </tr>
        <tr>
            <th>L</th>
            <th>P</th>
            <th>L+P</th>
            <th>L</th>
            <th>P</th>
            <th>L+P</th>
            <th>L</th>
            <th>P</th>
            <th>L+P</th>
            <th>L</th>
            <th>P</th>
            <th>L+P</th>
            <th>L</th>
            <th>P</th>
            <th>L+P</th>
            <th>L</th>
            <th>P</th>
            <th>L+P</th>
        </tr>
        <tr>
            <th>1</th>
            <th>TOAO TIMUR</th>
            <!-- Penduduk Bulan Lalu -->
            <td>{{$p_bulan_lalu[0]}}</td>
            <td>
            
            
            {{$p_bulan_lalu[1]}}</td>
            <td>{{$p_bulan_lalu[0] + $p_bulan_lalu[1]}}</td>
            <!-- Lahir Bulan Ini -->
            <td>{{$l_bulan_ini[0]}}</td>
            <td>{{$l_bulan_ini[1]}}</td>
            <td>{{$l_bulan_ini[0] + $l_bulan_ini[1]}}</td>
            <!-- Mati Bulan Ini -->
            <td>{{$m_bulan_ini[0]}}</td>
            <td>{{$m_bulan_ini[1]}}</td>
            <td>{{$m_bulan_ini[0] + $m_bulan_ini[1]}}</td>
            <!-- Datang Bulan Ini -->
            <td>{{$d_bulan_ini[0]}}</td>
            <td>{{$d_bulan_ini[1]}}</td>
            <td>{{$d_bulan_ini[0] + $d_bulan_ini[1]}}</td>
            <!-- Pindah Bulan Ini -->
            <td>{{$pn_bulan_ini[0]}}</td>
            <td>{{$pn_bulan_ini[1]}}</td>
            <td>{{$pn_bulan_ini[0] + $pn_bulan_ini[1]}}</td>
            <!-- Penduduk Bulan Ini -->
            <td>{{$p_bulan_ini[0]}}</td>
            <td>{{$p_bulan_ini[1]}}</td>
            <td>{{$p_bulan_ini[0]+$p_bulan_ini[1]}}</td>
        </tr>
        <tr>
            <th>2</th>
            <th>TOAO BARAT</th>
            <!-- Penduduk Bulan Lalu -->
            <td>{{$p_bulan_lalu[2]}}</td>
            <td>{{$p_bulan_lalu[3]}}</td>
            <td>{{$p_bulan_lalu[2] + $p_bulan_lalu[3]}}</td>
            <!-- Lahir Bulan Ini -->
            <td>{{$l_bulan_ini[2]}}</td>
            <td>{{$l_bulan_ini[3]}}</td>
            <td>{{$l_bulan_ini[2] + $l_bulan_ini[3]}}</td>
            <!-- Mati Bulan Ini -->
            <td>{{$m_bulan_ini[2]}}</td>
            <td>{{$m_bulan_ini[3]}}</td>
            <td>{{$m_bulan_ini[2] + $m_bulan_ini[3]}}</td>
            <!-- Datang Bulan Ini -->
            <td>{{$d_bulan_ini[2]}}</td>
            <td>{{$d_bulan_ini[3]}}</td>
            <td>{{$d_bulan_ini[2] + $d_bulan_ini[3]}}</td>
            <!-- Pindah Bulan Ini -->
            <td>{{$pn_bulan_ini[2]}}</td>
            <td>{{$pn_bulan_ini[3]}}</td>
            <td>{{$pn_bulan_ini[2] + $pn_bulan_ini[3]}}</td>
            <!-- Penduduk Bulan Ini -->
            <td>{{$p_bulan_ini[2]}}</td>
            <td>{{$p_bulan_ini[3]}}</td>
            <td>{{$p_bulan_ini[2]+$p_bulan_ini[3]}}</td>
        </tr>
        <tr>
            <th>3</th>
            <th>HULAWALU</th>
            <!-- Penduduk Bulan Lalu -->
            <td>{{$p_bulan_lalu[4]}}</td>
            <td>{{$p_bulan_lalu[5]}}</td>
            <td>{{$p_bulan_lalu[4] + $p_bulan_lalu[5]}}</td>
            <!-- Lahir Bulan Ini -->
            <td>{{$l_bulan_ini[4]}}</td>
            <td>{{$l_bulan_ini[5]}}</td>
            <td>{{$l_bulan_ini[4] + $l_bulan_ini[5]}}</td>
            <!-- Mati Bulan Ini -->
            <td>{{$m_bulan_ini[4]}}</td>
            <td>{{$m_bulan_ini[5]}}</td>
            <td>{{$m_bulan_ini[4] + $m_bulan_ini[5]}}</td>
            <!-- Datang Bulan Ini -->
            <td>{{$d_bulan_ini[2]}}</td>
            <td>{{$d_bulan_ini[3]}}</td>
            <td>{{$d_bulan_ini[4] + $d_bulan_ini[5]}}</td>
            <!-- Pindah Bulan Ini -->
            <td>{{$pn_bulan_ini[4]}}</td>
            <td>{{$pn_bulan_ini[5]}}</td>
            <td>{{$pn_bulan_ini[4] + $pn_bulan_ini[5]}}</td>
            <!-- Penduduk Bulan Ini -->
            <td>{{$p_bulan_ini[4]}}</td>
            <td>{{$p_bulan_ini[5]}}</td>
            <td>{{$p_bulan_ini[4]+$p_bulan_ini[5]}}</td>
        </tr>
        <tr>
            <th colspan=2>JUMLAH</th>
            <!-- Penduduk Bulan Lalu -->
            <td>{{$p_bulan_lalu[6]}}</td>
            <td>{{$p_bulan_lalu[7]}}</td>
            <td>{{$p_bulan_lalu[6] + $p_bulan_lalu[7]}}</td>
            <!-- Lahir Bulan Ini -->
            <td>{{$l_bulan_ini[6]}}</td>
            <td>{{$l_bulan_ini[7]}}</td>
            <td>{{$l_bulan_ini[6] + $l_bulan_ini[7]}}</td>
            <!-- Mati Bulan Ini -->
            <td>{{$m_bulan_ini[6]}}</td>
            <td>{{$m_bulan_ini[7]}}</td>
            <td>{{$m_bulan_ini[6] + $m_bulan_ini[7]}}</td>
            <!-- Datang Bulan Ini -->
            <td>{{$d_bulan_ini[6]}}</td>
            <td>{{$d_bulan_ini[7]}}</td>
            <td>{{$d_bulan_ini[6] + $d_bulan_ini[7]}}</td>
            <!-- Pindah Bulan Ini -->
            <td>{{$pn_bulan_ini[6]}}</td>
            <td>{{$pn_bulan_ini[7]}}</td>
            <td>{{$pn_bulan_ini[6] + $pn_bulan_ini[7]}}</td>
            <!-- Penduduk Bulan Ini -->
            <td>{{$p_bulan_ini[6]}}</td>
            <td>{{$p_bulan_ini[7]}}</td>
            <td>{{$p_bulan_ini[6]+$p_bulan_ini[7]}}</td>
        </tr>
        <?php 
        use Carbon\Carbon;
        use Illuminate\Support\Facades\DB;
        $id=1; ?>
        @php
            $kades = DB::table('users')->where('tipe','3')->first();
        @endphp
    </table>
    <h2>Tanggal Cetak : {{date('d F Y')}}</h2>
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