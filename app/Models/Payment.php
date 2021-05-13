<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'tbl_pembayaran';
    protected $fillable=['pemesanan_id','upload_bukti','nama_pengirim','asal_bank','no_pengirim'];
    
    public function pemesanan()
	{
	    return $this->belongsTo(Pemesanan::class, 'pemesanan_id');
	}
}
