<form action="{{ route('notapemeriksaan.update',$data->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="biaya_penanganan_lama" value="{{ $data->biaya_penanganan }}">
    <input type="hidden" name="total_lama" value="{{ $data->total }}">
    <input type="hidden" name="tanggal" value="{{ $data->tanggal }}">

    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Biaya Penanganan</label>
            <div class="col-md-9">
                <input type="text" name="biaya_penanganan" value="{{ $data->biaya_penanganan }}" class="form-control" placeholder="Nama Obat">
            </div>
        </div>
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-success">UBAH</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
</form>