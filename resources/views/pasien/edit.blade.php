<form action="{{ route('pasien.update') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">NIK</label>
            <div class="col-md-9">
                <input type="text" name="NIK" value="{{ $data->NIK }}" class="form-control" placeholder="NIK">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Nama</label>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $data->nama }}" name="nama" placeholder="Nama" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tanggal Lahir</label>
            <div class="col-md-9">
                <input type="date" class="form-control" value="{{ $data->tanggal_lahir }}" name="tanggal_lahir" placeholder="dd/mm/yyyy" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Jenis Kelamin</label>
            <div class="col-md-9">
                <select class="form-control" name="jenis_kelamin" required>
                    <option value="0">Pria</option>
                    <option value="1">Wanita</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Umur</label>
            <div class="col-md-9">
                <input type="number" name="umur" value="{{ $data->umur }}" class="form-control" placeholder="Umur">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Perkerjaan</label>
            <div class="col-md-9">
                <input type="text" class="form-control" value="{{ $data->perkerjaan }}" name="perkerjaan" placeholder="Perkerjaan">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Nomor Telepon</label>
            <div class="col-md-9">
                <input type="tel" class="form-control" name="nomor_telepon" value="{{ $data->nomor_telepon }}" placeholder="Telepon" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Alamat</label>
            <div class="col-md-9">
                <input type="text" class="form-control" name="alamat" value="{{ $data->alamat }}" placeholder="Alamat" required>
            </div>
        </div>
        
    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-success">Ubah</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
</form>