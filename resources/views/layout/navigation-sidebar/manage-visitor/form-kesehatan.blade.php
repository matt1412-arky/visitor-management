@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Form Health</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-4 col-xxl-6 col-3">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                        <label class="form-check-label" for="customCheckBox1">I have had my first vaccine</label>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-3">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                        <label class="form-check-label" for="customCheckBox2">I have had my second vaccine</label>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-3">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                        <label class="form-check-label" for="customCheckBox3">I have had my first booster vaccine</label>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-4">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                        <label class="form-check-label" for="customCheckBox3">I have had my second booster vaccine</label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn me-2 btn-google">Submit</button>
                <br>

                <a href="{{ route('home.webcame') }}" class="btn me-2 btn-google" style="color:white">Take MyPhoto</a>


            </div>
        </div>
    @endsection
