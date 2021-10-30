@extends('admin.index')<!-- untuk mengambil template main -->
@section('judul', 'Dashboard Admin')
@section('isi')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header d-sm-flex align-items-center justify-content-between">
      <h4 class="font-weight-bold mt-2">Dashboard</h4>
    </div>
    <div class="card-body">
      
    </div>
  </div>
  <!-- /.container-fluid -->
</div>
<!-- End of Main Content -->

@include('admin.tambah')

@endsection