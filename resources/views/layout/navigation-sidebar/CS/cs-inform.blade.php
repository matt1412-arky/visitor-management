@extends('layout.apps')
@section('title', 'CS Information')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Information CS</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
