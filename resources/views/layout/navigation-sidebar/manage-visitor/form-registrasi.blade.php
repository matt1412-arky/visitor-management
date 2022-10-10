@extends('layout.apps')
@section('title', 'Register')
@section('content')
    {{-- berada pada conainer fluid --}}
    {{--  {{ $nama_karyawan }}  --}}
    @livewire('visitor.visitor-register')
@endsection
