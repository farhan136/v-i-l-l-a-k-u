<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index(){

    }
    public function login(Request $request){
        if(isset($_POST['login'])){
            $username_login = $request->username;
            $password_login = $request->password;

            $admin = DB::table('tbl_admin')->where('username', $username_login);
            $query_run = mysqli_query($connection, $admin);
            if(mysqli_fetch_array($query_run)) {
                $_SESSION['username'] = $username_login;
                return view('admin.index');
            } else {
                $_SESSION['status'] = 'username atau password salah!';
                return view('admin.login');
            }
            dd($request->all());
        }
        
    }
}
