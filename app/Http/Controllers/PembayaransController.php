<?php
namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Payment;
use Illuminate\Http\Request;
use PDF;

class PembayaransController extends Controller
{ 
    public function proses_upload(Request $request){
        if(isset($_POST['pembayaranVilla'])){    
        
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

        // isi dengan nama folder tempat kemana file diupload        
        $file->move('image.bukti', $nama); //$nama adalah nama foto di folder penyimpanan

        $payment = new Payment;
        $payment->upload_bukti = $nama;
        $payment->asal_bank = $request->asal_bank;
        $payment->nama_pengirim = $request->nama_pengirim;
        $payment->no_pengirim = $request->no_pengirim;
        $payment->pemesanan_id = $request->pemesanan_id;
        $payment->save();

        return view('user.sukses');
        }
    }

    public function cetak_pdf() 
    {
        $pesanan = Pemesanan::all();
        $payment = Payment::all();
        // dd($pesanan->last());
        $pdf = PDF::loadview('user.bukti_pdf',['pesanan'=>$pesanan->last(), 'payment'=>$payment->last()]);
        // $pdf = PDF::loadHTML('<h1>Test</h1>');
        // $pdf = PDF::loadview('user.login');
        return $pdf->stream();
    }

    public function tes(){
        $pesanan = Pemesanan::all();
        return view('user.payment', ['pesanan'=>$pesanan->last()]);
    }
}
