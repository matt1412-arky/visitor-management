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
                <div class="col-xl-4 col-xxl-6 col-4">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                        <label class="form-check-label" for="customCheckBox1">Vaksin 1</label>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-4">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox2" required="">
                        <label class="form-check-label" for="customCheckBox2">Vaksin 2</label>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-4">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox3" required="">
                        <label class="form-check-label" for="customCheckBox3">Booster I</label>
                    </div>
                </div>

                <div class="col-xl-4 col-xxl-6 col-4">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox3" required="">
                        <label class="form-check-label" for="customCheckBox3">Booster II</label>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn me-2 btn-google">Submit</button>
                <br>

<<<<<<< HEAD
                <button type="button" class="btn me-2 btn-google">
                    {{-- <a href="{{ route('home.capture-KTP') }}" style="color:white">Take capture KTP</a>  --}}
                </button>
=======
                <a href="{{ route('home.capture-ktp') }}" class="btn me-2 btn-google" style="color:white">Take capture
                    KTP</a>

>>>>>>> 1e6fad9f8795c60ab7d80da319e5e19cc12e31fd

            </div>
        </div>
    @endsection
