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
        
        $payment = Payment::find($request->id_payment);
        
        $validated = $request->validate([
          'upload_bukti' => 'required',
          'asal_bank' => 'required',
          'nama_pengirim' => 'required',
          'no_pengirim' => 'required|max:12',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('upload_bukti'); 

        // nama file
        $nama = $file->getClientOriginalName();

        if ($file == null) {
            $status = "unpaid";
            $nama = null;
            $asal_bank = null;
        }else{
            $status = "pending";
            $asal_bank = $request->asal_bank;
        }

        $payment->update([
            'payment_status' => $status,
            'upload_bukti' => $nama,
            'asal_bank' => $asal_bank,
            'no_pengirim' => $request->no_pengirim,
        ]);
        

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
      $payment = Payment::all();
      return view('user.payment', ['payment'=>$payment->last()]);
    }

    public function transaksi(){
        $transaksi = Payment::all();
        return view('admin.pemesanan', ['transaksi'=>$transaksi]);
    }

    public function detailtransaksi($id)
    {
        // $det_pes = Pemesanan::where('id', $id)->first();
        $det_pay = Payment::find($id);
        return view('admin.pemesanan_detail', ['payment'=>$det_pay]);
    }

    public function riwayat()
    {
        $id = Auth::user()->id;
        
        $riwayat_payment = Payment::where('user_id', $id)->get();
        
        return view('user.riwayat', ['payment'=>$riwayat_payment]);    
        
    }

    public function testi()
    {
        $id = Auth::user()->id;
        $cekTransaksi = Payment::where('user_id', $id)
            ->where('payment_status',  '!='  ,'unpaid')
            ->get();
        if ($cekTransaksi->isNotEmpty()) {
            return view('user.tambahtesti');
        }else{
            return redirect('/')->with('message', 'Anda belum login');
        }
    }
}
