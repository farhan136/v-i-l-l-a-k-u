@extends('admin.index')<!-- untuk mengambil template main -->
@section('judul', 'Detail Villa')
@section('isi')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4 class="font-weight-bold mt-2">Detail Villa</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-6 pl-0 pb-2">
                    <img src="/{{$detail->foto_utama}}" class="img-cover" alt="" height="280px" width="100%">
                </div>
                <div class="col-6 p-0">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Villa</td>
                            <td>: {{$detail->villa}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: {{$detail->alamat}}</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>: {{$detail->kategori}}</td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td>: {{$detail->nomor_hp}}</td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>: Rp. <?php echo number_format($detail->harga); ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-3 pl-0 mb-5">
                    <img src="/{{$detail->foto_indoor}}" class="img-cover" alt="" height="180px" width="100%">
                </div>
                <div class="col-3 pl-0">
                    <img src="/{{$detail->foto_outdoor}}" class="img-cover" alt="" height="180px" width="100%">
                </div>
                <div class="col-6">
                    <span>Deskripsi</span>
                    <div class="mt-2" style="height: 150px; overflow: auto;">
                        <span>{{$detail->deskripsi}}</span>
                    </div>
                </div>
            </div>
            <a href="{{url('/admin/villa')}}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</div>
@endsection