@extends('layouts.conquer2')

@section('title')
Nota Pemerikasaan Baru | BPM Wolita
@endsection

@section('content')
    <div class="portlet">
        <div class="portlet-title text-bold">
            NOTA PEMERIKSAAN BARU
        </div>
        <div class="portlet-body form">
            <!-- BEGIN FORM-->
            <form action="{{ route('notapemeriksaan.store') }}"  method="post" enctype="multipart/form"class="form-horizontal">
                @csrf
                <div class="form-body">
                    {{-- <h3 class="form-section">Informasi Pribadi</h3> --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Tanggal</label>
                                <div class="col-md-9">
                                    <input type="date" name="tanggal" class="form-control" placeholder="dd/mm/yyyy" required>
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Pemeriksaan</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="pemeriksaan_id">
                                        <option value="">Pilih Pemeriksaan</option>
                                        @foreach ($pemeriksaan as $item)
                                            <option value="{{ $item->id }}" >{{ $item->pasien->nama }}</option>    
                                        @endforeach
                                    </select>
                                    {{-- <input type="date" name="tgl_persalinan" class="form-control" placeholder="dd/mm/yyyy" required> --}}
                                </div>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Obat</label>
                                <div class="col-md-9">
                                    {{-- @for ($i = 0; $i < 3; $i++) --}}
                                    <select class="form-control" id="select_obat" name="obat_id">
                                        <option value="">Pilih Obat</option>
                                        @foreach ($obats as $item)
                                            <option value="{{ $item->id }}" >{{ $item->nama_obat }}</option>    
                                        @endforeach
                                    </select>
                                        
                                    {{-- @endfor --}}
                                    <br>
                                    <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Keterangan" >
                                    <input type="hidden" id="obatid">
                                    <br>
                                    <a id="add_to_cart" >Tambah Obat</a>
                                    @if (session('obat'))
                                    <ul>
                                        @foreach (session('obat') as $id => $details)
                                            <li>
                                                <h5> {{ $details['name']  }} : {{ $details['kuantitas']  }}</h5>
                                                <p>{{ $details['keterangan']  }}</p>
                                            </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label col-md-3">Biaya Penanganan-</label>
                                <div class="col-md-9">
                                    <input type="number" name="biaya_penanganan" class="form-control" placeholder="persalinan_ke" required>
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

@section('js')
<script>
    $('#select_obat').on('change', function() {
        // alert( this.value );
        $("#obatid").val(this.value);

    });
    $('#add_to_cart').on('click', function() {
        obatid = $("#obatid").val();
        keterangan = $("#keterangan").val();
        // alert(obatid+keterangan)

        $('#add_to_cart').attr("href", "/addObatToCart/"+obatid+"/"+keterangan);
    });
</script>
@endsection

