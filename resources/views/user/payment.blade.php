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
        <form action="/bayar" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center mt-5">
                <div class="col-5 border-right text-dark py-5">
                    <h5>Transfer Pembayaran : <br> <br>
                        Tax : 15% <br>
                        Total : <span>Rp. <?php echo number_format($pesanan->total_harga*1.15); ?></span> <br>
                    </h5>
                    <div class="mt-4">
                        <img src="/asset/elements/bca.png" alt="logo-bca" width="100px" class="float-left mr-5">
                        <dl>
                            <dd>Bank Central Asia</dd>
                            <dd>52312412</dd>
                            <dd>Farhan Anshari</dd>
                        </dl>
                    </div>
                    <div class="mt-4"> 
                        <img src="/asset/elements/mandiri.png" alt="logo-bca" width="123px" height="80px" class="float-left mr-4">
                        <dl>
                            <dd>Bank Mandiri</dd>
                            <dd>67723727</dd>
                            <dd>Farhan Anshari</dd>
                        </dl>
                    </div>
                </div>
                <div class="col-5 py-4">
                    <div class="input-text pl-5">
                        <input type="hidden" name="pemesanan_id" value="{{$pesanan->id}}">
                        <input type="hidden" name="total" value="{{$pesanan->total_harga*1.15}}">
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
                            <input type="text" name="no_pengirim" class="form-control @error('no_pengirim') is-invalid @enderror" placeholder="Please type here..">
                            @error('no_pengirim')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <label for="nama-pengirim">Nama Pengirim</label>
                        <div class="input-group">
                            <input type="text" name="nama_pengirim" class="form-control" placeholder="Please type here.." value="{{Auth::user()->name}}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4 mb-4">
                <div class="col-5 text-right mr-5">
                    <button type="submit" name="hapusPemesanan" class="btn tombol">Cancel</button>
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