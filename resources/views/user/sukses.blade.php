@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'Sukses') <!-- untuk section yang bernama title, ganti dengan villaku -->
@section('isi')
<div class="container sukses">
	<h2>HORE..... Proses transaksi telah selesai</h2>
	<img src="{{asset('/image/Coolibah6_Indoor.jpg')}}"><br>
	<a class="btn btn-success" href="{{url('/')}}">Langsung ke Home</a>
	<a class="btn btn-primary" href="{{url('/bukti_pdf')}}" target="_blank">Tampilkan Bukti PDF</a>    
</div> 
@endsection