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
    public function proses_upload(Request $request){

        $payment = new Payment;
        
        $validated = $request->validate([
          'upload_bukti' => 'required',
          'asal_bank' => 'required',
          'nama_pengirim' => 'required',
          'no_pengirim' => 'required|max:12',
      ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('upload_bukti'); 

        $nama = $file->store('public/bukti');

        if ($file == null) {
            $status = "unpaid";
            $nama = null;
            $asal_bank = null;
        }else{
            $status = "pending";
            $asal_bank = $request->asal_bank;
        }

        $payment->payment_status = $status;
        $payment->upload_bukti = $nama;
        $payment->asal_bank = $asal_bank;
        $payment->no_pengirim = $request->no_pengirim;
        $payment->nama_pengirim = Auth::user()->name;
        $payment->mulai = $request->cookie('mulai');
        $payment->selesai = $request->cookie('selesai');
        $payment->malam = $request->cookie('malam');
        $payment->total_harga = $request->cookie('total_harga');
        $payment->villa_id = $request->cookie('villa_id');
        $payment->user_id = $request->cookie('user_id');
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
        // $det_pes = Pemesanan::where('id', $id)->first();
        $det_pay = Payment::find($id);
        return view('admin.pemesanan_detail', ['payment'=>$det_pay]);
    }

    public function riwayat(Request $request)
    {
        if ($request->cookie('user_id')!=null) {
            $unpaid = array('payment_status' => 'unpaid',
                'mulai'=>$request->cookie('mulai'),
                'selesai'=>$request->cookie('selesai'),
                'malam'=>$request->cookie('malam'),
                'total_harga'=>$request->cookie('total_harga'),
                'villa_id'=>$request->cookie('villa_id'),
                'user_id'=>$request->cookie('user_id'),
                'asal_bank'=>null,
                'no_pengirim'=>null,
                'upload_bukti'=>null
            );
        }

        $id = Auth::user()->id;
        // $unpaid = null;
        $riwayat_payment = Payment::where('user_id', $id)->get()->toArray();
        $count = count($riwayat_payment); //mendapatkan nilai berapa jumlah array yang berhasil ditambahkan
        array_push($riwayat_payment, $unpaid);
        dd($riwayat_payment);
        
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

    public function tes()
    {
        return view('user.payment');
    }
}
