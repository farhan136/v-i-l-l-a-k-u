<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Pemesanan;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    public function index(){
        $villas = DB::table('tbl_villa')->get();
        return view('admin.home', ['villa'=>$villas]);
    }

    public function login(Request $request){ 
        request()->validate([
            'username'=>'required',
            'password'=>'required',
        ]); 
        $cocok = Admin::where('username', $request->username)->firstOrFail(); //menampilkan data user yang emailnya sama dengan email yang dimasukkan pengguna
        if($cocok){
            if($request->password=$cocok->password){ //mengecek apakah parameter pertama jika di hash sama dengan parameter kedua
          session(['login_admin' => 'true', 'nama'=>$cocok->nama]);
          return redirect('/admin');
        }

      }
        // if (Auth::guard('admin')->attempt(['username'=>$request->username, 'password'=>$request->password])) {
        //     return redirect('/admin');
        // }
        return redirect('/loginadmin')->with('Message', 'Email atau Password Salah');
    }

      public function logout(Request $request){
        Auth::logout();
        return redirect('/loginadmin');
    }
    
    public function pesanan(){
        return view('admin.pemesanan');
    }

    public function user(){
        $user = User::all();
        return view('admin.user', ['user'=>$user]);
    }

}
