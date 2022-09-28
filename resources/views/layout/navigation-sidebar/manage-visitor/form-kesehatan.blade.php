@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Checkbox</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-xl-4 col-xxl-6 col-6">
                    <div class="form-check custom-checkbox mb-3">
                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                        <label class="form-check-label" for="customCheckBox1">Checkbox 1</label>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-6">
                    <div class="form-check custom-checkbox mb-3 checkbox-info">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox2" required="">
                        <label class="form-check-label" for="customCheckBox2">Checkbox 2</label>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-6">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox3" required="">
                        <label class="form-check-label" for="customCheckBox3">Checkbox 3</label>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-6">
                    <div class="form-check custom-checkbox mb-3 checkbox-warning">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox4" required="">
                        <label class="form-check-label" for="customCheckBox4">Checkbox 4</label>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-6">
                    <div class="form-check custom-checkbox mb-3 checkbox-danger">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox5" required="">
                        <label class="form-check-label" for="customCheckBox5">Checkbox 5</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-check custom-checkbox mb-3 check-xs">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox6" required="">
                        <label class="form-check-label" for="customCheckBox6"></label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check custom-checkbox mb-3 checkbox-info">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox7" required="">
                        <label class="form-check-label" for="customCheckBox7"></label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check custom-checkbox mb-3 checkbox-success check-lg">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox8" required="">
                        <label class="form-check-label" for="customCheckBox8"></label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-check custom-checkbox mb-3 checkbox-warning check-xl">
                        <input type="checkbox" class="form-check-input" checked="" id="customCheckBox9" required="">
                        <label class="form-check-label" for="customCheckBox9"></label>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
