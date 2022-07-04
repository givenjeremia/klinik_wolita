@extends('layouts.conquer2')

@section('title')
Riwayat Persalinan | BPM Wolita
@endsection

@section('content')
<div class="portlet">
     <div class="portlet-title">
          <div class="caption">
               <i class="fa fa-globe"></i>Riwayat Persalinan
          </div>
          <div class="tools">
          </div>
     </div>
     <div class="portlet-body">
          <div class="table-scrollable">
               <table class="table table-striped table-bordered table-hover dataTable no-footer" id="myTable"
                    role="grid" aria-describedby="sample_1_info">
                    <thead>
                         <tr role="row">
                              <th style="width: 160px;">
                                   Nama Pasien
                              </th>
                              <th style="width: 160px;">
                                   Nama Suami
                              </th>
                              <th style="width: 160px;">
                                   Perkerjaan Suami
                              </th>
                              <th style="width: 204px;">
                                   Tanggal Masuk
                              </th>
                              <th style="width: 188px;">
                                   Tanggal Persalinan
                              </th>
                              <th style="width: 137px;">
                                   Persalinan Ke-
                              </th>
                              <th style="width: 99px;">
                                   Status Kelahiran
                              </th>
                              <th style="width: 99px;">
                                   Dokter / Bidan
                              </th>
                              <th style="width: 99px;">
                                   Action
                              </th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($persalinans as $item)
                         <tr role="row" class="odd">
                              <td>
                                   @if (!empty($item->pasien->nama))

                                   @if ($item->pasien->nama == $item->pasien->nama)
                                   {{ $item->pasien->nama }}
                                   {{-- @break --}}
                                   @else
                                   {{ $item->pasien->nama }}


                                   @endif


                                   @else
                                   Data Pasien Terhapus/Kosong



                                   @endif
                                   
                              </td>
                              <td>
                                   {{ $item->nama_suami }}
                                   
                              </td>
                              <td>
                                   {{ $item->perkerjaan_suami }}
                                   
                              </td>
                              <td>
                                   {{ $item->tanggal_masuk }}
                              </td>
                              <td>
                                   {{ $item->tanggal_persalinan }}
                                   
                              </td>
                              <td>
                                   {{ $item->persalinan_ke }}
                                   
                              </td>
                              <td>
                                   @if ($item->status_kelahiran == 0)
                                       Belum
                                   @else
                                       Sudah
                                   @endif
                              </td>
                              <td>
                                   {{ $item->dokter_bidan }}
                                   
                              </td>
                              <td>
                                   <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm({{$item->id}})">
                                        Ubah
                                   </a>
                              </td>
                         </tr>
                         @endforeach

                    </tbody>
               </table>
          </div>
     </div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
     <div class="modal-dialog">
       <div class="modal-content" id="modalContent">
   
       </div>
     </div>
   </div>
@endsection

@section('js')
<script>
    $('#myTable').DataTable(
     {
        dom: 'Bfrtip',
        buttons: [
            'csvHtml5',
            'pdfHtml5',
            'print',
        ]
    }
    );
    function getEditForm(id){
     $.ajax({
       type:'POST',
       url:'{{route("persalinan.getEditForm" )}}',
       data:{'_token':'<?php echo csrf_token() ?>',
           'id':id
    },
       success: function(data){
         $('#modalContent').html(data.msg)
       }
     });
   }
</script>
@endsection