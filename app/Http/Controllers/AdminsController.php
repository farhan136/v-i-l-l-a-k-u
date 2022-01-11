<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\Provil;
use App\Models\Payment;
use App\Models\Villa;
use Illuminate\Support\Facades\Auth;

class AdminsController extends Controller
{
    protected function akun()
    {
        return Auth::guard('admin')->user();
    }
    
    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]); 
        // $cocok = Admin::where('email', $request->email)->firstOrFail();
        // if($cocok){
        //         if(Hash::check($request->password, $cocok->password)){ 
        //             session(['login_admin' => 'true', 'nama_admin' => $cocok->nama]);
        //             return redirect('/admin');
        //     }
        // }
        $credentials = [
            'email'=>$request->email, 
            'password'=>$request->password
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('/admin');
        }
        return redirect('/loginadmin')->with('Message', 'Email atau Password Salah');
    }

    public function daftar(Request $request){ 
        $validated = $request->validate([
            // 'foto' => 'required|mimes:jpg,bmp,png',
            'nama' => 'required',
            'email' => 'required|email|unique:',
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

            $admin->email = $request->email;
            $admin->nama = $request->nama;
            $admin->foto = $nama_foto;
            $admin->pekerjaan = $request->pekerjaan;
            $admin->password = bcrypt($request->password); 
            $admin->save();

            return view('admin.login');   
        }
        else{
            // echo "password tidak sesuai";
            return redirect('/daftarAdmin')->with('Message', 'Password Tidak Cocok');
        }
    }

    public function index()
    {    
        return view('admin.dashboard');
    }

    public function hapuspesanan($id){
        $cocok = Payment::find($id);
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

    public function detail($id)
    {
        $detail = Villa::where('id', $id)->first();//tampilkan data dari tabel villa yang id nya = $id
        return view('admin.detail', ['detail'=>$detail]);
    }

    public function tampilkanvilla(){
        $villas = Villa::all();
        if ($this->akun()->roles === 'OWNER') {
            $villas = Villa::Where('owner_id', $this->akun()->id)->get();
        }
        return view('admin.home', ['villa'=>$villas]);
    }

    public function editvilla($id){
        $cocok = Villa::find($id);
        return view('admin.home_edit', ['cocok'=>$cocok]);
    }

    public function hapusvilla($id){
        $cocok = Villa::find($id);
        $cocok->delete();
        return view('admin.home');
    }

    public function updatevilla(Request $request, $id)
    {
        $validated = $request->validate([
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

        return redirect('/admin/villa');
    }

    public function transaksi(){
        $transaksi = Payment::all();
        if ($this->akun()->roles === 'OWNER') {
            $villas = Villa::select('id')->Where('owner_id', $this->akun()->id)->get()->toArray();
            $transaksi = DB::table('tbl_pembayaran')
            ->join('tbl_villa', 'tbl_villa.id', '=', 'tbl_pembayaran.villa_id')
            ->whereIn('villa_id', $villas)
            ->select('tbl_pembayaran.id as id',
                'tbl_pembayaran.mulai as mulai',
                'tbl_pembayaran.selesai as selesai',
                'tbl_pembayaran.total_harga as total_harga',
                'tbl_pembayaran.payment_status as payment_status',
                'tbl_villa.villa as villa'
            )
            ->get();
        }
        return view('admin.pemesanan', ['transaksi'=>$transaksi]);
    }

    public function detailtransaksi($id)
    {
        $det_pay = Payment::find($id);
        return view('admin.pemesanan_detail', ['payment'=>$det_pay]);
    }

    public function logout(Request $request){
        
        $request->session()->invalidate();

        $request->session()->flush();

        Auth::logout();
        
        return redirect('/loginadmin');
    }
}
