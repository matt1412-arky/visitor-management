@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    <div class="card text-center">
        <div class="card-header">
            <h5 class="card-title">Take capture KTP</h5>
        </div>
        <div class="card-body">

            <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional
                content. This content</p>
        </div>
        <center>
            <div class="col-xl-4 col-xxl-6 col-4">
                <div class="form-check custom-checkbox mb-3 checkbox-success">
                    <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                    <label class="form-check-label" for="customCheckBox1">By agreeing to this, I promise that this ID card
                        data is genuine.</label>
                </div>
            </div>
        </center>

        {{-- <div class="card-footer">
            <p class="card-text text-dark">Last updateed 3 min ago</p>
        </div> --}}
    </div>
@endsection
