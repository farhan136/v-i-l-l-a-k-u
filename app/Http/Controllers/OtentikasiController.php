<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth\AuthenticatesUsers; 

class OtentikasiController extends Controller
{
  public function index()
  {
    return view('user.login');
  }

  public function login(Request $request)
  {
    $validated = $request->validate([
      'email' => 'required|email',
      'password' => 'required',
    ]);

    if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
      $user = Auth::user();
      if ($user->role == 'admin') {
        return redirect()->intended();
      }elseif ($user->role=='user') {
        return redirect()->intended();
      }
    }
    return redirect('login')->with('Message', 'Email atau Password Salah');

  }

  public function daftar(Request $request)
  {
   $validated = $request->validate([
    'foto' => 'required|mimes:jpg,bmp,png',
    'nama' => 'required',
    'email' => 'required|email',
    'pekerjaan' => 'required',
    'password' => 'required',
    'password2' => 'required',
  ]);

   $user = new User;

   if ($request->password = $request->password2) 
   {
    $foto = $request->file('foto');

    //nama file di dalam folder ketika disimpan
    $nama_foto = $foto->getClientOriginalName();

    $tujuan_upload = 'image/user';
    $foto->move($tujuan_upload,$nama_foto);

    $user->email = $request->email;
    $user->name = $request->nama;
    $user->foto = $nama_foto;
    $user->pekerjaan = $request->pekerjaan;
    $user->password = bcrypt($request->password); 
    $user->save();

    return view('user.login');   	
  }
  else
  {
    echo "password tidak sesuai";
  }
}

public function logout(Request $request)
{
  if (Auth::user()->role == 'user') {
    Auth::logout();
    return redirect('/');
  }elseif(Auth::user()->role == 'admin'){
    Auth::logout();
    return redirect('/admin');
  }
}
}