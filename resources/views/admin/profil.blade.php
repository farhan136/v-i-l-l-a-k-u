@extends('admin.index')<!-- untuk mengambil template main -->
@section('judul', 'Profil Villaku')
@section('isi')

<!-- Begin Page Content -->
<div class="container-fluid">

	<div class="card shadow mb-4">
		<div class="card-header d-sm-flex align-items-center justify-content-between">
			<h4 class="font-weight-bold mt-2">Profil Villaku</h4>
			<button class="btn add shadow-sm" data-toggle="modal" data-target="#modalProfil">
				<i class="fas fa-edit"></i>
			</button>
		</div>
		<div class="card-body">
			<table class="table">
				<tbody>
					<tr>
						<td>Tentang Website</td>
						<td>{{$profil->tentang}}</td>
					</tr>
					<tr>
						<td>Instagram</td>
						<td>{{$profil->instagram}}</td>
					</tr>
					<tr>
						<td>What'sApp</td>
						<td>{{$profil->wa}}</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>{{$profil->alamat}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="modalProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form action="editProfil/{{$profil->id}}" method="POST">
						@csrf
						<div class="form-group">
							<label class="col-form-label">Tentang Website</label>
							<input type="text" class="form-control" name="tentang" value="{{$profil->tentang}}">
						</div>
						<div class="form-group">
							<label class="col-form-label">Instagram</label>
							<input type="text" class="form-control" name="instagram" value="{{$profil->instagram}}">
						</div>
						<div class="form-group">
							<label class="col-form-label">What'sApp</label>
							<input type="text" class="form-control" name="wa" value="{{$profil->wa}}">
						</div>
						<div class="form-group">
							<label class="col-form-label">Alamat</label>
							<input type="text" class="form-control" name="alamat" value="{{$profil->alamat}}">
						</div>
						<div class="float-right">
							<button type="submit" name="add_villa" class="btn btn-primary">Edit</button>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
@endsection