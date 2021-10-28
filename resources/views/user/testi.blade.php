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
                        <img src="/image/user/{{$testi->user->photo}}" class="img-cover">
                        <figcaption class="figure-caption">
                            <h4>{{$testi->user->name}}</h4>
                            <div class="rating text-warning">
                                @for ($i = 1; $i <= $testi->bintang; $i++)
                                <span><i class="fas fa-star"></i></span>
                                @endfor
                            </div>
                            <h5>{{$testi->user->pekerjaan}}</h5>
                            <p>{{$testi->testimoni}}</p>
                        </figcaption>
                    </div>
                </div>
                @endforeach 
            </div>
    </section>
    <!-- Akhir Pendapat Mereka -->