@extends('layout.apps')
@section('title', 'Generate')
@section('content')
    <div class="row">
        <div class="col-xl-6">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title">Generate Link Registrasi</h5>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Time</span>
                        <input type="time" class="form-control">
                    </div>
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter">Generate</button>
                </div>
                <div class="card-footer">
                    <p class="card-text text-dark">Last updateed 3 min ago</p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade " id="exampleModalCenter" style="display: none;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Link Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <p>username : {{ Str::random(10) }}</p>
                    <p>password : {{ Str::random(10) }}</p>
                    <p>Link Visitor Form : <a href="">{{ Request::url() }}</a> </p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
