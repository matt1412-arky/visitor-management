<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcode | Bintang Toe Joe</title>
    <link href="support/css/style.css" rel="stylesheet" />
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        {{-- overflow: hidden; --}}
    }

    #navmenu {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #navmenu li {
        padding: 0 1em;
    }
</style>

<body style="background-color: #fff;">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-xl-2 offset-1">
                <img class="rounded img-responsive" src="{{ asset('support/images/avatar/login-b7.jpg') }}"
                    width="200" height="100" alt="">
            </div>
        </div>
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
                                                    <div class="dataTables_length" id="example4_length"><label>Show
                                                            <select name="example4_length" aria-controls="example4"
                                                                class="">
                                                                <option value="10">10</option>
                                                                <option value="25">25</option>
                                                                <option value="50">50</option>
                                                                <option value="100">100</option>
                                                            </select> entries</label></div>
                                                    <div id="example4_filter" class="dataTables_filter">
                                                        <label>Search:<input type="search" class=""
                                                                placeholder="" aria-controls="example4"></label>
                                                    </div>
                                                    <table class="table table-responsive-md">
                                                        <thead>
                                                            <tr>
                                                                <th style="width:80px;"><strong></strong></th>
                                                                <th><strong>VISITOR ID</strong></th>
                                                                <th><strong>NAME</strong></th>
                                                                <th><strong>PHONE</strong></th>
                                                                <th><strong>DATE</strong></th>
                                                                <th><strong>TIME</strong></th>
                                                                <th><strong>INVITATION FROM</strong></th>
                                                                <th><strong>TRANSPOTATION USED</strong></th>
                                                                <th><strong>STATUS</strong></th>
                                                                <th><strong>ACTION</strong></th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><strong>01</strong></td>
                                                                <td>Jackson902384</td>
                                                                <td>Dr. Jackson</td>
                                                                <td>0826*******</td>
                                                                <td>Thursday, 23rd,June,2002</td>
                                                                <td>09:00am</td>
                                                                <td>names/divisi</td>
                                                                <td>Car</td>
                                                                <td><span
                                                                        class="badge light badge-success">Ongoing</span>
                                                                </td>
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
                                                                                    <circle fill="#000000"
                                                                                        cx="5" cy="12"
                                                                                        r="2">
                                                                                    </circle>
                                                                                    <circle fill="#000000"
                                                                                        cx="12" cy="12"
                                                                                        r="2">
                                                                                    </circle>
                                                                                    <circle fill="#000000"
                                                                                        cx="19" cy="12"
                                                                                        r="2">
                                                                                    </circle>
                                                                                </g>
                                                                            </svg>
                                                                        </button>
                                                                        <div class="dropdown-menu">
                                                                            <a class="dropdown-item"
                                                                                href="#">Edit</a>
                                                                            <a class="dropdown-item"
                                                                                href="#">Delete</a>
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                    <div class="dataTables_info" id="example4_info" role="status"
                                                        aria-live="polite">Showing 1 to 10 of 30 entries</div>
                                                    <div class="dataTables_paginate paging_simple_numbers"
                                                        id="example4_paginate"><a
                                                            class="paginate_button previous disabled"
                                                            aria-controls="example4" data-dt-idx="0" tabindex="0"
                                                            id="example4_previous"><i class="fa fa-angle-double-left"
                                                                aria-hidden="true"></i></a><span><a
                                                                class="paginate_button current" aria-controls="example4"
                                                                data-dt-idx="1" tabindex="0">1</a><a
                                                                class="paginate_button " aria-controls="example4"
                                                                data-dt-idx="2" tabindex="0">2</a><a
                                                                class="paginate_button " aria-controls="example4"
                                                                data-dt-idx="3" tabindex="0">3</a></span><a
                                                            class="paginate_button next" aria-controls="example4"
                                                            data-dt-idx="4" tabindex="0" id="example4_next"><i
                                                                class="fa fa-angle-double-right"
                                                                aria-hidden="true"></i></a>
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
        </div>
        <div class="row">
            <div class="col-xl-10 offset-1">
                <div class="card">
                    <div class="card-body ">
                        <ul id="navmenu">
                            <li>
                                <a href="{{ route('visitor-data') }}" class="btn btn-google btn-lg">
                                    Visitor Data
                                </a>
                            </li>
                            {{-- <li>
                                <a data-bs-toggle="modal" href="#" data-bs-target=".bd-example-modal-lg"
                                    type="button" class="btn btn-google btn-lg" onclick="openModal()">
                                    Make a temporary account
                                </a>
                            </li> --}}
                            <li>
                                <a href="{{ route('track-visitor') }}" class="btn btn-google btn-lg">
                                    Track Visitor
                                </a>
                            </li>
                            <li>
                                <a href="" class="btn btn-google btn-lg">
                                    Refresh Data
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg show" id="generateAccount" tabindex="-1" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Generate Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="closeModal()">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <p>contoh usernma</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <p>contoh password</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            const modalGenerateAccount = document.querySelector('#generateAccount')

            // satu function aja
            function openModal() {
                modalGenerateAccount.style.display = 'block';
            }

            function closeModal() {
                modalGenerateAccount.style.display = 'none';
            }
        </script>
</body>

</html>
