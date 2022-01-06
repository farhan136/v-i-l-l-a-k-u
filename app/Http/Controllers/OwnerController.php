<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class OwnerController extends Controller
{
    public function registrasi(Request $request)
    {
    	$validated = $request->validate([
    		'foto' => 'required|mimes:jpg,bmp,png',
    		'nama' => 'required',
    		'email' => 'required|email|unique:owners',
    		'pekerjaan' => 'required',
    		'password' => 'required',
    		'password2' => 'required',
    	]);

    	if($request->password === $request->password2)
    	{
    		$foto = $request->file('foto');

            $nama_foto = $foto->getClientOriginalName();

            $tujuan_upload = 'owner';

            $foto->move($tujuan_upload,$nama_foto);

    		$owner = new Owner();
	    	$owner->nama = $request->nama;
	    	$owner->email = $request->email;
	    	$owner->pekerjaan = $request->pekerjaan;
	    	$owner->password = bcrypt($request->password);
	    	$owner->foto = 'owner/'.$nama_foto;
	    	$owner->save();		
    	}
    }
}
