@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong class="card-title">Daftar User</strong></div>
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
                    <form method="POST" action="{{route('user.post')}}">
                       @csrf
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" value="{{old('username')}}" required autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat E-Mail</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password2" required>
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