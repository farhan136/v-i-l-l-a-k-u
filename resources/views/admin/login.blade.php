@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'Login Admin')
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
                                Login Admin
                            </div>
                            
                            <form action="{{url('login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Email</label>
                                    <input type="username" name="email" class="form-control @error('title') is-invalid @enderror" id="username">
                                    @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control @error('title') is-invalid @enderror" id="password">
                                    @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if(session('Message'))
                                    {{session('Message')}}
                                @endif
                                <button type="submit" name="login" class="btn">Sign In</button>
                                <a  name="daftar" class="btn" href="/daftaruser">Register</a>
                                <br><br>
                                <a  name="daftar" class="btn" href="/">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection 
