<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth\AuthenticatesUsers;

class OtentikasiController extends Controller
{
  public function index(){
   return view('user.login');
 }
 public function login(Request $request){
    	$cocok = User::where('Email', $request->email)->firstOrFail(); //menampilkan data admin yang emailnya sama dengan email yang dimasukkan pengguna
    	if($cocok){
    		if(Hash::check($request->password, $cocok->password)){ //mengecek apakah parameter pertama jika di hash sama dengan parameter kedua
          session(['nama' => $cocok->name, 'id'=>$cocok->id]);
          // dd(session('nama'));
          return redirect('/');
        }else{
          return redirect('/loginuser')->with('Message', 'Email atau Password Salah');
        }
      }
  // $attr = request()->validate([
  //   'email'=>'required',
  //   'password'=>'required',
  // ]); 
  // if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
  //       return redirect()->intended('/'); //apabila menggunakan intended, misalkan kita sedang di halaman checkout dan ingin melanjutkan namun tidak bisa karena belum login, setelah login maka akan langsung ke halaman tersebut bukan halaman awal
  //     }
  //     return redirect('/loginuser')->with('Message', 'Email atau Password Salah');

  //   }
}
    public function daftar(Request $request){
    	$user = new User;

    	if ($request->password = $request->password2) {
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
      else{
        echo "password tidak sesuai";
      }
    }

    public function logout(Request $request){
      $request->session()->flush();
      // Auth::logout();
      return redirect('/');
    }
  }
