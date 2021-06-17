@extends('admin.index')<!-- untuk mengambil template main -->
@section('judul', 'Dashboard Admin')
@section('isi') 
<div class="container-fluid">
    <form action="update/{{$cocok->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="harga" class="col-form-label">Foto Villa</label>
                    <input value="{{$cocok->foto_utama}}" type="file" class="form-control" placeholder="Foto Utama..." name="foto_utama" >
                    <input value="{{$cocok->foto_indoor}}" type="file" class="form-control mt-2" placeholder="Foto Indoor..." name="foto_indoor">
                    <input value="{{$cocok->foto_outdoor}}" type="file" class="form-control mt-2" placeholder="Foto Outdoor..." name="foto_outdoor">
                </div>
                <div class="form-group">
                    <label for="provinsi" class="col-form-label">Provinsi</label>
                    <input value="{{$cocok->provinsi}}" type="text" class="form-control" name="provinsi">
                </div>
                <div class="form-group">
                    <label for="pulau" class="col-form-label">Pulau</label>
                    <input value="{{$cocok->pulau}}" type="text" class="form-control" name="pulau">
                </div>
                <div class="form-group">
                    <label for="harga-permalam" class="col-form-label">Harga Permalam</label>
                    <input value="{{$cocok->harga}}" type="text" class="form-control" name="harga">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="villa" class="col-form-label">Nama Villa</label>
                    <input value="{{$cocok->villa}}" type="text" class="form-control" name="villa">
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-form-label">Alamat Villa</label>
                    <input value="{{$cocok->alamat}}" type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label for="noHP" class="col-form-label">Nomor HP</label>
                    <input value="{{$cocok->nomor_hp}}" type="text" class="form-control" name="nomor_hp">
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                    <textarea class="form-control" name="deskripsi">{{$cocok->deskripsi}}</textarea>
                </div>
                <div class="float-right">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>

@include('admin.tambah')

@endsection