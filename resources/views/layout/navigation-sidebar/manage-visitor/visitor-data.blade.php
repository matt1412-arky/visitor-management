@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Visitor Data</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
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
                                    <th><strong>NUM OF VISITOR</strong></th>
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
                                    <td>9 visitors</td>
                                    <td><span class="badge light badge-success">Ongoing</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp"
                                                data-bs-toggle="dropdown">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24">
                                                        </rect>
                                                        <circle fill="#000000" cx="5" cy="12" r="2">
                                                        </circle>
                                                        <circle fill="#000000" cx="12" cy="12" r="2">
                                                        </circle>
                                                        <circle fill="#000000" cx="19" cy="12" r="2">
                                                        </circle>
                                                    </g>
                                                </svg>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Edit</a>
                                                <a class="dropdown-item" href="#">Delete</a>
                                            </div>
                                        </div>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Checkout</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong></strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th><strong>DATE</strong></th>
                                    <th><strong>Checkout</strong></th>
                                    <th><strong>Feedback</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>01</strong></td>
                                    <td>Mr. Bobby</td>
                                    <td>Senin,12/24/2002</td>
                                    <td>08.00am</td>
                                    <td>*****</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
