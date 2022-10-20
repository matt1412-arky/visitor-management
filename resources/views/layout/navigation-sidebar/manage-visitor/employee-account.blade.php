@extends('layout.apps')
@section('title', ' Dashboard Admin ')
@section('content')
    <!-- row -->
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Employee Account</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="example3_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="example3_length"><label>Show <select name="example3_length"
                                aria-controls="example3" class="">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label></div>

                    <div id="example3_filter" class="dataTables_filter"><label>Search:<input type="search" class=""
                                placeholder="" aria-controls="example3"></label></div>

                    <div class="col-md float-right text-end">
                        <button type="button" class="btn btn-rounded btn-success"><span class="btn-icon-start text-dark"><i
                                    class="fa fa-plus"></i>
                            </span>Add</button>
                    </div>

                    <table id="example3" class="display dataTable no-footer" style="min-width: 845px" role="grid"
                        aria-describedby="example3_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending"
                                    style="width: 35px;"></th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Name: activate to sort column ascending" style="width: 75px;">NIK</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Gender: activate to sort column ascending" style="width: 56px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Education: activate to sort column ascending" style="width: 78px;">Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Mobile: activate to sort column ascending" style="width: 50px;">Role</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Email: activate to sort column ascending" style="width: 139px;">Division
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Joining Date: activate to sort column ascending" style="width: 96px;">
                                    Office</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Action: activate to sort column ascending" style="width: 49px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic1.jpg" alt=""></td>
                                <td>16661611616939</td>
                                <td>Vivi Laila Aryani</td>
                                <td>puti.adriansyah@yolanda.go.id</td>
                                <td>CS</td>
                                <td><a href="javascript:void(0);"><strong>et</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>assumenda</strong></a></td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            {{-- <tr role="row" class="even"> 
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic2.jpg" alt=""></td>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Female</td>
                                <td>M.COM., P.H.D.</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2011/07/25</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic3.jpg" alt=""></td>
                                <td>Ashton Cox</td>
                                <td>Junior Technical</td>
                                <td>Male</td>
                                <td>B.COM., M.COM.</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2009/01/12</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic4.jpg" alt=""></td>
                                <td>Cedric Kelly</td>
                                <td>Developer</td>
                                <td>Male</td>
                                <td>B.COM., M.COM.</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2012/03/29</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic5.jpg" alt=""></td>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Female</td>
                                <td>B.A, B.C.A</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2008/11/28</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic6.jpg" alt=""></td>
                                <td>Brielle Williamson</td>
                                <td>Specialist</td>
                                <td>Male</td>
                                <td>B.COM., M.COM.</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2012/12/02</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic7.jpg" alt=""></td>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>Female</td>
                                <td>B.A, B.C.A</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2012/08/06</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic8.jpg" alt=""></td>
                                <td>Rhona Davidson</td>
                                <td>Integration</td>
                                <td>Male</td>
                                <td>B.TACH, M.TACH</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2010/10/14</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="odd">
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic9.jpg" alt=""></td>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>Female</td>
                                <td>B.A, B.C.A</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2009/09/15</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr role="row" class="even">
                                <td class="sorting_1"><img class="rounded-circle" width="35"
                                        src="images/profile/small/pic10.jpg" alt=""></td>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Male</td>
                                <td>B.COM., M.COM.</td>
                                <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                <td><a href="javascript:void(0);"><strong>info@example.com</strong></a></td>
                                <td>2008/12/13</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                    <div class="dataTables_info" id="example3_info" role="status" aria-live="polite">Showing 1 to 10 of
                        30 entries</div>
                    <div class="dataTables_paginate paging_simple_numbers" id="example3_paginate"><a
                            class="paginate_button previous disabled" aria-controls="example3" data-dt-idx="0"
                            tabindex="0" id="example3_previous"><i class="fa fa-angle-double-left"
                                aria-hidden="true"></i></a><span><a class="paginate_button current"
                                aria-controls="example3" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                                aria-controls="example3" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button "
                                aria-controls="example3" data-dt-idx="3" tabindex="0">3</a></span><a
                            class="paginate_button next" aria-controls="example3" data-dt-idx="4" tabindex="0"
                            id="example3_next"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
