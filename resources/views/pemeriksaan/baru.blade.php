@extends('layouts.conquer2')

@section('title')
Pemeriksaan Baru | BPM Wolita
@endsection

@section('content')
    <div class="portlet">
        <div class="portlet-title text-bold">
            PEMERIKSAAN BARU
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="#" class="form-horizontal">
                <div class="form-body">
                    {{-- <h3 class="form-section">Informasi Pribadi</h3> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Tanggal Periksa</label>
                                <div class="col-md-9">
                                    <input type="date" name="tgl_periksa" class="form-control" placeholder="dd/mm/yyyy" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Kunjungan Ke</label>
                                <div class="col-md-9">
                                    <input type="text" name="kunjungan_ke" class="form-control" placeholder="Kunjungan Ke-" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Pasien</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="pasien_id">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Keluhan</label>
                                <div class="col-md-9">
                                    <input type="text" name="keluhan" class="form-control" placeholder="Keluhan" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Terapi</label>
                                <div class="col-md-9">
                                    <input type="text" name="terapi" class="form-control" placeholder="terapi" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Tanggal Kembali</label>
                                <div class="col-md-9">
                                    <input type="date" name="tgl_kembali" class="form-control" placeholder="dd/mm/yyyy" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    {{-- <h3 class="form-section">Address</h3> --}}
                    <!--/row-->
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Alamat</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Alamat" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Perkerjaan</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Perkerjaan">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <!--/row-->
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <button type="button" class="btn btn-default">Cancel</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
    
@endsection

