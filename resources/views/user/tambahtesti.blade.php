@extends('layout.main')<!-- untuk mengambil template main -->
@section('judul', 'Tambah Testimoni') <!-- untuk section yang bernama title, ganti dengan villaku -->
@section('isi')
@include('layout.navbar')
{{auth()->user()->id}}
            <div class="modal-header">
                <h3 >Tambah Testimoni</h3>

            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="{{url('tambahtesti')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5 for="pendapat" class="col-form-label">Pendapat Kamu?</h5>
                                    <textarea type="text" class="form-control" name="pendapat" rows="10" autofocus></textarea>
                                </div>
                                <div class="float-right">
                                    <button type="submit" name="tambahtesti" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection