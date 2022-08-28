@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vendor A</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <div class="dataTables_length" id="example_length"><label>Show <select name="example_length"
                                        aria-controls="example" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="" placeholder="" aria-controls="example"></label></div>
                            <table id="example" class="display dataTable" style="min-width: 845px" role="grid"
                                aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending" style="width: 165.891px;">
                                            Food Menu</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 259.172px;">Quantity</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 124.922px;">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.6562px;">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>

                                    </tr>
                                    <tr class="even" role="row">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                    </tr>

                                </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Position</th>
                                        <th rowspan="1" colspan="1">Office</th>
                                        <th rowspan="1" colspan="1">Age</th>
                                        <th rowspan="1" colspan="1">Start date</th>
                                        <th rowspan="1" colspan="1">Salary</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1
                                to 10 of 57 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a
                                    class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0"
                                    tabindex="0" id="example_previous"><i class="fa fa-angle-double-left"
                                        aria-hidden="true"></i></a><span><a class="paginate_button current"
                                        aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a
                                        class="paginate_button " aria-controls="example" data-dt-idx="2"
                                        tabindex="0">2</a><a class="paginate_button " aria-controls="example"
                                        data-dt-idx="3" tabindex="0">3</a><a class="paginate_button "
                                        aria-controls="example" data-dt-idx="4" tabindex="0">4</a><a
                                        class="paginate_button " aria-controls="example" data-dt-idx="5"
                                        tabindex="0">5</a><a class="paginate_button " aria-controls="example"
                                        data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next"
                                    aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next"><i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vendor B</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <div class="dataTables_length" id="example_length"><label>Show <select name="example_length"
                                        aria-controls="example" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="" placeholder="" aria-controls="example"></label></div>
                            <table id="example" class="display dataTable" style="min-width: 845px" role="grid"
                                aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 165.891px;">
                                            Food Menu</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 259.172px;">Quantity</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 124.922px;">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.6562px;">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>

                                    </tr>
                                    <tr class="even" role="row">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                    </tr>

                                </tbody>
                                {{-- <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Name</th>
                                        <th rowspan="1" colspan="1">Position</th>
                                        <th rowspan="1" colspan="1">Office</th>
                                        <th rowspan="1" colspan="1">Age</th>
                                        <th rowspan="1" colspan="1">Start date</th>
                                        <th rowspan="1" colspan="1">Salary</th>
                                    </tr>
                                </tfoot> --}}
                            </table>
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1
                                to 10 of 57 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><a
                                    class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0"
                                    tabindex="0" id="example_previous"><i class="fa fa-angle-double-left"
                                        aria-hidden="true"></i></a><span><a class="paginate_button current"
                                        aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a
                                        class="paginate_button " aria-controls="example" data-dt-idx="2"
                                        tabindex="0">2</a><a class="paginate_button " aria-controls="example"
                                        data-dt-idx="3" tabindex="0">3</a><a class="paginate_button "
                                        aria-controls="example" data-dt-idx="4" tabindex="0">4</a><a
                                        class="paginate_button " aria-controls="example" data-dt-idx="5"
                                        tabindex="0">5</a><a class="paginate_button " aria-controls="example"
                                        data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next"
                                    aria-controls="example" data-dt-idx="7" tabindex="0" id="example_next"><i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Vendor C</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example_wrapper" class="dataTables_wrapper">
                            <div class="dataTables_length" id="example_length"><label>Show <select name="example_length"
                                        aria-controls="example" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="example_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="" placeholder="" aria-controls="example"></label></div>
                            <table id="example" class="display dataTable" style="min-width: 845px" role="grid"
                                aria-describedby="example_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending"
                                            style="width: 165.891px;">
                                            Food Menu</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending"
                                            style="width: 259.172px;">Quantity</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending"
                                            style="width: 124.922px;">Price</th>
                                        <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                            colspan="1" aria-label="Age: activate to sort column ascending"
                                            style="width: 49.6562px;">Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd" role="row">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>

                                    </tr>
                                    <tr class="even" role="row">
                                        <td class="sorting_1">Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                    </tr>

                                </tbody>

                            </table>
                            <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1
                                to 10 of 57 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
                                <a class="paginate_button previous disabled" aria-controls="example" data-dt-idx="0"
                                    tabindex="0" id="example_previous"><i class="fa fa-angle-double-left"
                                        aria-hidden="true"></i></a><span><a class="paginate_button current"
                                        aria-controls="example" data-dt-idx="1" tabindex="0">1</a><a
                                        class="paginate_button " aria-controls="example" data-dt-idx="2"
                                        tabindex="0">2</a><a class="paginate_button " aria-controls="example"
                                        data-dt-idx="3" tabindex="0">3</a><a class="paginate_button "
                                        aria-controls="example" data-dt-idx="4" tabindex="0">4</a><a
                                        class="paginate_button " aria-controls="example" data-dt-idx="5"
                                        tabindex="0">5</a><a class="paginate_button " aria-controls="example"
                                        data-dt-idx="6" tabindex="0">6</a></span>
                                <a class="paginate_button next" aria-controls="example" data-dt-idx="7" tabindex="0"
                                    id="example_next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                            <div class="row">
                                <div class="col-12 offset-7">
                                    <h3>Total : Rp. 1000.000.00,00</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
