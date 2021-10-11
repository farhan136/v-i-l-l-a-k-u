@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'Tentang Villaku') <!-- untuk section yang bernama title, ganti dengan villaku -->
@section('isi')
@include('layout.navbar')
<div class="card">
  <h5 class="card-header">Tentang Villaku</h5>
  <div class="card-body">
    <p class="card-text">{{$profil->tentang}}</p>

  </div>
</div>
@endsection