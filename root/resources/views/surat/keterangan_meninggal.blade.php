<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">-->
    <style>
        body{
            font-family:"Bookman Old Style";
            font-size:12pt;
        }
        .a4wrapper{
            /* margin:15px auto;
            width:595px;
            height:842px; */
            background-color:#FFF;
        }
        .margin{
            padding:20px 50px;
        }
        header{
            font-family:"Times New Roman";
            font-size:14pt;
            font-weight: bold;
            text-align:center;
            border-bottom:4px #000;
            border-bottom-style: double;
        }
        .alamat{
            margin-bottom:3px;
            font-size:10pt;
            font-style:oblique;
            display:block;
        }
        .logo{
            width:83px;
            float:left;
        }
        article{
            margin-top:20px;
        }
        .nomor-surat{
            text-align:center;
            font-weight: bolder;
            display:block;
            line-height:20px;
        }
        .data{
            margin-top:10px;
        }
        td{
            padding:2px 0;
        }
        .kiri{
            padding-left:50px;
        }
        .keterangan{
            text-indent:50px;
            padding-top:10px;
        }
        .nama{
            text-transform: uppercase;
            font-weight: bold;
        }
        footer{
            width:100%;
            font-weight:bold;
            /* text-align:center; */
            font-size:12pt;
            display:block;
            margin-top:200px;
            margin-left:0;
            margin-right:0;
        }
        .ttd-kiri, .ttd-kanan{
            display:inline-block;
        }
        .ttd-kiri{
/*            margin-right:0;*/
        }
        .jabatan{
            margin-bottom:100px;
        }
        footer > div > span{
            display:block;
        }
    </style>
</head>
<body>
@php
    use Carbon\Carbon;
    use Illuminate\Support\Facades\DB;
    
    $pekerjaan = DB::table('m_pekerjaan')->find($data->penduduk->id_pekerjaan);
    $agama = DB::table('m_agama')->find($data->penduduk->id_agama);
    $kades = DB::table('users')->where('tipe','3')->first();
@endphp
<div class="a4wrapper">
    <div class="margin">
        <header>
            <div class="row">
                <div class="col-2">
                    <img src="{{asset('images/logo2.png')}}" alt="logo" class="logo">
                </div>
                <div class="col-10">
                    PEMERINTAH KABUPATEN GORONTALO<br>
                    KECAMATAN PULUBALA<br>
                    DESA BUKIT AREN
                    <span class="alamat">
                        Pongongaila, Pulubala, Gorontalo
                    </span>
                </div>
            </div>
        </header>
        <article>
            <div class="row">
                <div class="col-12">
                    <span class="nomor-surat" style="text-decoration: underline">SURAT KETERANGAN KEMATIAN</span>
                    <span class="nomor-surat">NOMOR : &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;/&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="data" style="margin-left:auto;margin-right:auto">
                        <tr>
                            <td colspan="2">Yang bertanda tangan dibawah ini Kepala Desa Bukit Aren Kecamatan Pulubala Kabupaten Gorontalo, Menerangkan kepada:</td>
                        </tr>
                        <tr>
                            <td class="kiri">Nama</td>
                            <td class="">: {{$data->penduduk->nama}}
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri">Tempat / Tgl Lahir</td>
                            <td class="">: {{$data->penduduk->tempat_lahir}}, {{Carbon::parse($data->penduduk->tgl_lahir)->format('d F Y')}}
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri">Pekerjaan</td>
                            <td class="">: {{$pekerjaan->pekerjaan}}
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri">Alamat</td>
                            <td class="">: Desa Bukit Aren, Kec. Pulubala, Kab. Gorontalo
                            </td>
                        </tr>
                        <!--  -->
                        <tr>
                            <td>Telah Meninggal Dunia Pada:</td><td></td>
                        </tr>
                        <tr>
                            <td class="kiri">Hari / Tanggal</td>
                            <td class="">: {{$data->tanggal_surat}}
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri">Tahun</td>
                            <td class="">: {{$data->tanggal_surat}}
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri">Di</td>
                            <td class="">: Dusun {{$data->dusun}}, Desa {{$data->desa}}
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri"></td>
                            <td class="">: Kecamatan {{$data->kecamatan}}
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri"></td>
                            <td class="">: Kabupaten {{$data->kabupaten}}
                            </td>
                        </tr>
                        <tr>
                            <td class="kiri">Disebabkan Karena</td>
                            <td class="">: {{$data->alasan}}
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Demikian Surat Keterangan ini dibuat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </article>
        <footer style="display: flex; justify-content: flex-end;margin-left:300px;">
        <table class="noborder" style="width:8vm;border:0;">
        <tr class="noborder">
            <th class="noborder">Bukit Aren,<span style="display:inline-block; width: 3cm;"></span>{{date('Y')}}<br>KEPALA DESA BUKIT AREN</th>
        </tr>
        <tr class="noborder">
            <th class="noborder" style="height:2cm"></th>
        </tr>
        <tr class="noborder">
            <th class="noborder"><span style="font-weight:bold;text-decoration:underline;text-transform:uppercase">{{$kades->nama_lengkap}}</span><br>NIP. {{$kades->nip}}</th>
        </tr>
    </table>
        </footer>
    </div>
</div>

</body>
</html>