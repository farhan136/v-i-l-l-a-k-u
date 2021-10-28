<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 'tbl_pemesanan';
    protected $fillable=['villa_id','user_id','mulai','selesai','malam','total_harga'];
    
    
    public function villa()
    {
    	return $this->belongsTo(Villa::class); 
    }

    public function user()
    {
    	return $this->belongsTo(User::class); 
    }
}
