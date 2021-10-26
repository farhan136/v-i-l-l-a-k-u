<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villa extends Model
{
    use HasFactory;
    protected $table = 'tbl_villa';
    protected $fillable=['villa','foto_utama','foto_indoor','foto_outdoor','alamat','kategori','stok','map','deskripsi','harga'];
    

    public function pesanan()
    {
    	return $this->hasMany(Pemesanan::class); 
    }

}
