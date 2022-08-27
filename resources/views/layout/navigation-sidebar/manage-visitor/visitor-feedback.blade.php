@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">How good is our service?</h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row ">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Give us rating</label><br>
                                    <div>
                                        <img src="https://cms.dailysocial.id/wp-content/uploads/2013/03/rating-system.png"
                                            class="rounded" alt="" height="250" width="500">
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-google">Confirm & checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
