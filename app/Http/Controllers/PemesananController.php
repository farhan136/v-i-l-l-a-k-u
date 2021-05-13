<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function create($id)
    {
        // $pemesanan = DB::table('tbl_pemesanan')->where('villa_id',$id)->get();
        // $villa = DB::table('tbl_villa')->where('id', $id)->get();
        // return view('user.booking-informations', ['villa'=>$villa[0]]);        
    }

    public function store(Request $request)
    {
        DB::table('tbl_pemesanan')->insert(
        ['villa_id'=>$request->villa_id,
        'mulai'=>$request->mulai,
        'selesai'=>$request->selesai,
        'malam'=>$request->malam,
        'total_harga'=>$request->total_harga
        ]);
        $villa = DB::table('tbl_villa')->where('id', $request->villa_id)->get();
        return view('user.booking-informations', ['villa'=>$villa[0]]);
    }

    public function show($id)
    {
        $pemesanan = DB::table('tbl_pemesanan')->where('villa_id',$id)->get();
        return view('user.payment', ['pemesanan'=>$pemesanan[0]]);
    }

    public function bayar($id)
    {
        echo "string";
    }

    public function detail($id)
    {
        $det_pes = Pemesanan::where('id', $id)->first();
        return view('admin.pemesanan_detail', ['pesanan'=>$det_pes]);
    }
    
}
