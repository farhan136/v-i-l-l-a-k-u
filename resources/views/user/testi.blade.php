    <!-- Pendapat Mereka -->
    <section class="opinion p-5">
        <div class="row mb-3">
                <div class="col text-center">
                    <h2>Pendapat Mereka?</h2>
                </div>
            </div>
            <div class="row">
                @foreach($testi as $testi)
                <div class="col-8 col-lg-4 pb-5">
                    <div class="figure text-center">
                        <img src="/image/user/{{$testi->user->foto}}" class="img-cover">
                        <figcaption class="figure-caption">
                            <div class="rating text-warning">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <h4>{{$testi->user->name}}</h4>
                            <h5>{{$testi->user->pekerjaan}}</h5>
                            <p>{{$testi->testimoni}}</p>
                        </figcaption>
                    </div>
                </div>
                @endforeach 
            </div>
    </section>
    <!-- Akhir Pendapat Mereka -->