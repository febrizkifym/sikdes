@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
           <h4 class="title-header">Edit User Kepala Desa</h4><hr>
            <div class="row">
                <div class="col-lg-6">
                    @if (session('alert'))
                        <div class="alert alert-danger">
                            {{ session('alert') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{route('kades.update')}}">
                       @csrf
                        <div class="form-group">
                            <label for="username">Nama Lengkap (Beserta Titel)</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="{{$u->nama_lengkap}}" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="username">NIP</label>
                            <input type="text" class="form-control" name="nip" value="{{$u->nip}}" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" value="{{$u->username}}" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat E-Mail</label>
                            <input type="email" class="form-control" name="email" value="{{$u->email}}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password belum diganti">
                        </div>
                        <div class="form-group">
                            <label for="password">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password2" placeholder="Password belum diganti">
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary">Submit</button>
                          <a href="{{url('user')}}"><button type="button" class="btn btn-secondary">Kembali</button></a>
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