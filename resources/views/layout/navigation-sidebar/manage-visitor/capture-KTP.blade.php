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
            <a href="javascript:void(0);" class="btn btn-primary">Take capture</a>
        </div>
        {{-- <div class="card-footer">
            <p class="card-text text-dark">Last updateed 3 min ago</p>
        </div> --}}
    </div>
@endsection
