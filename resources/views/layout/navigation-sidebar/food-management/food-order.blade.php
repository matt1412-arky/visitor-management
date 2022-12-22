@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- <div class="row">
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
                                    <label class="form-label fs-4"><b class="text-red">*</b>Choose Menu</label>
                                    <select class="default-select form-control wide mb-3" style="display: none;">
                                        <option>Packet A (.....;.........;.......)</option>
                                        <option>Packet B (.....;.........;.......)</option>
                                        <option>Packet C (.....;.........;.......)</option>
                                    </select>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-google">Confirm Order</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="row mt-0">
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">
                            Food Order
                        </h2>
                        <div class="text-muted mt-1">1-12 of 241 foods</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-cards">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card card-sm">
                            <a href="#" class="d-block"><img src="/support/images/cam.png" class="card-img-top"></a>
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-facebook">Cofirm Order</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
