<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pemesanan;
use App\Models\Payment;

class PemesananController extends Controller
{
    public function store(Request $request)
    {
        $total = $request->total_harga * $request->malam;
        DB::table('tbl_pemesanan')->insert(
        ['villa_id'=>$request->villa_id,
        'mulai'=>$request->mulai,
        'selesai'=>$request->selesai,
        'malam'=>$request->malam,
        'total_harga'=>$total
        ]);
        $pesanan = Pemesanan::all();
        return view('user.booking-informations', ['pesanan'=>$pesanan->last()]);
    }

    public function show($id)
    {
        $pemesanan = Pemesanan::where('id', $id)->get();
        return view('user.payment', ['pemesanan'=>$pemesanan[0]]);
    }

    public function bayar($id)
    {
        echo "string";
    }

    public function detail($id)
    {
        $det_pes = Pemesanan::where('id', $id)->first();
        $det_pay = Payment::where('pemesanan_id', $id)->first();
        return view('admin.pemesanan_detail', ['pesanan'=>$det_pes, 'payment'=>$det_pay]);
    }
    
}
