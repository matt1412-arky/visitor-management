@extends('layout.apps')
@section('title', ' Visitor Account ')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Visitor Account</h4>
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
                    <div id="example4_filter" class="dataTables_filter"><label>Search:<input type="search" class=""
                                placeholder="" aria-controls="example4"></label></div>
                    <table id="example4" class="display dataTable no-footer" style="min-width: 845px" role="grid"
                        aria-describedby="example4_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending"
                                    style="width: 35px;">No</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Name: activate to sort column ascending" style="width: 75px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Gender: activate to sort column ascending" style="width: 56px;">Phone</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Education: activate to sort column ascending" style="width: 78px;">Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Action: activate to sort column ascending" style="width: 49px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1">01</td>
                                <td>Tiger Nixon</td>
                                <td>#54605</td>
                                <td>Library</td>
                                <td>
                                    <div class="d-flex">
                                        <button href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></button>
                                        <button wire:click.debounce='delete' class="btn btn-danger shadow btn-xs sharp">
                                            <i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1">02</td>
                                <td>Garrett Winters</td>
                                <td>#54687</td>
                                <td>Library</td>
                                <td>
                                    <div class="d-flex">
                                        <button href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></button>
                                        <button wire:click.debounce='delete' class="btn btn-danger shadow btn-xs sharp">
                                            <i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">03</td>
                                <td>Ashton Cox</td>
                                <td>#35672</td>
                                <td>Tuition</td>
                                <td>
                                    <div class="d-flex">
                                        <button href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></button>
                                        <button wire:click.debounce='delete' class="btn btn-danger shadow btn-xs sharp">
                                            <i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1">04</td>
                                <td>Cedric Kelly</td>
                                <td>#57984</td>
                                <td>Annual</td>
                                <td>
                                    <div class="d-flex">
                                        <button href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></button>
                                        <button wire:click.debounce='delete' class="btn btn-danger shadow btn-xs sharp">
                                            <i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1">05</td>
                                <td>Airi Satou</td>
                                <td>#12453</td>
                                <td>Library</td>
                                <td>
                                    <div class="d-flex">
                                        <button href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></button>
                                        <button wire:click.debounce='delete' class="btn btn-danger shadow btn-xs sharp">
                                            <i class="fa fa-trash"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">Showing 1 to 10 of
                        30 entries</div>
                    <div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><a
                            class="paginate_button previous disabled" aria-controls="example4" data-dt-idx="0"
                            tabindex="0" id="example4_previous"><i class="fa fa-angle-double-left"
                                aria-hidden="true"></i></a><span><a class="paginate_button current"
                                aria-controls="example4" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                                aria-controls="example4" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button "
                                aria-controls="example4" data-dt-idx="3" tabindex="0">3</a></span><a
                            class="paginate_button next" aria-controls="example4" data-dt-idx="4" tabindex="0"
                            id="example4_next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
