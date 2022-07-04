<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Ubah Data Persalinan</h4>
 </div>
<form action="{{ route('persalinan.update',$data->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Tanggal Masuk</label>
            <div class="col-md-9">
                <input type="date" name="tanggal_masuk" value="{{ $data->tanggal_masuk }}" class="form-control" placeholder="dd/mm/yyyy" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Tanggal Persalinan</label>
            <div class="col-md-9">
                <input type="date" name="tanggal_persalinan" value="{{ $data->tanggal_persalinan }}" class="form-control" placeholder="dd/mm/yyyy" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Nama Pasien</label>
            <div class="col-md-9">
                <select class="form-control" name="pasien_id">
                    @foreach (session()->get("pasien") as $item)
                        <option value="{{ $item->id }}"  {{ $item->id == $data->data_pasien_id ? 'selected' : ''}}>{{ $item->nama }}</option>	
                    @endforeach
                    {{-- <option value="Wanita">Wanita</option> --}}
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Persalinan Ke-</label>
            <div class="col-md-9">
                <input type="number" name="persalinan_ke" value="{{ $data->persalinan_ke }}" class="form-control" placeholder="persalinan_ke" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Nama Suami</label>
            <div class="col-md-9">
                <input type="text" name="nama_suami" class="form-control" value="{{ $data->nama_suami }}" placeholder="Nama Suami" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Perkerjaan Suami</label>
            <div class="col-md-9">
                <input type="text" name="perkerjaan_suami" class="form-control" value="{{ $data->perkerjaan_suami }}" placeholder="Perkerjaan Suami" required>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Status Persalinan</label>
            <div class="col-md-9">
                <select class="form-control" name="status_persalinan">
                    <option value="0">Belum</option>
                    <option value="1">Sudah</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-md-3">Dokter/Bidan</label>
            <div class="col-md-9">
                <select class="form-control" name="dokter_bidan">
                    @foreach (session()->get("user") as $item)
                        <option value="{{ $item->username }}"  {{ $item->username == $data->dokter_bidan ? 'selected' : ''}}>{{ $item->nama }} / {{ $item->role }}</option>	
                    @endforeach
                </select>
            </div>
        </div>

    </div>

    <div class="modal-footer">
      <button type="submit" class="btn btn-success">Ubah</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
</form>
