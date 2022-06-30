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
                                   {{ $item->role }}

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
@endsection


@section('js')
<script>
    $('#myTable').DataTable();
</script>
@endsection