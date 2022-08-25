@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    <div class="row">
        <div class="col-xl-6 col-lg-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Visitor Registration Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row ">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b> Full Name</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>
                                
                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Phone number</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                                
                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Number of Visitors<span class="text-muted">(optional)</span></label>
                                    <input type="text" class="form-control">
                                </div>
                                
                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Invitation from</label>
                                    <input type="email" class="form-control" placeholder="">
                                </div>
                                
                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Visitation purpose</label>
                                    <input type="" class="form-control">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Time check in</label>
                                    <input type="time" class="form-control">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Time check out<span class="text-muted">(optional)</span></label>
                                    <input type="time" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection