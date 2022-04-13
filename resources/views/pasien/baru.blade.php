@extends('layouts.conquer2')

@section('title')
Pasien Baru | BPM Wolita
@endsection

@section('content')
    <div class="portlet">
        <div class="portlet-title text-bold">
            PASIEN BARU
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="#" class="form-horizontal">
                <div class="form-body">
                    {{-- <h3 class="form-section">Informasi Pribadi</h3> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">NIK</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="NIK">
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Jenis Kelamin</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>
                                    <span class="help-block">
                                    Select your gender. </span>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Nama</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Nama" required>
                                </div>
                            </div>
                        </div>
                        
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Tanggal Lahir</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Umur</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Umur" >
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Nomor Telepon</label>
                                <div class="col-md-9">
                                    <input type="tel" pattern=”^\d{10}$” class="form-control" placeholder="Your Telepon" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    {{-- <h3 class="form-section">Address</h3> --}}
                    <!--/row-->
                    <div class="row">
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
                    </div>
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

