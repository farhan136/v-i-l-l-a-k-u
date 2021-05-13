<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PembayaransController extends Controller
{
    public function upload(Request $request){
        return view('user.payment');
    }
    public function proses_upload(Request $request){
        if(isset($_POST['pembayaranVilla'])){    
        
        $this->validate($request, [
            'upload_bukti' => 'required',
            'asal_bank' => 'required',
            'no_pengirim'=> 'required',
            'nama_pengirim'=> 'required'
        ]); 
        
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('upload_bukti'); 


        // nama file
        $nama = $file->getClientOriginalName();
        echo 'File Name: '.$nama;
        echo '<br>';
        
        // ekstensi file
        echo 'File Extension: '.$file->Extension();
        echo '<br>';
 
        // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
 
        // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';
 
        // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();  
        
        // isi dengan nama folder tempat kemana file diupload        
        $file->storeAs('public', $nama); //$nama adalah nama foto di folder penyimpanan

        $payment = new Payment;
        $payment->upload_bukti = $nama;
        $payment->asal_bank = $request->asal_bank;
        $payment->nama_pengirim = $request->nama_pengirim;
        $payment->no_pengirim = $request->no_pengirim;
        $payment->pemesanan_id = $request->pemesanan_id;
        $payment->save();

        // //upload ke db
        // Payment::create($request->all()); //all diambil dari fillable di model

        return redirect('/');
        }
    }
}
