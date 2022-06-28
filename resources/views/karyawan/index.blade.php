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
          <div class="row">
               <div class="col-md-12">
                    <div class="btn-group tabletools-dropdown-on-portlet"><a
                              class="btn btn-sm btn-default DTTT_button_pdf" id="ToolTables_sample_1_0"><span>PDF</span>
                              <div
                                   style="position: absolute; left: 0px; top: 0px; width: 44px; height: 30px; z-index: 99;">
                                   <embed id="ZeroClipboard_TableToolsMovie_1"
                                        src="assets/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                                        loop="false" menu="false" quality="best" bgcolor="#ffffff" width="44"
                                        height="30" name="ZeroClipboard_TableToolsMovie_1" align="middle"
                                        allowscriptaccess="always" allowfullscreen="false"
                                        type="application/x-shockwave-flash"
                                        pluginspage="http://www.macromedia.com/go/getflashplayer"
                                        flashvars="id=1&amp;width=44&amp;height=30" wmode="transparent"></div>
                         </a><a class="btn btn-sm btn-default DTTT_button_csv"
                              id="ToolTables_sample_1_1"><span>CSV</span>
                              <div
                                   style="position: absolute; left: 0px; top: 0px; width: 44px; height: 30px; z-index: 99;">
                                   <embed id="ZeroClipboard_TableToolsMovie_2"
                                        src="assets/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                                        loop="false" menu="false" quality="best" bgcolor="#ffffff" width="44"
                                        height="30" name="ZeroClipboard_TableToolsMovie_2" align="middle"
                                        allowscriptaccess="always" allowfullscreen="false"
                                        type="application/x-shockwave-flash"
                                        pluginspage="http://www.macromedia.com/go/getflashplayer"
                                        flashvars="id=2&amp;width=44&amp;height=30" wmode="transparent"></div>
                         </a><a class="btn btn-sm btn-default DTTT_button_xls"
                              id="ToolTables_sample_1_2"><span>Excel</span>
                              <div
                                   style="position: absolute; left: 0px; top: 0px; width: 51px; height: 30px; z-index: 99;">
                                   <embed id="ZeroClipboard_TableToolsMovie_3"
                                        src="assets/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
                                        loop="false" menu="false" quality="best" bgcolor="#ffffff" width="51"
                                        height="30" name="ZeroClipboard_TableToolsMovie_3" align="middle"
                                        allowscriptaccess="always" allowfullscreen="false"
                                        type="application/x-shockwave-flash"
                                        pluginspage="http://www.macromedia.com/go/getflashplayer"
                                        flashvars="id=3&amp;width=51&amp;height=30" wmode="transparent"></div>
                         </a><a class="btn btn-sm btn-default DTTT_button_print" id="ToolTables_sample_1_3"
                              title="View print view"><span>Print</span></a></div>
               </div>
          </div>
          <div class="table-scrollable">
               <table class="table table-striped table-bordered table-hover dataTable no-footer" id="sample_1"
                    role="grid" aria-describedby="sample_1_info">
                    <thead>
                         <tr role="row">
                              <th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1"
                                   aria-sort="ascending" aria-label="
                         Rendering engine
                    : activate to sort column ascending" style="width: 160px;">
                                   No
                              </th>
                              <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1"
                                   aria-label="
                         Browser
                    : activate to sort column ascending" style="width: 204px;">
                                   Nama
                              </th>
                              <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1"
                                   aria-label="
                         Platform(s)
                    : activate to sort column ascending" style="width: 188px;">
                                   Tanggal Lahir
                              </th>
                              <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1"
                                   aria-label="
                         Engine version
                    : activate to sort column ascending" style="width: 137px;">
                                   Username
                              </th>
                              <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1"
                                   aria-label="
                         CSS grade
                    : activate to sort column ascending" style="width: 99px;">
                                   Email
                              </th>
                              <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1"
                                   aria-label="
                         Engine version
                    : activate to sort column ascending" style="width: 137px;">
                                   Nomor Telepon
                              </th>
                              <th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1"
                                   aria-label="
                         CSS grade
                    : activate to sort column ascending" style="width: 99px;">
                                   Role
                              </th>
                         </tr>
                    </thead>
                    <tbody>
                         @foreach ($karyawan as $key => $item)
                         <tr role="row" class=" {{ ($key % 2 === 0) ? 'odd' : 'even' }}">
                              <td class="sorting_1">
                                   {{ $item->id }}
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