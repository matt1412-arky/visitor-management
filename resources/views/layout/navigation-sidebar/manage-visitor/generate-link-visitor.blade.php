@extends('layout.apps')
@section('title', 'Generate')
@section('content')
    @livewire('generate.generate-link-controller')
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
                    <p>Link Visitor Form : <a href="{{ Request::url() }}">Link-visitor.com</a> </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
