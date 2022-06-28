@extends('layouts.conquer2')

@section('title')
Nota Pemeriksaan | BPM Wolita
@endsection

@section('content')
<div class="portlet">
     <div class="portlet-title">
          <div class="caption">
               <i class="fa fa-globe"></i>Nota Pemeriksaan
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
                                   Terapi   
                              </th>
                              <th style="width: 204px;">
                                   Nama Obat
                              </th>
                              <th style="width: 204px;">
                                   biaya Penanganan
                              </th>
                              <th style="width: 204px;">
                                   Total Biaya
                              </th>

                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($notaPemeriksaan as $item)
                         
                         <tr role="row" class="odd">
                              <td>
                                   {{ $item->id }}
                              </td>
                              <td>
                                   {{ $item->tanggal }}
                              </td>
                              @php
                              //     dd($item->obat);
                              @endphp
                              <td>
                                   @foreach ($item->pemeriksaan as $items)
                                   
                                   @if ($items->pasien->nama == $items->pasien->nama)
                                   {{ $items->pasien->nama }}        
                                       @break
                                   @else
                                   {{ $items->pasien->nama }}      
                                       
                                   @endif
                                   @endforeach
                                   
                              </td>
                              <td>
                                   
                                   @foreach ($item->pemeriksaan as $items)
                                   @if ($items->terapi == $items->terapi)
                                   {{ $items->terapi }}        
                                       @break
                                   @else
                                   {{ $items->terapi }}      
                                       
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
                                   {{ $item->total }}
                              </td>

                         </tr>
                             
                         @endforeach
                     
                    </tbody>
               </table>
          </div>
          <div class="row">
               <div class="col-md-5 col-sm-12">
                    <div class="dataTables_info" id="sample_1_info" role="status" aria-live="polite">Showing 1 to 10 of
                         43 entries</div>
               </div>
               <div class="col-md-7 col-sm-12">
                    <div class="dataTables_paginate paging_simple_numbers" id="sample_1_paginate">
                         <ul class="pagination">
                              <li class="paginate_button previous disabled" aria-controls="sample_1" tabindex="0"
                                   id="sample_1_previous"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                              <li class="paginate_button active" aria-controls="sample_1" tabindex="0"><a href="#">1</a>
                              </li>
                              <li class="paginate_button " aria-controls="sample_1" tabindex="0"><a href="#">2</a></li>
                              <li class="paginate_button " aria-controls="sample_1" tabindex="0"><a href="#">3</a></li>
                              <li class="paginate_button " aria-controls="sample_1" tabindex="0"><a href="#">4</a></li>
                              <li class="paginate_button " aria-controls="sample_1" tabindex="0"><a href="#">5</a></li>
                              <li class="paginate_button next" aria-controls="sample_1" tabindex="0" id="sample_1_next">
                                   <a href="#"><i class="fa fa-angle-right"></i></a></li>
                         </ul>
                    </div>
               </div>
          </div>
     </div>
</div>
@endsection