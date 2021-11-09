@extends('layout.main')
@section('judul', 'Riwayat Pembelian')
@section('isi')
@include('layout.navbar')
<div class="container">
	

	<div class="card">
		<h5 class="card-header">Riwayat Pembelian {{Auth::user()->getName()}}</h5>
		<div class="card-body">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Nama</th>
						<th scope="col">Mulai</th>
						<th scope="col">Selesai</th>
						<th scope="col">Harga</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($payment as $p)
					<tr>
						<th scope="row">{{$loop->iteration}}</th>
						<td>{{$p->villa->villa}}</td>
						<td>{{$p->mulai}}</td>
						<td>{{$p->selesai}}</td>
						<td>{{$p->total_harga}}</td>
						<td>
							{{$p->payment_status}}
							@if($p->payment_status == 'unpaid')
								<a href="">Bayar</a>
							@endif
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

		</div>
	</div>
</div>
@endsection