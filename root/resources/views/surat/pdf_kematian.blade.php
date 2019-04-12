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
/*
            margin:15px auto;
            width:595px;
            height:842px;
*/
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
            font-weight:bold;
            text-align:center;
            font-size:12pt;
            display:block;
            margin-top:100px;
            margin-left:0;
            margin-right:250px;
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
    $pekerjaan = DB::table('m_pekerjaan')->find($p->id_pekerjaan);
@endphp
<div class="a4wrapper">
    <div class="margin">
        <header>
            <div class="row">
                <div class="col-2">
                    <img src="{{asset('images/logo2.png')}}" alt="logo" class="logo">
                </div>
                <div class="col-10">
                    PEMERINTAH KABUPATEN BONE BOLANGO<br>
                    KECAMATAN SUWAWA<br>
                    DESA TINGKOHUBU
                    <span class="alamat">
                        Jln. Lorong Selatan Belakang SMP Neg. I Suwawa Kec. Suwawa Kab. Bone Bolango
                    </span>
                </div>
            </div>
        </header>
        <article>
            <div class="row">
                <div class="col-12">
                    <span class="nomor-surat" style="text-decoration: underline">SURAT KETERANGAN KEMATIAN</span>
                    <span class="nomor-surat">NOMOR : {{$data['no_surat']}}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="data">
                        <tr>
                            <td>Yang bertanda tangan dibawah ini</td><td>:</td>
                        </tr>
                        <tr>
                            <td class="kiri">Nama</td>
                            <td class="nama">: {{$data['nama_kades']}}</td>
                        </tr>
                        <tr>
                            <td class="kiri">Jabatan</td>
                            <td>: Kepala Desa</td>
                        </tr>
                        <tr>
                            <td class="kiri">Alamat</td>
                            <td>: Desa Tingkohubu Kecamatan Suwawa<br>Kabupaten Bone Bolango</td>
                        </tr>
                        <tr>
                            <td>Menerangkan Kepada</td>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td class="kiri">Nama</td>
                            <td class="nama">: {{$p['nama']}}</td>
                        </tr>
                        <tr>
                            <td class="kiri">Tempat/tanggal lahir</td>
                            <td>: {{$p['tempat_lahir']}}, {{Carbon::parse($p->tgl_lahir)->format('d-m-Y')}}</td>
                        </tr>
                        <tr>
                            <td class="kiri">Jenis Kelamin</td>
                            <td>: {{$p->jk==1?'Laki-Laki':'Perempuan'}}</td>
                        </tr>
                        <tr>
                            <td class="kiri">Status</td>
                            <td>: {{$p->status==1?'Kawin':'Belum Kawin'}}</td>
                        </tr>
                        <tr>
                            <td class="kiri">Pekerjaan</td>
                            <td>: {{$pekerjaan->pekerjaan}}</td>
                        </tr>
                        <tr>
                            <td class="kiri">Alamat</td>
                            <td>: Desa Tingkohubu Kecamatan Suwawa<br> Kabupaten Bone Bolango</td>
                        </tr>
                        <tr>
                            <td colspan=2>Bahwa Yang Bersangkutan benar-benar Telah Meninggal Dunia pada :</td>
                        </tr>
                        <tr>
                            <td class="kiri">Hari / Tanggal</td>
                            <td>: 
                            <?php
                            $hari = Carbon::parse($data['tgl_meninggal'])->format('l');
                            if($hari == 'Sunday'){
                                echo 'Minggu';
                            }elseif($hari == 'Monday'){
                                echo 'Senin';
                            }elseif($hari == 'Tuesday'){
                                echo 'Selasa';
                            }elseif($hari == 'Wednesday'){
                                echo 'Rabu';
                            }elseif($hari == 'Thursday'){
                                echo 'Kamis';
                            }elseif($hari == 'Friday'){
                                echo 'Jumat';
                            }elseif($hari == 'Saturday'){
                                echo 'Sabtu';
                            }else{
                                echo 'BAAAACOOOT';
                            }
                            ?>
                            , {{Carbon::parse($data['tgl_meninggal'])->format('d F Y')}}
                            </td>
                        </tr>
                        <tr>             <td class="kiri">Pukul</td>
                            <td>: {{$data['waktu_meninggal']}}</td>
                        </tr>
                        <tr>
                            <td colspan=2 class="keterangan">
                                <p>Dan di Kebumikan Pada {{Carbon::parse($data['tgl_meninggal'])->format('d F Y')}}, Pukul {{$data['waktu_kebumikan']}}, di {{$data['tempat_kebumikan']}}.</p>
                                <p>Demikian Surat Keterangan ini Kami buat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</p>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </article>
        <footer>
            <div class="ttd-kiri">
                <span class="jabatan">Camat Suwawa</span>
                <span class="ttdnama">{{$data['nama_camat']}}</span>
                <span class="nip">NIP. {{$data['nip_camat']}}</span>
            </div>
            <div class="ttd-kanan">
                <span class="tanggal">Tingkohubu, {{$data['tgl_surat']}}</span>
                <span class="jabatan">Kepala Desa</span>
                <span class="ttdnama">{{$data['nama_kades']}}</span>
            </div>
        </footer>
    </div>
</div>

</body>
</html>