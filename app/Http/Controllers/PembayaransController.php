<?php
namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Payment;
use App\Models\Villa;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Midtrans\Config;
use Exception;

class PembayaransController extends Controller
{ 
  public function proses_upload(Request $request)
  {
      //validasi
      $validated = $request->validate([
        'nama_pengirim' => 'required',
        'no_pengirim' => 'required',
      ]);

      //get data villa dan pemesanan
      $pemesanan = Pemesanan::find($request->id_pemesanan);
      $villa = Villa::find($pemesanan->villa_id);

      //create payment
      $payment = Payment::create([
          'user_id' => Auth::user()->id,
          'pemesanan_id'=> $pemesanan->id,
          'nama_pengirim'=>$request->nama_pengirim,
          'no_pengirim'=>$request->no_pengirim,
          'mulai'=>$pemesanan->mulai,
          'selesai'=>$pemesanan->selesai,
          'malam'=>$pemesanan->malam,
          'metode_bayar'=> 'MIDTRANS',
          'status'=>'PENDING',
          'total_harga'=>$request->total_harga
      ]);
      
      // Konfigurasi midtrans
      \Midtrans\Config::$serverKey = 'SB-Mid-server-2dxzfgFWvrniqU1v_q4-tRu6';
      \Midtrans\Config::$isProduction = false;
      \Midtrans\Config::$isSanitized = true;
      \Midtrans\Config::$is3ds = true;

      //setup variabel midtrans
      $midtrans = [
        "transaction_details"=> 
        [
          "order_id"=> "ORDER-". $request->id_pemesanan, 
          "gross_amount"=> (int) $request->total
        ],
        // "item_details"=> 
        // [
        //   "id"=> $villa->id,
        //   "price"=> $villa->harga,
        //   "quantity"=> $pemesanan->malam,
        //   "name"=> $villa->villa,
        //   "brand"=> "Villaku",
        //   "category"=> $villa->kategori,
        //   "merchant_name"=> $villa->villa,
        // ],
        'enabled_payments'=>['gopay', 'bank_transfer'],
        'vtweb'=>[]
      ];
      
      //delete pemesanan
      $pemesanan->delete();
      //payment process
      
      try {
      $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
      
      // Get Snap Payment Page URL
      $payment->url = $paymentUrl;
      $payment->save();
                
      // Redirect ke halaman midtrans
      return redirect($paymentUrl);

      }catch (Exception $e) {
        echo $e->getMessage();
      }

    }

    public function cetak_pdf() 
    {
      $pesanan = Pemesanan::all();
      $payment = Payment::all(); 
      $pdf = PDF::loadview('user.bukti_pdf',['pesanan'=>$pesanan->last(), 'payment'=>$payment->last()]);
      return $pdf->stream();
    }

    public function tes(){
      $pesanan = Pemesanan::all();
      return view('user.payment', ['pesanan'=>$pesanan->last()]);
    }
  }
