@extends('admin.index')<!-- untuk mengambil template main -->
@section('judul', 'Daftar User')
@section('isi')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
      <h4 class="font-weight-bold mt-2">Tabel User</h4>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Foto</th>
              <th>Pekerjaan</th>
              <th>Testimoni</th>
              <th></th>
            </tr> 
          </thead>
          <tbody>
            @foreach($user as $user)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$user->name}}</td><!-- mengambil nama villa dari tabel villa -->
              <td>{{$user->email}}</td>
              <td><img src="/image/user/{{$user->foto}}" class="fotouser"></td>
              <td>{{$user->pekerjaan}}</td>
              <td>{{$user->testi->testimoni}}</td>>
              <td class="text-center">
                <button class="btn btn-danger">
                  <a href="code/{{$user->id}}" class="text-white"><i class="far fa-trash-alt"></i></a>
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