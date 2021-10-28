<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Notification;
use App\Models\Payment;

class APIMidtransController extends Controller
{
    public function callback(Request $request)
    {
    	//Set konfigurasi Midtrans
    	\Midtrans\Config::$serverKey = 'SB-Mid-server-2dxzfgFWvrniqU1v_q4-tRu6';
      	\Midtrans\Config::$isProduction = false;
      	\Midtrans\Config::$isSanitized = true;
      	\Midtrans\Config::$is3ds = true;

    	//Buat instance midtrans notification
      	$notification = new Notification();

    	//Assign ke variable untuk memudahkan koding
    	$status = $notification->transaction_status;
    	$type = $notification->payment_type;
    	$fraud = $notification->fraud->status;
    	$order_id = $notification->order_id;

    	//get transaction id
    	$order = explode('-', $order_id);

    	//cari transaksi berdasarkan id
    	$payment = Payment::findOrFail($order[1]);

    	//handle notofication status midtrans
    	if ($status == 'capture') {
    		if($fraud == 'challenge'){
    			$payment->status = 'PENDING';
    		}else{
    			$payment->status = 'SUCCESS';
    		}
    	}
    	elseif ($status == 'settlement') {
    		$payment->status = 'SUCCESS';
    	}elseif ($status == 'pending') {
    		$payment->status = 'PENDING';
    	}elseif ($status == 'deny') {
    		$payment->status = 'PENDING';
    	}elseif ($status == 'expire') {
    		$payment->status = 'CANCELLED';
    	}elseif ($status == 'cancel') {
    		$payment->status = 'CANCELLED';
    	}

    	//simpan transaksi
    	$transaction->save();

    	//return response untuk midtrans
    	return response()->json([
    		'meta' => [
    			'code'=>200,
    			'message'=>'MIDTRANS NOTIFICATION SUCCESS!'
    		]
    	]);
    }
}
