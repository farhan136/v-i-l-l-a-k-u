@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'Registrasi User')
@section('isi')
	<main class="login-container">
        <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h4>Registrasi User</h4>
                            </div>
                            
                            <form action="/daftaruser" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama">
                                    @error('nama')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan" class="col-form-label">Nama Pekerjaan</label>
                                    <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan">
                                    @error('pekerjaan')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password @error('password') is-invalid @enderror" class="form-control" id="password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password2">Konfirmasi Password</label>
                                    <input type="password" name="password2 @error('password2') is-invalid @enderror" class="form-control" id="password2">
                                    @error('password2')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="col-form-label">Foto</label>
                                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                                    @error('foto')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                </div>
                                <button type="submit" name="daftar" class="btn">Daftarkan</button>
                                <a class="btn" href="/loginuser">Login</a>
                            </form>
                        </div>
                    </div>
        </div>
    </main>

@endsection 
