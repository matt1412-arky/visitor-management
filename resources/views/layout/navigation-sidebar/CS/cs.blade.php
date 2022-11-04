@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')

    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Cleaning Service Form</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post" action="{{ route('home.report') }}" id="form-report-cs">
                            @csrf
                            <div class="row ">
                                <div class="mb-3 col-md-12">
                                    <input name="nik_cs" type="hidden" value="{{ auth()->user()->NIK }}" />
                                    <label class="form-label fs-4">Picture</label><span class="text-muted">(optional)</span>
                                    <div class="input-group mb-2">
                                        <div class="form-file">
                                            <input name="picture" accept="image" type="file" placeholder="picture"
                                                class="form-file-input form-control">
                                        </div>
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <span class="text-danger error-text  picture_error"></span>

                                </div>

                                <div class="mb-3 col-md-12">
                                    <label for="feedback" class="form-label fs-4"><b class="text-red">*</b>Location</label>
                                    <input name="location" type="text" class="form-control" placeholder="location">
                                    <span class="text-danger error-text location_error"></span>
                                </div>
                                <button type="submit" class="btn btn-google">Submit</button>
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
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
        });
        $(function() {
            $('#form-report-cs').on('submit', (e) => {
                e.preventDefault();
                e.stopPropagation();
                $.ajax({
                    url: e.target['action'],
                    method: e.target['method'],
                    data: new FormData(e.target),
                    processData: false,
                    dataType: "json",
                    contentType: false,
                    beforeSend: () => {
                        $(e.target).find("span.error-text").text("");
                    },
                    /**
                                error: (data) => {
                                console.log('err')
                                console.log(data);
                                $.each(data.responseJSON.errors, (prefix, val) => {
                                    $("span." + prefix + "_error").text(val[0]);
                                });
                            },
                    */
                    success: (data) => {
                        console.log('err', data)
                        if (!data.status) {
                            $.each(data.error, (prefix, val) => {
                                $("span." + prefix + "_error").text(val[0]);
                            });
                        } else {
                            Swal.fire({
                                title: data.title,
                                type: data.type,
                                text: data.msg,
                                confirmButtonText: 'Yep!',
                            });
                            $("#form-report-cs")[0].reset();
                        }
                    },
                })
            })
        })
    </script>
@endpush
