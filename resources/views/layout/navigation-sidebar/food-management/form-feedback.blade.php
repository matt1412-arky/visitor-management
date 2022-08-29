@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Feedback Menu</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row ">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Food </label>
                                    <input type="text" class="form-control" placeholder="Food name ">
                                </div>
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Beverage </label>
                                    <input type="text" class="form-control border-dark" placeholder="Beverage">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="feedback" class="form-label fs-4"><b class="text-red">*</b>Feedback</label>
                                    <br>
                                    <textarea name="feedback" rows="5" class="form-control form-control-lg">

                                    </textarea>
                                </div>
                                <button type="submit" class="btn btn-google">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
