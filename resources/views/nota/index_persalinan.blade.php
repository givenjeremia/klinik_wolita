@extends('layouts.conquer2')

@section('title')
Nota Persalinan | BPM Wolita
@endsection

@section('content')
<div class="portlet">
     <div class="portlet-title">
          <div class="caption">
               <i class="fa fa-globe"></i>Nota Persalinan
          </div>
          <div class="tools">
          </div>
     </div>
     <div class="portlet-body">
          <div class="table-scrollable">
               <table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1"
                    role="grid" aria-describedby="sample_1_info">
                    <thead>
                         <tr role="row">
                              <th style="width: 160px;">
                                   Nota ID
                              </th>
                              <th style="width: 160px;">
                                   Tanggal
                              </th>
                              <th style="width: 204px;">
                                   Nama Pasien
                              </th>
                              <th style="width: 204px;">
                                   Nama Obat
                              </th>
                              <th style="width: 204px;">
                                   Biaya Penanganan
                              </th>
                              <th style="width: 204px;">
                                   Jenis Pembayaran  
                              </th>
                              <th style="width: 204px;">
                                   Status Pembayaran  
                              </th>
                              <th style="width: 204px;">
                                   Lama Menginap
                              </th>
                              <th style="width: 204px;">
                                   Total Biaya
                              </th>
                              <th style="width: 204px;">
                                   Aksi
                              </th>

                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($notaPersalinan as $item)
                         
                         <tr role="row" class="odd">
                              <td>
                                   {{ $item->id }}
                              </td>
                              <td>
                                   {{ $item->tanggal }}
                              </td>
                              @php
                              // dd($item->persalinan); 
                          @endphp
                              <td>
                                   @foreach ($item->persalinan as $items)
                                   @php
                              //     dd($items->pasien->nama); 
                              @endphp
                                   @if ($items->pasien->nama == $items->pasien->nama)
                                   {{ $items->pasien->nama }}        
                                       @break
                                   @else
                                   {{ $items->pasien->nama }}      
                                   
                                   @endif
                                   @endforeach
                                   
                              </td>
                              <td>
                                   
                                   @foreach ($item->obat as $items)
                                   <li  class=" list-unstyled ">

                                        {{ $items->nama_obat }}          
                                   </li>
                                   @endforeach
                             
                              </td>
                              <td>
                                   {{ $item->biaya_penanganan }}
                              </td>
                              <td>
                                   @if ($item->jenis_pembayaran == 0)
                                       Cash
                                   @else
                                       Transfer
                                   @endif
                              </td>
                              <td>
                                   @if ($item->status_pembayaran == 0)
                                       Belum
                                   @else
                                       Sudah
                                   @endif
                              </td>
                              <td>
                                   {{ $item->lama_menginap }}
                              </td>
                              <td>
                                   {{ $item->total }}
                              </td>
                              <td>
                                   Edit
                              </td>

                         </tr>
                             
                         @endforeach
                     
                    </tbody>
               </table>
          </div>
         
     </div>
</div>
@endsection