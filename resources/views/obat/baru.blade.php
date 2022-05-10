@extends('layouts.conquer2')

@section('title')
Obat Baru | BPM Wolita
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
                                <label class="control-label col-md-3">Nama Obat</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="nama_obat" placeholder="Nama Obat" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Harga</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="harga"  placeholder="Harga" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Stock</label>
                                <div class="col-md-9">
                                    <input type="text" name="stock"class="form-control" placeholder="Stok" required>
                                </div>
                            </div>
                        </div>
                        
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Kadaluarsa</label>
                                <div class="col-md-9">
                                    <input type="date" name="kadaluarsa" class="form-control" placeholder="dd/mm/yyyy" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
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

