@extends('layouts.conquer2')

@section('title')
Data Obat | BPM Wolita
@endsection

@section('content')
<div class="portlet">
     <div class="portlet-title">
          <div class="caption">
               <i class="fa fa-globe"></i>Data Obat
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
                                   Nama Obat
                              </th>
                              <th style="width: 204px;">
                                   Harga
                              </th>
                              <th  style="width: 188px;">
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
                         @foreach ($obat as $item)
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
                                   <a href="#modalEdit" data-toggle='modal' class='btn btn-warning btn-xs' onclick="getEditForm({{$item->id}})">
                                        Ubah
                                   </a>
                                   <form method='POST' action="{{ route('obat.destroy',$item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Hapus" class='btn btn-danger btn-xs' onclick="if(!confirm('are you sure to delete this record ?')) return false;">
                                   </form>
                                   
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
        url:'{{route("obat.getEditForm" )}}',
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
