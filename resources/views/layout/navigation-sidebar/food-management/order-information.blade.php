@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Order Information</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                            <div class="dataTables_length" id="example4_length"><label>Show <select name="example4_length"
                                        aria-controls="example4" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="example4_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="" placeholder="" aria-controls="example4"></label></div>
                            <table id="example4" class="display dataTable no-footer" style="min-width: 845px"
                                role="grid" aria-describedby="example4_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Roll No: activate to sort column descending"
                                            style="width: 61.1719px;">No</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" aria-label="Student Name: activate to sort column ascending"
                                            style="width: 136.594px;">Employee Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" aria-label="Invoice number: activate to sort column ascending"
                                            style="width: 129.359px;">Food Package</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" aria-label="Fees Type : activate to sort column ascending"
                                            style="width: 83.9688px;">Zonation Info</th>
                                        <th class="sorting" tabindex="0" aria-controls="example4" rowspan="1"
                                            colspan="1" aria-label="Date: activate to sort column ascending"
                                            style="width: 86.3281px;">Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">1</td>
                                        <td>Tiger Nixon</td>
                                        <td>Package A</td>
                                        <td>A</td>
                                        <td>2011/04/25</td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">2</td>
                                        <td>Garrett Winters</td>
                                        <td>Package B</td>
                                        <td>D</td>
                                        <td>2011/04/25</td>
                                    </tr>
                                    <tr role="row" class="odd">
                                        <td class="sorting_1">3</td>
                                        <td>Ashton Cox</td>
                                        <td>Package D</td>
                                        <td>B</td>
                                        <td>2011/04/25</td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1
                                to 10 of 30 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><a
                                    class="paginate_button previous disabled" aria-controls="example4" data-dt-idx="0"
                                    tabindex="0" id="example4_previous"><i class="fa fa-angle-double-left"
                                        aria-hidden="true"></i></a><span><a class="paginate_button current"
                                        aria-controls="example4" data-dt-idx="1" tabindex="0">1</a><a
                                        class="paginate_button " aria-controls="example4" data-dt-idx="2"
                                        tabindex="0">2</a><a class="paginate_button " aria-controls="example4"
                                        data-dt-idx="3" tabindex="0">3</a></span><a class="paginate_button next"
                                    aria-controls="example4" data-dt-idx="4" tabindex="0" id="example4_next"><i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
