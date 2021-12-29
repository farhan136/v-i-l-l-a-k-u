<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pemesanan; 
use App\Models\Payment;
use App\Models\Villa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function store(Request $request)
    {
        $payment = new Payment;
        $payment->villa_id = $request->villa_id;
        $payment->user_id = Auth::user()->id;
        $payment->nama_pengirim = Auth::user()->name;
        $payment->mulai = $request->mulai;
        $payment->selesai = $request->selesai;
        $payment->malam = $request->malam;
        $payment->total_harga = $request->total_harga;
        $payment->created_at = Carbon::now('+7:00'); //+7:00 adalah gmt nya
        $payment->updated_at = Carbon::now('+7:00');

        $payment->save();
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
        return redirect('user-booking');
    }

    
    
}
