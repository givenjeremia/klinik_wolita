<form action="{{ route('pemeriksaan.update',$data->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Tanggal Periksa</label>
            <div class="col-md-9">
                <input type="date" name="tanggal_periksa" value="{{ $data->tanggal_periksa }}" class="form-control" placeholder="dd/mm/yyyy" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Nama Pasien</label>
            <div class="col-md-9">
                <select class="form-control" name="pasien_id">
                    @foreach (session()->get("pasien") as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $data->data_pasien_id ? 'selected' : ''}}>{{ $item->nama }}</option>	
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Kunjungan Ke</label>
            <div class="col-md-9">
                <input type="number" name="kunjungan_ke" value="{{ $data->kunjungan_ke }}"class="form-control" placeholder="Kunjungan Ke" required>
                
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Keluhan</label>
            <div class="col-md-9">
                <input type="text" name="keluhan" value="{{ $data->keluhan }}"class="form-control" placeholder="Keluhan" required>
                
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Terapi</label>
            <div class="col-md-9">
                <input type="text" name="terapi" value="{{ $data->terapi }}"class="form-control" placeholder="terapi" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tanggal Kembali</label>
            <div class="col-md-9">
                <input type="date" name="tanggal_kembali" value="{{ $data->tanggal_kembali }}" class="form-control" placeholder="dd/mm/yyyy" required>
            </div>
        </div>

    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-success">Ubah</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
</form>