<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $user = User::where('tipe',1)->get();
        return view('user.index',['user'=>$user]);
    }
    public function add(){
        return view('user.add');
    }
    public function post(Request $r){
        $validasi = $r->validate([
            'username' => 'required|unique:users|min:8|max:16',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
        ],[
            'username.unique' => 'Username ini sudah terpakai!',
            'email.unique' => 'Email ini sudah terpakai!',
            'username.min' => 'Username harus lebih dari :min karakter!',
            'username.max' => 'Username harus kurang dari :max karakter!',
            'password.min' => 'Password harus lebih dari :min karakter!',
        ]);
        
        if($r->password == $r->password2){
            $u = new User;
            $u->username = $r->username;
            $u->email = $r->email;
            $u->tipe = 1;
            $u->password = bcrypt($r->password);
            $u->last_login = null;
            $u->save();
            return redirect('user')->with('success','Input Data Berhasil');
        }else{
            return redirect()->back()->withInput()->with('alert','Password tidak cocok!');
        }
    }
    public function delete($id){
        User::find($id)->delete();
        return redirect('user')->with('success','Hapus Data Berhasil');
    }
    public function edit($id){
        $u = User::find($id);
        return view('user.edit',['u'=>$u]);
    }
    public function update(Request $r, $id){
        $validasi = $r->validate([
            'username' => 'required|min:8|max:16',
            'email' => 'required|email',
            'password' => 'min:8',
        ],[
            'username.min' => 'Username harus lebih dari :min karakter!',
            'username.max' => 'Username harus kurang dari :max karakter!',
            'password.min' => 'Password harus lebih dari :min karakter!',
        ]);
        $u = User::find($id);
        $u->username = $r->username;
        $u->email = $r->email;
        if($r->password == $r->password2){
            $password_valid = true;
        }else{
            $password_valid = false;
        }
        if($password_valid == true){
            $u->password = bcrypt($r->password);
        }else{
            return redirect()->back()->withInput()->with('alert','Password tidak cocok!');
        }
        $u->save();
        return redirect('user')->with('success','Update Data Berhasil');
    }
}
