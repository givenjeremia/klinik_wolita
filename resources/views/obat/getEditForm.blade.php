<form action="{{ route('obat.update',$data->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Nama</label>
            <div class="col-md-9">
                <input type="text" name="nama_obat" value="{{ $data->nama_obat }}" class="form-control" placeholder="Nama Obat">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Harga</label>
            <div class="col-md-9">
                <input type="number" class="form-control"  value="{{ $data->harga }}" name="harga" placeholder="Harga" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Stock</label>
            <div class="col-md-9">
                <input type="number" name="stock"  value="{{ $data->stock }}" class="form-control" placeholder="Stock">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Kadaluarsa</label>
            <div class="col-md-9">
                <input type="date" class="form-control"  value="{{ $data->kadaluarsa }}" name="kadaluarsa" placeholder="dd/mm/yyyy" required>
            </div>
        </div>

    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-success">Tambah</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
</form>