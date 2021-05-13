@extends('admin.index')<!-- untuk mengambil template main -->
@section('judul', 'Dashboard Admin')
@section('isi')
      <!-- Begin Page Content -->
      <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-header d-sm-flex align-items-center justify-content-between">
            <h4 class="font-weight-bold mt-2">Dashboard</h4>
            <button class="btn add shadow-sm" data-toggle="modal" data-target="#dashboardModalTambah">
              <i class="fas fa-plus"></i>
            </button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Villa</th>
                    <th>Alamat</th>
                    <th>Harga</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($villa as $v)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                      <img src="{{$v->foto_utama}}" class="img-cover" alt="" height="100px">
                    </td>
                    <td>{{$v->villa}}</td>
                    <td>{{$v->alamat}}</td>
                    <td>${{$v->harga}}</td>
                    <td class="text-center">
                      <button class="btn btn-info text-white">
                        <a href="detail/{{$v->id}}" class="text-white"><i class="far fa-eye"></i></a>
                      </button>
                      <button class="btn btn-warning">
                        <a href="edit/{{$v->id}}" class="text-white"><i class="fas fa-edit"></i></a>
                      </button>
                      <button class="btn btn-danger">
                        <a href="code/{{$v->id}}" class="text-white"><i class="far fa-trash-alt"></i></a>
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

      @include('admin.tambah')
@endsection