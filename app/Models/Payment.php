<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'tbl_pembayaran';
    protected $fillable=['upload_bukti','nama_pengirim','asal_bank','no_pengirim', 'user_id', 'villa_id', 'payment_status', 'mulai', 'selesai', 'malam', 'total_harga'];
    
}
