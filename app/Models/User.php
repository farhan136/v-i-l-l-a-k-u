<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable=['name','email','password','foto','pekerjaan', 'roles'];
    
    public function testi()
    {
        return $this->hasOne(Testi::class);
    }
}
