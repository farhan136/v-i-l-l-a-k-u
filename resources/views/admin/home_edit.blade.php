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
                    <label for="kategori" class="col-form-label">Kategori</label>
                    <input value="{{$cocok->kategori}}" type="text" class="form-control @error('kategori') is-invalid @enderror " name="kategori">
                    @error('kategori')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga-permalam" class="col-form-label">Harga Permalam</label>
                    <input value="{{$cocok->harga}}" type="text" class="form-control @error('harga') is-invalid @enderror" name="harga">
                    @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="villa" class="col-form-label">Nama Villa</label>
                    <input value="{{$cocok->villa}}" type="text" class="form-control @error('villa') is-invalid @enderror" name="villa">
                    @error('villa')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="alamat" class="col-form-label">Alamat Villa</label>
                    <input value="{{$cocok->alamat}}" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat">
                    @error('alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="noHP" class="col-form-label">Nomor HP</label>
                    <input value="{{$cocok->nomor_hp}}" type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp">
                    @error('nomor_hp')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi">{{$cocok->deskripsi}}</textarea>
                    @error('deskripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
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