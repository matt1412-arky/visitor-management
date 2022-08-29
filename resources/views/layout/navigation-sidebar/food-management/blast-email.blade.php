@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">

        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blast Email</h4>
                </div>

                <div class="card-body custom-ekeditor">
                    <div class="form-group mb-3">
                        <label for="" class="fs-18">
                            <b>Subject</b>
                        </label>
                        <input name="" id="" class="form-control mb-2 border-dark" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="fs-18"><b>Description</b></label>
                        <div id="ckeditor" style="display: none;"></div>
                        <div class="ck ck-reset ck-editor ck-rounded-corners" role="application" dir="ltr"
                            lang="en" aria-labelledby="ck-editor__label_e5ead39a9b31e69139388bef3908f8928"><label
                                class="ck ck-label ck-voice-label"
                                id="ck-editor__label_e5ead39a9b31e69139388bef3908f8928">Rich
                                Text Editor</label>
                        </div>

                    </div>
                    <div class="form-group mb-3">
                        <label for="attachment" class="fs-18"><b>Attachment</b></label><br>
                        <div class="input-group">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control border-dark">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-google mt-2">Save</button>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Email Blast Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example3_wrapper" class="dataTables_wrapper no-footer">
                            <div class="dataTables_length" id="example3_length">
                                <label>Show
                                    <select name="example3_length" aria-controls="example3" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries
                                </label>
                            </div>

                            <div id="example3_filter" class="dataTables_filter ">
                                <div class="row">
                                    <div class="col">
                                        <label>Search:
                                            <input type="search" class="" placeholder="" aria-controls="example3">
                                        </label>
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary">Blast to All</button>
                                    </div>
                                </div>
                            </div>

                            <table id="example3" class="display dataTable no-footer " role="grid"
                                aria-describedby="example3_info">
                                <thead>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label=": activate to sort column descending"></th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-label="Name: activate to sort column ascending"
                                        style="width: 120px;">Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-label="Department: activate to sort column ascending"
                                        style="width: 115.734px;">Department</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-label="Mobile: activate to sort column ascending"
                                        style="width: 68.75px;">Mobile</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-label="Email: activate to sort column ascending"
                                        style="width: 122.312px;">Email</th>

                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-label="Joining Date: activate to sort column ascending"
                                        style="width:120px;">Blast Email</th>
                                    <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                        colspan="1" aria-label="Action: activate to sort column ascending"
                                        style="width: 49.0469px;">Action</th>

                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td class="">
                                            <input type="checkbox" class="" name="action" value="">
                                        </td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Architect</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td>
                                            <button class="btn btn-primary d-inline btn-xs" data-toggle="tooltip"
                                                data-placement>Blast Email</button>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                        class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                            <div class="dataTables_info" id="example3_info" role="status" aria-live="polite">Showing 1
                                to 10 of 30 entries</div>
                            <div class="dataTables_paginate paging_simple_numbers" id="example3_paginate"><a
                                    class="paginate_button previous disabled" aria-controls="example3" data-dt-idx="0"
                                    tabindex="0" id="example3_previous"><i class="fa fa-angle-double-left"
                                        aria-hidden="true"></i></a><span><a class="paginate_button current"
                                        aria-controls="example3" data-dt-idx="1" tabindex="0">1</a><a
                                        class="paginate_button " aria-controls="example3" data-dt-idx="2"
                                        tabindex="0">2</a><a class="paginate_button " aria-controls="example3"
                                        data-dt-idx="3" tabindex="0">3</a></span><a class="paginate_button next"
                                    aria-controls="example3" data-dt-idx="4" tabindex="0" id="example3_next"><i
                                        class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
