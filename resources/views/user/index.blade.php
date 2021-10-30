@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'VILLAKU') <!-- untuk yield yang bernama title, ganti dengan villaku -->
@section('isi')

@include('layout.header')

<section class="main">
    <div class="card-body">
        
        <h3>Paling Laris</h3>
        <div class="row owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
                <div class="owl-stage">
                    <?php 
                        use App\Models\Payment;
                    ?> 
                    @for($i = 0; $i <= 3; $i++)
                    <?php  
                    $y = $yes[$i];
                    $laris = Payment::where('villa_id', $y)->get();
                    ?>
                    @foreach($laris->unique('villa_id') as $laris)
                    <figure class="owl-item figure">
                        <div class="figure-img text-up">
                            <img src="{{ $laris->villa->foto_utama }}" class="img-fluid img-cover">
                            <a href="/properties/{{$laris->villa->id}}" class="d-flex justify-content-center mb-n2">
                                <img src="asset/elements/visibility.png" class="align-self-center">
                            </a>
                            <h5>{{$laris->villa->villa}}</h5>
                            <h6 class="pl-2">
                                <span>{{$laris->villa->kategori}}</span>,
                                <span>Jawa Barat</span>
                            </h6>
                        </div>
                        <div class="tag">
                            <span>Rp. <?php echo number_format($laris->villa->harga); ?></span>
                            <span>per malam</span>
                        </div>
                    </figure>
                    @endforeach
                    @endfor
                </div>
            </div>
            
        </div>

        <!-- Bukit Danau -->
        
        <h3>Bukit Danau</h3>
        <div class="row owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
                <div class="owl-stage">    
                    @foreach($bd as $villa)
                    <figure class="owl-item figure">
                        <div class="figure-img text-up">
                            <img src="{{ $villa->foto_utama }}" class="img-fluid img-cover">
                            <a href="/properties/{{$villa->id}}" class="d-flex justify-content-center mb-n2">
                                <img src="asset/elements/visibility.png" class="align-self-center">
                            </a>
                            <h5>{{$villa->villa}}</h5>
                            <h6 class="pl-2">
                                <span>{{$villa->kategori}}</span>,
                                <span>Jawa Barat</span>
                            </h6>
                        </div>
                        <div class="tag">
                            <span>Rp. <?php echo number_format($villa->harga); ?></span>
                            <span>per malam</span>
                        </div>
                    </figure>
                    @endforeach
                </div>
            </div>
        </div>
        

        <!-- Cipanas -->
        
        <h3>Cipanas</h3>
        <div class="row owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
                <div class="owl-stage">    
                    @foreach($ci as $villa)
                    <figure class="owl-item figure">
                        <div class="figure-img text-up">
                            <img src="{{ $villa->foto_utama }}" class="img-fluid img-cover">
                            <a href="/properties/{{$villa->id}}" class="d-flex justify-content-center mb-n2">
                                <img src="asset/elements/visibility.png" class="align-self-center">
                            </a>
                            <h5>{{$villa->villa}}</h5>
                            <h6 class="pl-2">
                                <span>{{$villa->kategori}}</span>,
                                <span>Jawa Barat</span>
                            </h6>
                        </div>
                        <div class="tag">
                            <span>Rp. <?php echo number_format($villa->harga); ?></span>
                            <span>per malam</span>
                        </div>
                    </figure>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Coolibah -->

        <h3>Coolibah</h3>
        <div class="row owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
                <div class="owl-stage">    
                    @foreach($co as $villa)
                    <figure class="owl-item figure">
                        <div class="figure-img text-up">
                            <img src="{{ $villa->foto_utama }}" class="img-fluid img-cover">
                            <a href="/properties/{{$villa->id}}" class="d-flex justify-content-center mb-n2">
                                <img src="asset/elements/visibility.png" class="align-self-center">
                            </a>
                            <h5>{{$villa->villa}}</h5>
                            <h6 class="pl-2">
                                <span>{{$villa->kategori}}</span>,
                                <span>Jawa Barat</span>
                            </h6>
                        </div>
                        <div class="tag">
                            <span>Rp. <?php echo number_format($villa->harga); ?></span>
                            <span>per malam</span>
                        </div>
                    </figure>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Kota Bunga -->

        <h3>Kota Bunga</h3>
        <div class="row owl-carousel owl-theme owl-loaded">
            <div class="owl-stage-outer">
                <div class="owl-stage">    
                    @foreach($kb as $villa)
                    <figure class="owl-item figure">
                        <div class="figure-img text-up">
                            <img src="{{ $villa->foto_utama }}" class="img-fluid img-cover">
                            <a href="/properties/{{$villa->id}}" class="d-flex justify-content-center mb-n2">
                                <img src="asset/elements/visibility.png" class="align-self-center">
                            </a>
                            <h5>{{$villa->villa}}</h5>
                            <h6 class="pl-2">
                                <span>{{$villa->kategori}}</span>,
                                <span>Jawa Barat</span>
                            </h6>
                        </div>
                        <div class="tag">
                            <span>Rp. <?php echo number_format($villa->harga); ?></span>
                            <span>per malam</span>
                        </div>
                    </figure>
                    @endforeach
                </div>
            </div>
        </div>


        <!-- Akhir Konten Gabungan Latar Belakang dan Mewah -->
    </section>
</div>

@include('user.testi')
@include('layout.footer')
@endsection  