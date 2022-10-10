@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    <div class="row">
        <div class="card-body">
            <div class="basic-list-group">
                <div class="row">
                    <div class="col-lg-6 col-xl-2">
                        <h4 class="card-title">List Visitor</h4>
                        <div class="list-group mb-4 " id="list-tab" role="tablist">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                                                <div class="dataTables_length" id="example4_length"><label>Show <select
                                                            name="example4_length" aria-controls="example4" class="">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries</label></div>
                                                <div id="example4_filter" class="dataTables_filter"><label>Search:<input
                                                            type="search" class="" placeholder=""
                                                            aria-controls="example4"></label></div>
                                                <table class="table table-responsive">
                                                    <thead>
                                                        <tr>
                                                            <th></th>
                                                            <th class="fs-6"><strong>VISITOR ID</strong></th>
                                                            <th class="fs-6"><strong>NAME</strong></th>
                                                            <th class="fs-6"><strong>INVITATION FROM</strong></th>
                                                            <th class="fs-6"><strong>ACTION</strong></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><strong>01</strong></td>
                                                            <td>Jackson902384</td>
                                                            <td>Dr. Jackson</td>
                                                            <td>names/divisi</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button type="button"
                                                                        class="btn btn-success light sharp"
                                                                        data-bs-toggle="dropdown">
                                                                        <svg width="20px" height="20px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0"
                                                                                    width="24" height="24">
                                                                                </rect>
                                                                                <circle fill="#000000" cx="5"
                                                                                    cy="12" r="2">
                                                                                </circle>
                                                                                <circle fill="#000000" cx="12"
                                                                                    cy="12" r="2">
                                                                                </circle>
                                                                                <circle fill="#000000" cx="19"
                                                                                    cy="12" r="2">
                                                                                </circle>
                                                                            </g>
                                                                        </svg>
                                                                    </button>
                                                                    <div class="dropdown-menu">
                                                                        <a class="dropdown-item" href="#">Edit</a>
                                                                        <a class="dropdown-item" href="#">Delete</a>
                                                                        <a class="dropdown-item" href="#">Check In</a>
                                                                    </div>
                                                                </div>
                                                            </td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="dataTables_info" id="example4_info" role="status"
                                                    aria-live="polite">Showing 1 to 10 of 30 entries</div>
                                                <div class="dataTables_paginate paging_simple_numbers"
                                                    id="example4_paginate"><a class="paginate_button previous disabled"
                                                        aria-controls="example4" data-dt-idx="0" tabindex="0"
                                                        id="example4_previous"><i class="fa fa-angle-double-left"
                                                            aria-hidden="true"></i></a><span><a
                                                            class="paginate_button current" aria-controls="example4"
                                                            data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                                                            aria-controls="example4" data-dt-idx="2" tabindex="0">2</a><a
                                                            class="paginate_button " aria-controls="example4"
                                                            data-dt-idx="3" tabindex="0">3</a></span><a
                                                        class="paginate_button next" aria-controls="example4"
                                                        data-dt-idx="4" tabindex="0" id="example4_next"><i
                                                            class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-10">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home">
                                <h4 class="mb-4">GPS</h4>
                                <p>This is a wider card with supporting text and below as a natural lead-in to the
                                    additional content. This content is a little</p>

                                <img class="card-img-bottom img-fluid"
                                    src="{{ asset('support/icons/barcode/QR_code1.png') }}" alt="Card image cap">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <center>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-google">Visitor Data</button>
                        {{-- <button type="button" class="btn btn-google ">Make a temporary account</button> --}}
                        <button type="button" class="btn btn-google ">Track Visitor</button>
                        <button type="button" class="btn btn-google ">Refresh</button>
                    </div>
                </div>
            </div>
        </center>
    </div>
@endsection
