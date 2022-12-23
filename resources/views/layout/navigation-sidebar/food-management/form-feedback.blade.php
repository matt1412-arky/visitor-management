@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')>
    <style>
        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: start;
        }


        .rating>input {
            display: none;
        }

        .rating>label {
            position: relative;
            width: 1.1em;
            font-size: 50px;
            color: #FFD700;
            cursor: pointer;
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0;
        }

        .rating>label:hover:before,
        .rating>label:hover~label:before {
            opacity: 1 !important;
        }

        .rating>input:checked~label:before {
            opacity: 1;
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4;
        }
    </style>
    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Feedback Menu</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="POST" action="{{ route('home.feedback') }}" id="form-feedback">
                            <div class="row ">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Package Menu Name</label>
                                    <input type="text" class="form-control" placeholder="Package menu name">
                                </div>

                                <h5>Rating</h5>
                                <div class="mb-3 mb-0 rating">

                                    <input type="radio" name="rating" value="5" id="5"><label
                                        for="5">☆</label>
                                    <input type="radio" name="rating" value="4" id="4"><label
                                        for="4">☆</label>
                                    <input type="radio" name="rating" value="3" id="3"><label
                                        for="3">☆</label>
                                    <input type="radio" name="rating" value="2" id="2"><label
                                        for="2">☆</label>
                                    <input type="radio" name="rating" value="1" id="1"><label
                                        for="1">☆</label>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Picture</label><span class="text-muted">(optional)</span>
                                    <div class="input-group mb-2">
                                        <div class="form-file">
                                            <input type="file" wire:model.defer='picture' placeholder="picture"
                                                class="form-file-input form-control">
                                        </div>
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    @error('picture')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
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
@push('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
        })
        $('#form-feedback').on('submit', (e) => {
            e.preventDefault();
            $.ajax({
                url: e.target['action'],
                method: e.target['method'],
                data: new FormData(e.target),
                processData: false,
                contentType: false,
                dataType: 'json',
                beforeSend: (res) => console.log(res),
                success: (res) => console.log(res),
                error: (res) => console.log(res.responseJSON.message),
            })
        })
    </script>
@endpush
