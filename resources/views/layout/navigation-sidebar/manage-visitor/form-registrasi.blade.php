@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    <div class="row">
        <div class="col-xl-8 col-lg-12 shadow-box">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Visitor Registration Form</h4>
                    <span class="text-bold text-red"><b>*Please Turn on your GPS for the Duration of Your Visits</b> </span>
                </div>
                
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row ">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4">Full Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Phone number</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Number of Visitors</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Invitation from</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Visitation purpose</label>
                                    <input type="" class="form-control">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Time check in</label>
                                    <input type="time" class="form-control">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Time check out</label>
                                    <input type="time" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
