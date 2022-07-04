<form action="{{ route('user.update',$data->id) }}" class="form-horizontal" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Nama</label>
            <div class="col-md-9">
                <input type="text" name="nama" value="{{ $data->nama }}" class="form-control" placeholder="Nama Obat">
            </div>
        </div>
    </div>

    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Tanggal Lahir</label>
            <div class="col-md-9">
                <input type="text" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}" class="form-control" placeholder="Nama Obat">
            </div>
        </div>
    </div>
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Username</label>
            <div class="col-md-9">
                <input type="text" name="username" value="{{ $data->username }}" class="form-control" placeholder="Username">
            </div>
        </div>
    </div>
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-9">
                <input type="text" name="email" value="{{ $data->email }}" class="form-control" placeholder="Email">
            </div>
        </div>
    </div>
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Nomor Telepon</label>
            <div class="col-md-9">
                <input type="text" name="nomor_telepon" value="{{ $data->nomor_telepon }}" class="form-control" placeholder="Nomor Telepon">
            </div>
        </div>
    </div>
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Role</label>
            <div class="col-md-9">
                <select name="roles" id="roles">
                    <option value="Dokter" {{ $data->role == 'Dokter' ? 'selected' : ''}}>Dokter</option>
                    <option value="Bidan" {{ $data->role == 'Bidan' ? 'selected' : ''}}>Bidan</option>
                    <option value="Karyawan" {{ $data->role == 'Karyawan' ? 'selected' : ''}}>Karyawan</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-body">
        <div class="form-group">
            <label class="control-label col-md-3">Status</label>
            <div class="col-md-9">
                <select name="status" id="">
                    <option value="0" {{ $data->status == 0 ? 'selected' : ''}}>Tidak Aktif</option>
                    <option value="1" {{ $data->status == 1 ? 'selected' : ''}}>Aktif</option>
                </select>
            </div>
        </div>
    </div>


    <div class="modal-footer">
      <button type="submit" class="btn btn-success">UBAH</button>
      <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
    </div>
</form>