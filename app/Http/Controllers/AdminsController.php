<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Provil;
use App\Models\Pemesanan;
use App\Models\Payment;

class AdminsController extends Controller
{
    public function login(Request $request){
        request()->validate([
            'email'=>'required',
            'password'=>'required',
        ]); 
        $cocok = Admin::where('email', $request->email)->firstOrFail();
        if($cocok){
                if(Hash::check($request->password, $cocok->password)){ 
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

        $admin = new Admin;

        if ($request->password = $request->password2) {
            $foto = $request->file('foto');

            //nama file di dalam folder ketika disimpan
            $nama_foto = $foto->getClientOriginalName();

            $tujuan_upload = 'image/admin';
            $foto->move($tujuan_upload,$nama_foto);

            $admin->role = "admin";
            $admin->email = $request->email;
            $admin->name = $request->nama;
            $admin->foto = $nama_foto;
            $admin->pekerjaan = $request->pekerjaan;
            $admin->password = bcrypt($request->password); 
            $admin->save();

            return view('admin.login');   
        }
        else{
            echo "password tidak sesuai";
        }

        return redirect('/daftaradmin')->with('Message', 'Password Tidak Cocok');
    }

    public function index()
    {    
        return view('admin.dashboard');
    }

    public function hapuspesanan($id){
        $cocok = Pemesanan::find($id);
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

    public function profil(){
        $profil = Provil::first();
        return view('admin.profil', ['profil'=>$profil]);
    }

    public function editProfil(Request $request, $id)
    {

        $validated = $request->validate([
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

    public function logout(Request $request){
        $request->session()->invalidate();

        $request->session()->flush();

        return redirect('/loginadmin');
    }
}
