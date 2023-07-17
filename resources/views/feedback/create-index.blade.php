@extends('layout.apps')
@section('title', 'Create Feedback')
@section('content')
    <div class="row">
        <div class="col-xl-9 col-lg-12">
            @if (session()->has('fail'))
                <div class="alert alert-danger">
                    {{ session()->get('fail') }}
                </div>
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif
            @if (session()->has('fail_cat'))
                <div class="alert alert-danger">
                    {{ session()->get('fail_cat') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create Feedback</h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('home.post-feedback') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <input type="hidden" value="{{ $visit->id }}" name="id_visit">
                                    <input type="hidden" value="{{ $visit->appointment['visitation_purpose'] }}"
                                        name="category_name">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Question Category</label>
                                    <select class="form-control" name="id_question">
                                        <option value="">--choose--</option>
                                        @foreach ($questions as $category)
                                            <option value="{{ $category['id'] }}">{{ __($category['category']) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('id_question')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-google" style="color:white;">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
