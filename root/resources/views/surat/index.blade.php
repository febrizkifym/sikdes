@extends('layouts.template')
@section('content')
@php
    use Illuminate\Support\Facades\DB;
    $agama = DB::table('m_agama')->get();
    $pendidikan = DB::table('m_pendidikan')->get();
    $pekerjaan = DB::table('m_pekerjaan')->get();
    $cacat = DB::table('m_cacat')->get();
@endphp
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Pembuatan Surat</strong>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form method="POST" action="{{url('surat')}}">
                            @csrf
                            <div class="form-group">
                                <label for="nik">Cari Penduduk</label>
                                <select name="nik" id="penduduk" class="form-control">
                                    @foreach($penduduk as $p)
                                        <option value="{{$p['nik']}}">{{$p['nik']}} - {{$p['nama']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="surat">Jenis Surat</label>
                                <select name="surat" id="surat" class="form-control">
                                    <option value="kematian">Surat Kematian</option>
                                    <option value="kelahiran">Surat Kelahiran</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Buat Surat</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
@endsection
@section('js')
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#penduduk').select2({
            theme: 'bootstrap4',
        });
    });
</script>
@endsection