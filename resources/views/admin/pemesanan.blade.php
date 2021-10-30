@extends('admin.index')<!-- untuk mengambil template main -->
@section('judul', 'Transaksi')
@section('isi')
      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4 class="font-weight-bold mt-2">Tabel Transaksi</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Villa</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Harga</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($transaksi as $tr)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$tr->villa->villa}}</td>
                    <td>{{$tr->mulai}}</td>
                    <td>{{$tr->selesai}}</td>
                    <td>Rp. <?php echo number_format($tr->total_harga); ?></td>
                    <td class="text-center">
                      <button class="btn btn-info text-white">
                        <a href="detailpesanan/{{$tr->id}}" class="text-white"><i class="far fa-eye"></i></a>
                      </button>
                      <button class="btn btn-warning">
                        <a href="edit/{{$tr->id}}" class="text-white"><i class="fas fa-edit"></i></a>
                      </button>
                      <button class="btn btn-danger">
                        <a href="/hapuspesanan/{{$tr->id}}" class="text-white"><i class="far fa-trash-alt"></i></a>
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
@endsection