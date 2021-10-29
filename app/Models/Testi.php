<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testi extends Model
{
    use HasFactory;
    protected $table = 'testi';
    protected $fillable=['user_id','testimoni','bintang'];
    

    public function user()
    {
    	return $this->belongsTo(User::class); 
    }
}
