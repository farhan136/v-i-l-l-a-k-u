@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'Tambah Testimoni') <!-- untuk section yang bernama title, ganti dengan villaku -->
@section('isi')
@include('layout.navbar')
<div class="modal-header">
    <h3 >Tambah Testimoni</h3>
</div>
<div class="modal-body">
    <div class="container-fluid">
        <form action="{{url('tambahtesti')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <h5>Seberapa Puas Kamu?</h5>
                        <input type="radio" id="sangat_tidak" name="bintang" value="1">
                        <label for="sangat_tidak">Sangat Tidak Puas</label><br>
                        <input type="radio" id="tidak" name="bintang" value="2">
                        <label for="tidak">Tidak Puas</label><br>
                        <input type="radio" id="cukup" name="bintang" value="3">
                        <label for="cukup">Cukup Nyaman</label><br>
                        <input type="radio" id="puas" name="bintang" value="4">
                        <label for="puas">Puas</label><br>
                        <input type="radio" id="sangat_puas" name="bintang" value="5">
                        <label for="sangat_puas">Sangat Puas</label><br>

                        <h5 for="pendapat" class="col-form-label">Pendapat Kamu?</h5>
                        <textarea type="text" class="form-control @error('pendapat') is-invalid @enderror" name="pendapat" rows="10" autofocus></textarea>
                        @error('pendapat')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="float-right">
                        <button type="submit" name="tambahtesti" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="{{ asset('/js/bintang.js') }}"></script>
@endsection