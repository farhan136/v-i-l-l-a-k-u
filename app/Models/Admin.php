<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory;
    protected $table = 'tbl_admin';

    protected $fillable=['nama','email','password'];

    protected $hidden = [
     'password', 'remember_token',
    ];

    // public function getAdminPassword()
    // {
    //  return $this->password;
    // }
}
