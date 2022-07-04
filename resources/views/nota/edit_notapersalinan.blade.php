<form action="{{ route('notapersalinan.update',$data->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden" name="biaya_penanganan_lama" value="{{ $data->biaya_penanganan }}">
    <input type="hidden" name="total_lama" value="{{ $data->total }}">

    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Biaya Penanganan</label>
            <div class="col-md-9">
                <input type="text" name="biaya_penanganan" value="{{ $data->biaya_penanganan }}" class="form-control" placeholder="Biaya Penanganan">
            </div>
        </div>
    </div>
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Jenis Pembayaran</label>
            <div class="col-md-9">
                <select name="jenis_pembayaran" id="">
                    <option value="0" {{ $data->jenis_pembayaran == 0 ? 'selected' : ''}} >Cash</option>
                    <option value="1" {{ $data->jenis_pembayaran == 1 ? 'selected' : ''}} >Transfer</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Status Pembayaran</label>
            <div class="col-md-9">
                <select name="status_pembayaran" id="">
                    <option value="0" {{ $data->status_pembayaran == 0 ? 'selected' : ''}} >Belum</option>
                    <option value="1" {{ $data->status_pembayaran == 1 ? 'selected' : ''}} >Sudah</option>
                </select>
            </div>
        </div>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-success">UBAH</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
</form>