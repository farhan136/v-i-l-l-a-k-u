@extends('admin.index')<!-- untuk mengambil template main -->
@section('judul', 'Detail Pemesanan')
@section('isi')
<?php dd($pesanan['mulai']); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4 class="font-weight-bold mt-2">Detail Pemesanan</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                <h4 class="font-weight-bold text-dark">Pemesanan</h4>
                <table>
                    <tbody>
                    <tr>
                        <td>Mulai </td>
                        <td>: {{$pesanan->mulai}}</td>
                    </tr>
                    <tr>
                        <td>Selesai </td>
                        <td>: {{$pesanan->selesai}}</td>
                    </tr>
                    <tr>
                        <td>Malam </td>
                        <td>: {{$pesanan->malam}}</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div class="col-8">
                <h4 class="font-weight-bold text-dark">Pembayaran</h4>
                <table>
                    <tbody>
                    <tr>
                        <td>Nama </td>
                        <td>: {{$pesanan->nama_pengirim}}</td>
                    </tr>
                    <tr>
                        <td>Asal Bank </td>
                        <td>: {{$pesanan->asal_bank}}</td>
                    </tr>
                    <tr>
                        <td>Nomor HP </td>
                        <td>: {{$pesanan->no_pengirim}}</td>
                    </tr>
                    </tbody>
                </table>
                </div>
                <div class="col-12 mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataModalTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Villa</th>
                                    <th>Foto Villa</th>
                                    <th>Alamat</th>
                                    <th>Bukti</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $order['id']; ?></td>
                                    <td><?= $villa['villa']; ?></td>
                                    <td><img src="../<?= $villa['foto_utama']; ?>" alt="villa-pemesanan" height="100px"></td>
                                    <td><?= $villa['alamat']; ?></td>
                                    <td><img src="image/bukti/<?= $order['upload_bukti']; ?>" alt="bukti-pembayaran" height="100px"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col">
                <table class="float-right mb-3">
                    <tbody>
                    <tr>
                        <td>Tax</td>
                        <td>: 15%</td>
                    </tr>
                    <tr>
                        <td>Sub Total</td>
                        <td>: <?= $villa['harga']; ?>$</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>: <?= ($order['total_harga'] * 0.15) + $order['total_harga']; ?>$</td>
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection