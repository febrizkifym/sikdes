@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong class="card-title">Edit Data User</strong></div>
        <div class="card-body">
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
                    <form method="POST" action="{{route('user.update',$u->id)}}">
                       @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" value="{{$u->username}}" required autofocus>
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
                            <button class="btn btn-primary" type="submit">Submit</button>
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