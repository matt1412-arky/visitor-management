@extends('layout.apps')
@section('title', ' Cleaning Service Information ')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Cleaning Service Information</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>No</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Picture</strong></th>
                                    <th><strong>Location</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>01</strong></td>
                                    <td>Mr. Bobby</td>
                                    <td>(Picture location)</td>
                                    <td>Location Position need to clean</td>
                                    <td><span class="badge light badge-success">Done</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
