@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Food Order</h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row ">

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Food Menu</label>
                                    <input type="text" class="form-control" placeholder="food menu">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Beverages</label>
                                    <input type="text" class="form-control" placeholder="beverages">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Seats Position</label>
                                    <input type="number" class="form-control" placeholder="seats position">
                                </div>

                            </div>
                            <button type="submit" class="btn btn-google">Confirm Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
