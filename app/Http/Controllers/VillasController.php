<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Villa;
use App\Models\Pemesanan;
use App\Models\User;
use App\Models\Testi;
 
class VillasController extends Controller
{
 
    public function index()
    {
        $laris = Pemesanan::all();
        $jawa = Villa::where('pulau', "Jawa")->get();
        $kalimantan = Villa::where('pulau', "Kalimantan")->get();
        $bali = Villa::where('pulau', "Bali")->get();
        $testi = Testi::all();
        return view('user.index', ['jawa' => $jawa, 'kalimantan' => $kalimantan, 'bali' => $bali, 'laris'=>$laris->unique('villa_id'), 'testi'=>$testi]);
    }
 
    public function store(Request $request)
    {
        $villa = new Villa;

        if (isset($_POST['add_villa'])) {
            
            $foto_utama = $request->file('foto_utama'); 
            $foto_indoor = $request->file('foto_indoor'); 
            $foto_outdoor = $request->file('foto_outdoor');


            //nama file di dalam folder ketika disimpan
            $nama_utama = $foto_utama->getClientOriginalName();
            $nama_indoor = $foto_indoor->getClientOriginalName();
            $nama_outdoor = $foto_outdoor->getClientOriginalName();

            $tujuan_upload = 'image';
            $foto_utama->move($tujuan_upload,$nama_utama);
            $foto_indoor->move($tujuan_upload,$nama_indoor);
            $foto_outdoor->move($tujuan_upload,$nama_outdoor);

            $villa->foto_utama = 'image/'.$nama_utama;
            $villa->foto_indoor = 'image/'.$nama_indoor;
            $villa->foto_outdoor = 'image/'.$nama_outdoor;
            $villa->pulau = $request->pulau;
            $villa->villa = $request->villa;
            $villa->provinsi = $request->provinsi;
            $villa->alamat = $request->alamat;
            $villa->deskripsi = $request->deskripsi;
            $villa->harga = $request->harga;
            $villa->nomor_hp = $request->nomor_hp;

            $villa->save();
        }
        return redirect('/admin');
    }

    public function testi(Request $request)
    {
        $testi = new Testi;
        if(isset($_POST['tambahtesti'])){
            $testi->user_id = auth()->user()->id;
            $testi->testimoni = $request->pendapat;

            $testi->save();
        }
        return redirect('/');
    }

    public function show($id)
    {
        $villa = DB::table('tbl_villa')->where('id', $id)->get();
        return view('user.properties', ['villa'=>$villa[0]]);
    }

    public function detail($id)
    {
        $detail = Villa::where('id', $id)->first();//tampilkan data dari tabel villa yang id nya = $id
        return view('admin.detail', ['detail'=>$detail]);
    }
}
