@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'VILLAKU') <!-- untuk section yang bernama title, ganti dengan villaku -->
@section('isi')

@include('layout.header')

<section class="main">
    <div class="card-body">
        <div class="jawa">
            <h3>Paling Laris</h3>
            <div class="row owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">    
                        @foreach($laris as $laris)
                        <figure class="owl-item figure">
                            <div class="figure-img text-up">
                                <img src="{{ $laris->villa->foto_utama }}" class="img-fluid img-cover">
                                <a href="/properties/{{$laris->villa->id}}" class="d-flex justify-content-center mb-n2">
                                    <img src="asset/elements/visibility.png" class="align-self-center">
                                </a>
                                <h5>{{$laris->villa->villa}}</h5>
                                <h6 class="pl-2">
                                    <span>{{$laris->villa->provinsi}}</span>,
                                    <span>Indonesia</span>
                                </h6>
                            </div>
                            <div class="tag">
                                <span>{{$laris->villa->harga}}$</span>
                                <span>per malam</span>
                            </div>
                        </figure>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Pulau Jawa -->
        <div class="jawa">
            <h3>Pulau Jawa</h3>
            <div class="row owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">    
                        @foreach($jawa as $villa)
                        <figure class="owl-item figure">
                            <div class="figure-img text-up">
                                <img src="{{ $villa->foto_utama }}" class="img-fluid img-cover">
                                <a href="/properties/{{$villa->id}}" class="d-flex justify-content-center mb-n2">
                                    <img src="asset/elements/visibility.png" class="align-self-center">
                                </a>
                                <h5>{{$villa->villa}}</h5>
                                <h6 class="pl-2">
                                    <span>{{$villa->provinsi}}</span>,
                                    <span>Indonesia</span>
                                </h6>
                            </div>
                            <div class="tag">
                                <span>{{$villa->harga}}$</span>
                                <span>per malam</span>
                            </div>
                        </figure>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Pulau Bali -->
        <div class="bali">
            <h3>Pulau Bali</h3>
            <div class="row owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">    
                        @foreach($bali as $villa)
                        <figure class="owl-item figure">
                            <div class="figure-img text-up">
                                <img src="{{ $villa->foto_utama }}" class="img-fluid img-cover">
                                <a href="/properties/{{$villa->id}}" class="d-flex justify-content-center mb-n2">
                                    <img src="asset/elements/visibility.png" class="align-self-center">
                                </a>
                                <h5>{{$villa->villa}}</h5>
                                <h6 class="pl-2">
                                    <span>{{$villa->provinsi}}</span>,
                                    <span>Indonesia</span>
                                </h6>
                            </div>
                            <div class="tag">
                                <span>{{$villa->harga}}$</span>
                                <span>per malam</span>
                            </div>
                        </figure>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Pulau Kalimantan -->
        <div class="kalimantan">
            <h3>Pulau Kalimantan</h3>
            <div class="row owl-carousel owl-theme owl-loaded">
                <div class="owl-stage-outer">
                    <div class="owl-stage">    
                        @foreach($kalimantan as $villa)
                        <figure class="owl-item figure">
                            <div class="figure-img text-up">
                                <img src="{{ $villa->foto_utama }}" class="img-fluid img-cover">
                                <a href="/properties/{{$villa->id}}" class="d-flex justify-content-center mb-n2">
                                    <img src="asset/elements/visibility.png" class="align-self-center">
                                </a>
                                <h5>{{$villa->villa}}</h5>
                                <h6 class="pl-2">
                                    <span>{{$villa->provinsi}}</span>,
                                    <span>Indonesia</span>
                                </h6>
                            </div>
                            <div class="tag">
                                <span>{{$villa->harga}}$</span>
                                <span>per malam</span>
                            </div>
                        </figure>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Akhir Konten Gabungan Latar Belakang dan Mewah -->
    </section>
</div>

@include('user.testi')
@include('layout.footer')
@endsection  