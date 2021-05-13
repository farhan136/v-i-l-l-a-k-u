<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Villa;

class VillasController extends Controller
{

    public function index()
    {
        $jawa = DB::table('tbl_villa')->where('pulau', "Jawa")->get();
        $kalimantan = DB::table('tbl_villa')->where('pulau', "Kalimantan")->get();
        $bali = DB::table('tbl_villa')->where('pulau', "Bali")->get();

        return view('user.index', ['jawa' => $jawa, 'kalimantan' => $kalimantan, 'bali' => $bali]);
    }

    public function create($id)
    {

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
            // echo "string";
            // die;

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

    public function show($id)
    {
        $villa = DB::table('tbl_villa')->where('id', $id)->get();
        return view('user.properties', ['villa'=>$villa[0]]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function detail($id)
    {
        $detail = Villa::where('id', $id)->first();//tampilkan data dari tabel villa yang id nya = $id
        return view('admin.detail', ['detail'=>$detail]);
    }
}
