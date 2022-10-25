@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')

    {{--  <div class="col-md float-right text-end">
        <button type="button" wire:click.lazy="openModalDialog()" class="btn btn-rounded btn-success">
            <span class="btn-icon-start text-dark"><i class="fa fa-plus"></i>
            </span>Add New</button>
    </div>  --}}

    @include('components.menus')
@endsection
