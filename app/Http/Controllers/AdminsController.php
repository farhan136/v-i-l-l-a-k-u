<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Villa;
use App\Models\Provil;
use App\Models\Pemesanan;

class AdminsController extends Controller
{

    public function login(Request $request){ 
        request()->validate([
            'username'=>'required',
            'password'=>'required',
        ]); 
        $cocok = Admin::where('username', $request->username)->firstOrFail(); //menampilkan data admin yang emailnya sama dengan email yang dimasukkan pengguna
        if($cocok){
            if($request->password=$cocok->password){ //mengecek apakah parameter pertama jika di hash sama dengan parameter kedua
              session(['login_admin' => 'true', 'nama_admin' => $cocok->nama]);
              return redirect('/admin');
          }

      }
      return redirect('/loginadmin')->with('Message', 'Email atau Password Salah');
  }

public function daftar(Request $request){ 
    $validated = $request->validate([
      'foto' => 'required|mimes:jpg,bmp,png',
      'nama' => 'required',
      'email' => 'required',
      'pekerjaan' => 'required',
      'password' => 'required',
      'password2' => 'required',
    ]);

    $user = new User;

if ($request->password = $request->password2) {
    $foto = $request->file('foto');

    //nama file di dalam folder ketika disimpan
    $nama_foto = $foto->getClientOriginalName();

    $tujuan_upload = 'image/user';
    $foto->move($tujuan_upload,$nama_foto);

    $user->role = "admin"
    $user->email = $request->email;
    $user->name = $request->nama;
    $user->foto = $nama_foto;
    $user->pekerjaan = $request->pekerjaan;
    $user->password = bcrypt($request->password); 
    $user->save();

    return view('admin.login');   
}
else{
    echo "password tidak sesuai";
}

    return redirect('/daftaradmin')->with('Message', 'Password Tidak Cocok');
}

public function logout(Request $request){
    $request->session()->flush();
    return redirect('/loginadmin');
}


public function index(){
    $villas = Villa::all();
    return view('admin.home', ['villa'=>$villas]);
}

public function editvilla($id){
        $cocok = Villa::find($id);//ambil data villa berdasarkan id nya
        return view('admin.home_edit', ['cocok'=>$cocok]);
    }

    public function hapusvilla($id){
        $cocok = Villa::find($id);//ambil data villa berdasarkan id nya
        $cocok->delete();
        return view('admin.home');
    }

    public function hapuspesanan($id){
        $cocok = Pemesanan::find($id);//ambil data pemesanan berdasarkan id nya
        $cocok->delete();
        return view('admin.pemesanan');
    }

    public function user(){
        $user = User::all();
        return view('admin.user', ['user'=>$user]);
    }

    public function hapususer($id){
        $cocok = User::find($id);//ambil data user berdasarkan id nya
        $cocok->delete();
        return redirect()->back();
    }

    public function updatevilla(Request $request, $id)
    {
        $validated = $request->validate([ //saat di validate, maka semua form harus diisi, jika tidak diisi maka tidak akan berpindah
            'pulau' => 'required',
            'villa' => 'required',
            'provinsi' => 'required',
            'deskripsi' => 'required',    
            'harga' => 'required', 
            'nomor_hp' => 'required',
            'alamat' => 'required',
        ]);
        $cocok = Villa::find($id);

        $cocok->villa = $request->villa;
        $cocok->provinsi = $request->provinsi;
        $cocok->pulau = $request->pulau;
        $cocok->alamat = $request->alamat;
        $cocok->nomor_hp = $request->nomor_hp;
        $cocok->harga = $request->harga;
        $cocok->deskripsi = $request->deskripsi;

        $cocok->save();

        return redirect('/admin');

    }

    public function profil(){
        $profil = Provil::first();
        return view('admin.profil', ['profil'=>$profil]);
    }

    public function editProfil(Request $request, $id)
    {

        $validated = $request->validate([ //saat di validate, maka semua form harus diisi, jika tidak diisi maka tidak akan berpindah
            'tentang' => 'required',
            'instagram' => 'required',
            'wa' => 'required',
            'alamat' => 'required',    
        ]);

        $provil = Provil::find($id);

        $provil->tentang = $request->tentang;
        $provil->instagram = $request->instagram;
        $provil->wa = $request->wa;
        $provil->alamat = $request->alamat;
        $provil->save();

        return redirect()->back();

    }

    public function about(){
        $profil = Provil::first();
        return view('user.tentang', ['profil'=>$profil]);
    }
}
