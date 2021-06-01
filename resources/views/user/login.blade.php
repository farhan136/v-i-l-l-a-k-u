@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'Login User')
@section('isi')
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
                            	Registrasi User
                            </div>
                            
                            <form action="loginuser" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="username" name="email" class="form-control" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="form-group form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                @if(session('Message'))
                                	{{session('Message')}}
                                @endif
                                <button type="submit" name="login" class="btn">Sign In</button>
                                <a  name="daftar" class="btn" href="/daftaruser">Register</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection 