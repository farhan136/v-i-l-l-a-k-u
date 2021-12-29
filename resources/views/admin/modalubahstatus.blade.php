<!-- Modal -->
<div class="modal fade" id="exampleModal{{$tr->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah Status</h5>
      </div>
      <div class="modal-body">
        Status saat ini = {{$tr->payment_status}}

        <form action="{{url('ubahStatus', $tr->id)}}" method="post">
          @csrf
          <div class="form-group">
            <input type="radio" name="status" value="unpaid" class="btn btn-info" />unpaid<br />
            <input type="radio" name="status" value="pending" class="btn btn-secondary" />pending<br />
            <input type="radio" name="status" value="paid" class="btn btn-success" />paid<br />
            <input type="radio" name="status" value="cancelled" class="btn btn-danger" />cancelled<br />
          </div>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>