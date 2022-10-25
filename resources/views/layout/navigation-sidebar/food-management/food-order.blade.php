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
    </div>
@endsection
