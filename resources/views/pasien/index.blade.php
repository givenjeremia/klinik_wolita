@extends('layouts.conquer2')

@section('title')
Data Pasien | BPM Wolita
@endsection
@php
//     dd($pasiens)
@endphp
@section('content')
<div class="portlet">
     <div class="portlet-title">
          <div class="caption">
               <i class="fa fa-globe"></i>Data Pasien
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
                         @foreach ($pasiens as $item)
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
                                   <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm({{$item->id}})">
                                        Ubah
                                   </a>
                                   <form method='POST' action="{{ route('pasien.destroy',$item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Hapus" class='btn btn-danger btn-xs' onclick="if(!confirm('are you sure to delete this record ?')) return false;">
                                   </form>
                                   
                              </td>
                         </tr>
                         @endforeach
                         {{-- <tr role="row" class="even">
                              <td class="sorting_1">
                                   Gecko
                              </td>
                              <td>
                                   Firefox 1.5
                              </td>
                              <td>
                                   Win 98+ / OSX.2+
                              </td>
                              <td>
                                   1.8
                              </td>
                              <td>
                                   A
                              </td>
                              <td>
                                   Win 98+ / OSX.2+
                              </td>
                              <td>
                                   1.8
                              </td>
                              <td>
                                   A
                              </td>
                         </tr> --}}
                         
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
        url:'{{route("pasien.getEditForm" )}}',
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
