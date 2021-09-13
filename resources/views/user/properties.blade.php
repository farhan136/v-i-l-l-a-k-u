@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'Detail Villa') <!-- untuk section yang bernama title, ganti dengan villaku -->
@section('isi')

<!-- Container -->
<div class="container">
    <!-- Hedaer -->
    <header class="header">
        <h2 class="text-center">{{$villa->villa}}</h2>
        <h4 class="text-center text-secondary mt-n3">
            <span>{{$villa->villa}},</span>
            <span>Jawa Barat</span>
        </h4>
        <div class="row">
            <div class="col-7 p-3">
                <img class="img-cover-main" src="/{{$villa->foto_utama}}" width="628px" height="450px">
            </div>
            <div id="dom-target" style="display: none;">
                <?php
                $tanggalTerpesan = $tanggalTerpesan; // Again, do some operation, get the output.

                ?>
            </div>
            <div class="col-5 p-3">
                <div class="border p-2">
                    <h5 class = "shadow-sm p-3 mb-2 bg-white rounded text-center">Tentang Villa</h5>
                    <div class="overflow-auto mb-3">
                        <p class="text-justify pr-2">{{$villa->deskripsi}}</p>
                    </div>
                    <h5>Lokasi</h5>
                    <p>
                        <span>{{$villa->alamat}},</span>
                        <span>{{$villa->kategori}}, Jawa Barat</span>
                    </p>
                    <a href="#maps">
                        <button type="button" class="btn btn-block">Cek Lokasi</button>
                    </a>
                </div>
            </div>
            <div class="col-3 mb-5">
                <img class="img-cover" src="/{{$villa->foto_indoor}}" width="260px" height="415px">
            </div>
            <div class="col-4 mb-5">
                <img class="img-cover" src="/{{$villa->foto_outdoor}}" width="352px" height="415px">
            </div>
            <div class="col-5 mb-5">
                <div class="booking border p-2">
                    <h5 class="shadow-sm p-3 mb-2 bg-white rounded text-center">Mulai Booking</h5>
                    <div class="input-number">
                        <div class="input-label">
                            <h3>
                                <span id="harga">{{$villa->harga}}</span>
                                <span class="text-muted">per malam</span>
                            </h3>
                        </div>
                        <form action="/sesi/{{$villa->id}}" method="POST">
                            @method('get')
                            @csrf
                            <div class="date-title">

                                <h5 class="mt-3" id="pT">Pilih tanggal</h5>
                                <label for="mulai">Mulai</label>
                                <input type="text" id="mulai" name="mulai"  class="form-control @error('mulai') is-invalid @enderror" autocomplete="off">
                                @error('mulai')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <label for="selesai">Selesai</label>
                                <input type="text" id="selesai" name="selesai" class="form-control @error('selesai') is-invalid @enderror" autocomplete="off">
                                @error('selesai')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                                <h5 class="mt-2">Jumlah Malam</h5>
                                <input type="hidden" value="{{$villa->id}}" name="villa_id">
                                <div class="input-group">

                                    <input readonly data-id="villa" class="qty_input form-control rounded-0 text-center" value="1" name="kamar" id="malam">
                                    
                                </div>

                                <p>Anda akan membayar total senilai <span class="total-price" id="total_harga">Rp. <?php echo number_format($villa->harga); ?></span></p>
                                <input type="hidden" value="{{$villa->harga}}" name="total_harga">
                                <button type="submit" class="btn btn-block" name="booking">Booking!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Akhir Header -->

    <!-- Maps -->
    <div class="maps" id="maps">
        @if($villa->map != null)
        <h3 class="text-center pb-3">Lokasi</h3>
            <div class="row border p-3">
            <iframe src="{{$villa->map}}" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        @else
            <h3 class="text-center pb-3">Mohon maaf, map tidak tersedia</h3>
        @endif
    </div>
    <div class="info-maps">
        <div class="row ml-5">
            <div class="col-1 ml-5 mr-1">
                <img src="{{ asset('/asset/elements/iconvilla-03.png') }}" alt="logo-maps" width="90px">
            </div>
            <div class="col-4 mt-1">
                <h6>{{$villa->alamat}}</h6>
                <h6><span>{{$villa->kategori}}, Jawa Barat</span></h6>
            </div>
            <div class="col-1 mt-n1 ml-5">
                <img src="{{ asset('/asset/elements/iconvilla-05.png') }}" alt="logo-maps" width="90px">
            </div>
            <div class="col-3">
                <h6>{{$profil->instagram}}</h6>
                <h6>{{$profil->wa}}</h6>
                <h6>{{$profil->alamat}}</h6>
            </div>
        </div>
    </div>
    <!-- Akhir Maps -->
</div>
<!-- Akhir Container -->

@include('layout.footer')
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/index.js"></script> 
@endsection