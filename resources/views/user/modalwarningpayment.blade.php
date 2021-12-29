<button type="button" class="btn tombol" data-toggle="modal" data-target="#warning">
  Home
</button>

<div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="warningLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PERHATIAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data pemesanan akan otomatis terhapus jika tidak melakukan pembayaran sampai besok siang pukul 13.00...
      </div>
      <div class="modal-footer">
        <a href="{{url('/')}}" class="btn tombol">Pergi ke home</a>
      </div>
    </div>
  </div>
</div>