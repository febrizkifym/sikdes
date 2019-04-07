@extends('layouts.template')
@section('content')
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-header"><strong class="card-title">Data User</strong></div>
        <div class="card-body">
           <a href="{{route('user.add')}}"><button class="btn btn-success">Daftar User</button></a>
           <hr>
            <table class="table table-striped">
                <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Terakhir Login</th>
                    <th>Aksi</th>
                </tr>
                <?php $id=1 ?>
                @foreach($user as $u)
                <tr>
                    <td>{{$id++}}</td>
                    <td>{{$u->username}}</td>
                    <td>{{$u->email}}</td>
                    <td>
                        @if($u->last_login)
                        {{date('d F Y G:i',strtotime($u->last_login))}}
                        @else
                        User Belum Login
                        @endif
                    </td>
                    <td>
                        <a href="{{route('user.edit',$u->id)}}"><button class="btn btn-sm btn-primary">Edit</button></a>
                        <a href="{{route('user.delete',$u->id)}}"><button class="btn btn-sm btn-danger">Hapus</button></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>
<div class="clearfix"></div>
@endsection