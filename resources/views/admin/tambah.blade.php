<div class="modal fade" id="dashboardModalTambah" tabindex="-1" aria-labelledby="dashboardModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Tambah Villa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="tambah" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="harga" class="col-form-label">Foto Villa</label>
                                    <input type="file" class="form-control" placeholder="Foto Utama..." name="foto_utama">
                                    <input type="file" class="form-control mt-2" placeholder="Foto Indoor..." name="foto_indoor">
                                    <input type="file" class="form-control mt-2" placeholder="Foto Outdoor..." name="foto_outdoor">
                                </div>
                                <div class="form-group">
                                    <label for="kategori" class="col-form-label">Kategori</label>
                                    <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori">
                                    @error('kategori')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="harga-permalam" class="col-form-label">Harga Permalam</label>
                                    <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga">
                                    @error('harga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="villa" class="col-form-label">Nama Villa</label>
                                    <input type="text" class="form-control @error('villa') is-invalid @enderror" name="villa">
                                    @error('villa')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat" class="col-form-label">Alamat Villa</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat">
                                    @error('alamat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="noHP" class="col-form-label">Nomor HP</label>
                                    <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp">
                                    @error('nomor_hp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi" class="col-form-label">Deskripsi</label>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"></textarea>
                                    @error('deskripsi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="float-right">
                                    <button type="submit" name="add_villa" class="btn btn-primary">Tambah</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>