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
    public function store(Request $request)
    {
        Cookie::queue('villa_id', $request->villa_id, 2880);
        Cookie::queue('user_id', Auth::user()->id, 2880);
        Cookie::queue('nama', Auth::user()->name, 2880);
        Cookie::queue('mulai', $request->mulai, 2880);
        Cookie::queue('selesai', $request->selesai, 2880);
        Cookie::queue('malam', $request->malam, 2880);
        Cookie::queue('total_harga', $request->total_harga, 2880);
        
        return view('user.payment');

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
