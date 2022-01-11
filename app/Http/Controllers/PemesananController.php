<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pemesanan; 
use App\Models\Payment;
use App\Models\Villa;
use Carbon\Carbon;
use Cookie;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function store(Request $request, $id)
    {
        $pesanan = Pemesanan::find($id);

        //save ke tabel payment
        $payment = new Payment;
        $payment->villa_id = $pesanan->villa_id;
        $payment->user_id = Auth::user()->id;
        $payment->nama_pengirim = Auth::user()->name;
        $payment->mulai = $pesanan->mulai;
        $payment->selesai = $pesanan->selesai;
        $payment->malam = $pesanan->malam;
        $payment->total_harga = $pesanan->total_harga;
        $payment->created_at = Carbon::now('+7:00'); //+7:00 adalah gmt nya
        $payment->updated_at = Carbon::now('+7:00');
        $payment->payment_status = "unpaid";
        $payment->save();

        if($pesanan == null){
            return redirect('/');            
        }

        $pesanan->delete();

        return view('user.payment', ['payment'=>$payment]);
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
        
        //save ke tabel pemesanan
        $pesanan = new Pemesanan;
        $pesanan->villa_id = $villa->id;
        $pesanan->mulai = $ori;
        $pesanan->selesai = $tar;
        $pesanan->malam = $malam;
        $pesanan->total_harga = $total;
        $pesanan->save();

        $pesananBaru = Pemesanan::orderBy('id', 'desc')->first();
        return view('user.booking-informations', ['pesanan'=> $pesananBaru]);
    }

    
    
}
