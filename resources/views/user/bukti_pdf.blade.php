<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Bukti</title>
</head>
<body>
    <div class="card-header d-sm-flex align-items-center justify-content-between">
        <h4 class="font-weight-bold mt-2">BUKTI TRANSAKSI</h4>
    </div>
    
    <h5>Pemesanan</h5>
    <p>Mulai :{{$payment->mulai}}</p>
    <p>Selesai :{{$payment->selesai}}</p>
    <p>Malam :{{$payment->malam}}</p>
    <br>
    <h5>Pembayaran</h5>
    <p>Pengirim :{{$payment->nama_pengirim}}</p>
    <p>Asal Bank:{{$payment->asal_bank}}</p>
    <p>Nomer HP :{{$payment->no_pengirim}}</p>
    <br>
    <br>
    <h5>ID Villa   :{{$payment->villa->id}}</h5>
    <h5>Nama Villa :{{$payment->villa->villa}}</h5>
    <br>
    <h5>Tax         : 15%</h5>
    <h5>Sub total   : Rp. <?php echo number_format($payment->villa->harga); ?></h5>
    <h5>Total Harga : Rp. <?php echo number_format($payment->villa->harga * 0.15 + $payment->villa->harga); ?></h5>
    <br>
    
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">LUNAS</h4>
      <p>Terima kasih telah menggunakan villaku. </p>
      <hr>
      <p class="mb-0">Beritahu teman dan keluarga mu jika kamu puas dan beritahu kami jika tidak puas. </p>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymo>
    us"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
</html>
