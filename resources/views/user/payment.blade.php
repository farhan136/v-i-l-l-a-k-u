@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'VILLAKU') <!-- untuk section yang bernama title, ganti dengan villaku -->
@section('isi')
@include('layout.navbar')
<!-- Container -->
<div class="container">
    <!-- Main -->
    <section class="form-input">
        <div class="row mt-4">
            <div class="col text-center">
                <h1>Payment</h1>
            </div>
        </div>
        <form action="{{url('bayar', $payment->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center mt-5">
                <div class="col-5 py-4">

                    <h5>Transfer Pembayaran : <br></h5>

                    <label>Total Harga</label>
                    <div class="input-group mb-2">
                        <input type="text" placeholder="Please type here.." value="Rp. {{$payment->total_harga}}" disabled>
                    </div>
                    
                    <input type="hidden" name="total" value="{{$payment->total_harga*1.15}}">
                    <div class="section-left col-md-6">
                        <img src="{{asset('asset/elements/iconvilla-02.png')}}" alt="cover-login" width="200px">
                    </div>
                </div>
                <div class="col-5 py-4">
                    <div class="input-text pl-5">
                        <label for="bukti-transfer">Upload Bukti Transfer</label>
                        <div class="input-group mb-2">
                            <input type="file" name="upload_bukti" class="form-control @error('upload_bukti') is-invalid @enderror">
                            @error('upload_bukti')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="asal-bank">Asal Bank</label>
                        <div class="input-group mb-2">
                            <select name="asal_bank">
                                <option value="BCA" selected>BCA</option>
                                <option value="BNI">BNI</option>
                                <option value="Mandiri">Mandiri</option>
                                <option value="Bank DKI">Bank DKI</option>
                                <option value="BRI">BRI</option>
                            </select>
                        </div>
                        <label>Nomor HP</label>
                        <div class="input-group mb-2">
                            <input type="number" name="no_pengirim" class="form-control @error('no_pengirim') is-invalid @enderror" placeholder="Please type here..">
                            @error('no_pengirim')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="nama-pengirim">Nama Pengirim</label>
                        <div class="input-group">
                            <input type="text" name="nama_pengirim" class="form-control" placeholder="Please type here.." value="{{$payment->nama_pengirim}}" readonly>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4 mb-4">
                <div class="col-5 text-right mr-5">
                    @include('user.modalwarningpayment')
                </div>
                <div class="col-5 text-left">
                    <button type="submit"  name="pembayaranVilla" class="btn tombol" >Checkout</button>
                </div>
            </div>
        </form>
    </div>

</form>
</section>
<!-- Akhir Main -->
</div>
<!-- Akhir Container -->
@endsection