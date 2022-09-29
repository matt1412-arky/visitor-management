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
                <div class="col-xl-4 col-xxl-6 col-6">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
                        <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                        <label class="form-check-label" for="customCheckBox1">Checkbox 1</label>
                    </div>
                </div>
                <div class="col-xl-4 col-xxl-6 col-6">
                    <div class="form-check custom-checkbox mb-3 checkbox-success">
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

            </div>
        </div>
    @endsection