<?php
namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Payment;
use App\Models\Villa;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class PembayaransController extends Controller
{ 
    public function proses_upload(Request $request, $id){

        $validated = $request->validate([
            'upload_bukti' => 'required',
            'asal_bank' => 'required',
            'nama_pengirim' => 'required',
            'no_pengirim' => 'required|max:12',
        ]);

        $payment = Payment::find($id);

        if($request->has('upload_bukti')){
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('upload_bukti'); 

            $nama = $file->store('public/bukti');

        }
        $payment->payment_status = 'pending';
        $payment->upload_bukti = $nama;
        $payment->asal_bank = $request->asal_bank;
        $payment->no_pengirim = $request->no_pengirim;
        $payment->save();

        return view('user.sukses');

    }

    public function cetak_pdf() 
    {
        $payment = Payment::all();
        $pdf = PDF::loadview('user.bukti_pdf',['payment'=>$payment->last()]);
        return $pdf->stream();

    }

    public function transaksi(){
        $transaksi = Payment::all();
        return view('admin.pemesanan', ['transaksi'=>$transaksi]);
    }

    public function detailtransaksi($id)
    {
        $det_pay = Payment::find($id);
        return view('admin.pemesanan_detail', ['payment'=>$det_pay]);
    }

    public function riwayat(Request $request)
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

    public function ubahStatus(Request $request, $id)
    {
        $payment = Payment::find($id);

        $payment->payment_status = $request->status;

        $payment->Save();

        return redirect()->back()->with('status', 'Pemesanan berhasil diubah');
    }

    public function lanjut($id)
    {
        $payment = Payment::find($id);

        return view('user.payment', ['payment'=>$payment]);
    }

    public function cancel($id)
    {

        $payment = Payment::find($id);
        
        $payment->payment_status = "cancelled";
        
        $payment->Save();
        
        return redirect()->back()->with('status', 'Pemesanan berhasil dibatalkan');
    }

}
