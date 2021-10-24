<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'tbl_pembayaran';
    protected $fillable=['pemesanan_id','user_id','nama_pengirim','no_pengirim','mulai','selesai','malam','metode_bayar','status','url', 'villa_id'];
    
    public function pemesanan()
	{
	    return $this->belongsTo(Pemesanan::class, 'pemesanan_id');
	}

	public function villa()
    {
    	return $this->belongsTo(Villa::class); 
    }

}
