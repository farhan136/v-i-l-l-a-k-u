@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'Booking Information') <!-- untuk section yang bernama title, ganti dengan villaku -->
@section('isi')
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
                <img src="/{{$pesanan->villa->foto_utama}}" alt="" class="img-cover">
            </div>
            <div class="row justify-content-center ">
                <div class="col-2 pl-5">
                    <h5 class="text-dark"><span>{{$pesanan->villa->villa}}</span></h5>
                    <p><span>{{$pesanan->kategori}}</span><span>Jawa Barat</span></p>
                </div>
                <div class="col-3 text-right pr-5 mt-n3">
                    <p class="text-secondary"><p>Pembayaran senilai <span>Rp. <?php echo number_format($pesanan->total_harga); ?></span> belum termasuk PPN 15%</p>
                </div>
            </div>

            <div class="row justify-content-center mt-4 mb-4">
                <div class="col-5 text-right mr-5">
                    <form action="/properties/{{$pesanan->id}}" method="POST">
                        @csrf
                        <button type="submit" name="hapusPemesanan" class="btn tombol">Kembali</button>
                    </form>
                </div>
                <div class="col-5 text-left">
                    <form action="/booking/{{$pesanan->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn tombol">Lanjutkan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Main -->
@endsection
