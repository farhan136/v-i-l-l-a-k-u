<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Pemesanan;
use App\User;

class AdminsController extends Controller
{
    public function index(){
        $villas = DB::table('tbl_villa')->get();
        return view('admin.home', ['villa'=>$villas]);
    }

    public function login(Request $request){
        if(isset($_POST['login'])){
            $username_login = $request->username;
            $password_login = $request->password;
            
            $admin=Admin::where('username', $username_login)->firstOrFail();
            if($admin){
                return redirect('/admin');
            }else{
                return abort('Sepertinya Username atau Password Anda Salah');
                return redirect('admin.login');
            }
        }
        
    }
    // public function menu($id){
    //     return view('admin.index', ['data'=>$id]);
    // }

    public function pesanan(){
        return view('admin.pemesanan');
    }

}
