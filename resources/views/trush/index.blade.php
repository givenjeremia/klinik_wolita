@extends('layouts.conquer2')

@section('title')
Sampah | BPM Wolita
@endsection

@section('content')

@if (count($obat_trush) != 0)
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Sampah Obat
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-scrollable">
            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTableObat"
                role="grid" aria-describedby="sample_1_info">
                <thead>
                    <tr role="row">
                        <th style="width: 160px;">
                            Nama Obat
                        </th>
                        <th style="width: 204px;">
                            Harga
                        </th>
                        <th style="width: 188px;">
                            Stock
                        </th>
                        <th style="width: 137px;">
                            Kadaluarsa
                        </th>
                        <th style="width: 99px;">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($obat_trush as $item)
                    <tr role="row" class="odd">
                        <td>
                            {{ $item->nama_obat }}
                        </td>
                        <td>
                            {{ $item->harga }}
                        </td>
                        <td>
                            {{ $item->stock }}
                        </td>

                        <td>
                            {{ $item->kadaluarsa }}
                        </td>
                        <td>
                            <a href="/restore/obat/{{ $item->id }}" class='btn btn-warning btn-xs'>
                                Pulihkan
                            </a>
                            <a href="/delete/obat/{{ $item->id }}" class='btn btn-warning btn-xs' >
                                Hapus
                            </a>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

    </div>
</div>
@endif

@if (count($pasien_trush) != 0)
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Sampah Pasien
        </div>
        <div class="tools">
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-scrollable">
             <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTablePasien"
                  role="grid" aria-describedby="sample_1_info">
                  <thead>
                       <tr role="row">
                            <th style="width: 160px;">
                                 NIK
                            </th>
                            <th style="width: 204px;">
                                 Nama
                            </th>
                            <th  style="width: 188px;">
                                 Tanggal Lahir
                            </th>
                            <th style="width: 137px;">
                                 Jenis Kelamin
                            </th>
                            <th  style="width: 99px;">
                                 Umur
                            </th>
                            <th style="width: 99px;">
                                 Perkerjaan
                            </th>
                            <th style="width: 99px;">
                                 Alamat
                            </th>
                            <th style="width: 99px;">
                                 Telepon
                            </th>
                            <th style="width: 99px;">
                                 Aksi
                            </th>
                       </tr>
                  </thead>
                  <tbody>
                       @foreach ($pasien_trush as $item)
                       <tr role="row" class="odd">
                            <td>
                                 {{ $item->NIK }}
                            </td>
                            <td>
                                 {{ $item->nama }}
                            </td>
                            <td>
                                 {{ $item->tanggal_lahir }}
                            </td>
                            <td>
                                 @if ($item->jenis_kelamin == 0)
                                     Pria
                                 @else
                                     Wanita
                                 @endif 
                            </td>
                            <td>
                                 {{ $item->umur }}
                            </td>
                            <td>
                                 {{ $item->perkerjaan }}
                            </td>
                            <td>
                                 {{ $item->alamat }}
                                 
                            </td>
                            <td>
                                 {{ $item->nomor_telepon }}
                                 
                            </td>
                            <td>
                                <a href="/restore/pasien/{{ $item->id }}" class='btn btn-warning btn-xs'>
                                    Pulihkan
                                </a>
                                <a href="/delete/pasien/{{ $item->id }}" class='btn btn-warning btn-xs' >
                                    Hapus
                                </a>
                            </td>
                       </tr>
                       @endforeach
                  </tbody>
             </table>
        </div>
   </div>
</div>
@endif

@if (count($pemeriksaan_trush) != 0)
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Riwayat Pemeriksaan
        </div>
        <div class="tools">
        </div>
    </div>
    <div class="portlet-body">

        <div class="table-scrollable">
            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTablePemeriksa" role="grid"
                aria-describedby="sample_1_info">
                <thead>
                    <tr role="row">
                        <th style="width: 160px;">
                            Pasien Nama
                        </th>
                        <th style="width: 204px;">
                            Tanggal Periksa
                        </th>
                        <th style="width: 188px;">
                            Keluhan
                        </th>
                        <th style="width: 188px;">
                            Terapi
                        </th>
                        <th style="width: 137px;">
                            Kunjungan Ke-
                        </th>
                        <th style="width: 99px;">
                            Kontrol Kembali
                        </th>
                        <th style="width: 99px;">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemeriksaan as $item)
                    <tr role="row" class="odd">
                        <td>
                            {{ $item->pasien->nama }}
                        </td>
                        <td>
                            {{ date('d-m-Y', strtotime($item->tanggal_periksa)) }}
                        </td>
                        <td>
                            {{ $item->keluhan }}
                        </td>
                        <td>
                            {{ $item->terapi }}
                        </td>
                        <td>
                            {{ $item->kunjungan_ke }}
                        </td>
                        <td>
                            {{ date('d-m-Y', strtotime($item->tanggal_kembali)) }}
                        </td>
                        <td>
                            <a href="/restore/pemeriksaan/{{ $item->id }}" class='btn btn-warning btn-xs'>
                                Pulihkan
                            </a>
                            <a href="/delete/pemeriksaan/{{ $item->id }}" class='btn btn-warning btn-xs' >
                                Hapus
                            </a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>
@endif

@if (count($persalinan_trush) != 0)
<div class="portlet">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Riwayat Pemeriksaan
        </div>
        <div class="tools">
        </div>
    </div>
    <div class="portlet-body">

        <div class="table-scrollable">
            <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTablePersalinan" role="grid"
                aria-describedby="sample_1_info">
                <thead>
                    <tr role="row">
                        <th style="width: 160px;">
                            Pasien Nama
                        </th>
                        <th style="width: 204px;">
                            Tanggal Periksa
                        </th>
                        <th style="width: 188px;">
                            Keluhan
                        </th>
                        <th style="width: 188px;">
                            Terapi
                        </th>
                        <th style="width: 137px;">
                            Kunjungan Ke-
                        </th>
                        <th style="width: 99px;">
                            Kontrol Kembali
                        </th>
                        <th style="width: 99px;">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemeriksaan as $item)
                    <tr role="row" class="odd">
                        <td>
                            {{ $item->pasien->nama }}
                        </td>
                        <td>
                            {{ date('d-m-Y', strtotime($item->tanggal_periksa)) }}
                        </td>
                        <td>
                            {{ $item->keluhan }}
                        </td>
                        <td>
                            {{ $item->terapi }}
                        </td>
                        <td>
                            {{ $item->kunjungan_ke }}
                        </td>
                        <td>
                            {{ date('d-m-Y', strtotime($item->tanggal_kembali)) }}
                        </td>
                        <td>
                            <a href="/restore/persalinan/{{ $item->id }}" class='btn btn-warning btn-xs'>
                                Pulihkan
                            </a>
                            <a href="/delete/persalinan/{{ $item->id }}" class='btn btn-warning btn-xs' >
                                Hapus
                            </a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>
@endif

@endsection

@section('js')
<script>
    $('#myTableObat').DataTable();
    $('#myTablePasien').DataTable();
    $('#myTablePemeriksa').DataTable();
    $('#myTablePersalinan').DataTable();

</script>
@endsection