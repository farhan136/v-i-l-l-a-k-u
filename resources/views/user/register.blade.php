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
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                </div>
                                <div class="form-group">
                                    <label for="pekerjaan" class="col-form-label">Nama Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="form-group">
                                    <label for="password2">Konfirmasi Password</label>
                                    <input type="password" name="password2" class="form-control" id="password2">
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="col-form-label">Foto</label>
                                    <input type="file" class="form-control" name="foto">
                                </div>
                                <button type="submit" name="daftar" class="btn">Daftarkan</button>
                                <a class="btn" href="/loginuser">Login</a>
                            </form>
                        </div>
                    </div>
        </div>
    </main>

@endsection 
