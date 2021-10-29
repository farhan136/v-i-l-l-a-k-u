<?php
namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Payment;
use App\Models\Villa;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;


class PembayaransController extends Controller
{ 
    public function proses_upload(Request $request){
        $pesanan = Pemesanan::find($request->pemesanan_id);

        $validated = $request->validate([
          'upload_bukti' => 'required',
          'asal_bank' => 'required',
          'nama_pengirim' => 'required',
          'no_pengirim' => 'required',
          'pemesanan_id' => 'required',
        ]);
        
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('upload_bukti'); 

        // nama file
        $nama = $file->getClientOriginalName();

        Payment::create([
            'user_id' => Auth::user()->id,
            'villa_id' => $pesanan->villa_id,
            'payment_status' => 'pending',
            'mulai' => $pesanan->mulai,
            'selesai' => $pesanan->selesai,
            'malam' => $pesanan->malam,
            'upload_bukti' => $nama,
            'asal_bank' => $request->asal_bank,
            'nama_pengirim' => $request->nama_pengirim,
            'no_pengirim' => $request->no_pengirim,
            'total_harga'=>$request->total
        ]);

        //hapus data dari pemesanan
        $pesanan->delete();

        return view('user.sukses');

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
