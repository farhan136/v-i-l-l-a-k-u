@extends('layout.main')
@section('judul','Daftar Admin')
@section('isi')
<?php session_start();?>

	<main class="login-container">
        <div class="container">
            <div class="row page-login align-items-center">
                <div class="section-left col-md-6">
                    <img src="{{asset('asset/cover-login.png')}}" alt="cover-login" width="400px">
                </div>
                <div class="section-right col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{asset('asset/logo1.png')}}" alt="logo-login" class="w-50 mb-4">
                            </div>
                            @if (session('Message')) 
                            <div class="alert alert-danger">
                                {{ session('Message') }}
                            </div>
                            @endif
                            <form action="{{url('/daftaradmin')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="username" name="username" class="form-control" id="username">
                                    @error('email') {{$message}} @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                    @error('nama') {{$message}} @enderror
                                </div>
                                
                                <div class="form-group"><label for="password">Password</label>
                                     <input type="password" name="password" class="form-control" id="password">
                                    @error('password') {{$message}} @enderror
                                </div>
                                <div class="form-group"><label for="password2">Konfirmasi Password</label>
                                     <input type="password" name="password2" class="form-control" id="password2">
                                    @error('password2') {{$message}} @enderror
                                </div>
                                <button type="submit" name="login" class="btn">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection