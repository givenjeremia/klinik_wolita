@extends('layouts.conquer2')

@section('title')
Data Karyawan | BPM Wolita
@endsection

@section('content')
<div class="portlet">
     <div class="portlet-title">
          <div class="caption">
               <i class="fa fa-globe"></i>Data Karyawan
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
                              <th style="width: 99px;">
                                   No
                              </th>
                              <th style="width: 204px;">
                                   Nama
                              </th>
                              <th style="width: 188px;">
                                   Tanggal Lahir
                              </th>
                              <th style="width: 137px;">
                                   Username
                              </th>
                              <th style="width: 99px;">
                                   Email
                              </th>
                              <th style="width: 137px;">
                                   Nomor Telepon
                              </th>
                              <th style="width: 99px;">
                                   Role
                              </th>
                              <th style="width: 99px;">
                                   Status
                              </th>
                              <th style="width: 99px;">
                                   Aksi
                              </th>
                         </tr>
                    </thead>
                    <tbody>
                         @php
                             $i=1;
                         @endphp
                         @foreach ($karyawan as $key => $item)
                         <tr role="row" class=" {{ ($key % 2 === 0) ? 'odd' : 'even' }}">
                              <td class="sorting_1">
                                   {{ $i }}
                              </td>
                              <td>
                                   {{ $item->nama }}
                              </td>
                              <td>
                                   {{ $item->tanggal_lahir }}
                              </td>
                              <td>
                                   {{ $item->username }}
                              </td>
                              <td>
                                   {{ $item->email }}
                              </td>
                              <td>
                                   {{ $item->nomor_telepon }}

                              </td>
                              <td>
                                   {{ $item->role }}

                              </td>
                              <td>
                                   @if ($item->status == 0)
                                       Tidak Aktif
                                   @else
                                       Aktif
                                   @endif
                              </td>
                              <td>
                                   <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm({{$item->id}})">
                                        Ubah
                                   </a>  
                              </td>
                         </tr>
                         @php
                             $i++;
                         @endphp
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
    $('#myTable').DataTable();

    function getEditForm(id){
      $.ajax({
        type:'POST',
        url:'{{route("user.getEditForm" )}}',
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