@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Visitor Arival</h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row ">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Name Visitor</label>
                                    <input type="text" class="form-control" placeholder="Name visitor" name="visitor">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Scheduled Time</label>
                                    <input type="time" class="form-control" placeholder="scheduled time">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Arrival Time</label>
                                    <input type="time" class="form-control" placeholder="arrival time">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-google"
                                style="color:white;">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
