@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Visitor Registration</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the
                        additional content. This content is a little</p>
                </div>
                <img class="card-img-bottom img-fluid" src="{{ asset('support/icons/barcode/QR_code1.png') }}"
                    alt="Card image cap">

            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">GPS</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the
                        additional content. This content is a little</p>
                </div>
                <img class="card-img-bottom img-fluid" src="{{ asset('support/icons/barcode/QR_code1.png') }}"
                    alt="Card image cap">

            </div>
        </div>
        <center>
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-outline-primary ">Visitor Data</button>
                        <button type="button" class="btn btn-outline-primary ">Make a temporary account</button>
                        <button type="button" class="btn btn-outline-primary ">Track Visitor</button>
                        <button type="button" class="btn btn-outline-primary ">Refresh</button>
                    </div>
                </div>
            </div>
        </center>
    </div>
@endsection