@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'VILLAKU') <!-- untuk section yang bernama title, ganti dengan villaku -->
@section('isi')
@include('layout.navbar')
    <!-- Main -->
    <section class="form-input">
        <div class="row mt-4">
            <div class="col text-center">
                <h1>Informasi Penyewaan</h1>
                <h4>Harap di cek kembali dengan benar!</h4>
            </div>
        </div>
 
            <div class="booking-information">
                <div class="row mt-4 mb-3">
                    <img src="/{{$villa->foto_utama}}" alt="" class="img-cover">
                </div>
                <div class="row justify-content-center ">
                    <div class="col-2 pl-5">
                        <h5 class="text-dark"><span>{{$villa->villa}}</span></h5>
                        <p><span>{{$villa->provinsi}}</span>, <span>Indonesia</span></p>
                    </div>
                    <div class="col-3 text-right pr-5 mt-n3">
                        <p class="text-secondary"><p>Pembayaran senilai <span>{{$villa->harga}}$</span> belum termasuk PPN </p>
                    </div>
                </div>

                <div class="row justify-content-center mt-4 mb-4">
                    <div class="col-5 text-right mr-5">
                        <form action="/" method="POST">
                            <button type="submit" name="hapusPemesanan" class="btn tombol">Kembali</button>
                        </form>
                    </div>
                    <div class="col-5 text-left">
                        <a href="/payment/{{$villa->id}}">
                            <button type="submit" class="btn tombol">Lanjutkan</button>
                        </a>
                    </div>
                </div>
            </div>
    </section>
    <!-- Akhir Main -->
@endsection