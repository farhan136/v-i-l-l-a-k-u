<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pemesanan; 
use App\Models\Payment;
use App\Models\Villa;
use Carbon\Carbon;

class PemesananController extends Controller
{
    public function store(Request $request)
    {
        $pemesanan = new Pemesanan;
        $pemesanan->villa_id = $request->villa_id;
        $pemesanan->mulai = $request->mulai;
        $pemesanan->selesai = $request->selesai;
        $pemesanan->malam = $request->malam;
        $pemesanan->total_harga = $request->total_harga;

        $pemesanan->save();
        return redirect('/viewPayment');
    }

    public function sesi(Request $request, $id)
    {
        $validated = $request->validate([
            'mulai' => 'required',
            'selesai' => 'required',
        ]);
        $ori = new Carbon($request->mulai);
        $tar = new Carbon($request->selesai);
        $malam = $tar->diffInDays($ori); //menghitung selisih hari
        $total = $request->total_harga * $malam;
        $villa = Villa::find($id);
        session(['mulai' => $request->mulai, 'selesai' => $request->selesai, 'malam'=>$malam, 'total_harga'=>$total, 'id'=>$id, 'foto'=>$villa->foto_utama, 'nama_villa'=>$villa->villa, 'kategori'=>$villa->kategori]);
        return view('user.booking-informations');
    }

    public function detail($id)
    {
        $det_pes = Pemesanan::where('id', $id)->first();
        $det_pay = Payment::where('pemesanan_id', $id)->first();
        return view('admin.pemesanan_detail', ['pesanan'=>$det_pes, 'payment'=>$det_pay]);
    }
    
}
