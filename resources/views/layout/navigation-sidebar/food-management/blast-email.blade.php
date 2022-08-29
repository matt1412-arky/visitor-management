@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">

        <div class="col-xl-12 col-xxl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Blast Email</h4>
                </div>

                <div class="card-body custom-ekeditor">
                    <div class="form-group mb-3">
                        <label for="" class="fs-18">
                            <b>Subject</b>
                        </label>
                        <input name="" id="" class="form-control mb-2 border-dark" />
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="fs-18"><b>Description</b></label>
                        <div id="ckeditor" style="display: none;"></div>
                        <div class="ck ck-reset ck-editor ck-rounded-corners" role="application" dir="ltr"
                            lang="en" aria-labelledby="ck-editor__label_e5ead39a9b31e69139388bef3908f8928"><label
                                class="ck ck-label ck-voice-label"
                                id="ck-editor__label_e5ead39a9b31e69139388bef3908f8928">Rich
                                Text Editor</label>
                        </div>

                    </div>
                    <div class="form-group mb-3">
                        <label for="attachment" class="fs-18"><b>Attachment</b></label><br>
                        <div class="input-group">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control border-dark">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <button class="btn btn-google mt-2">Blast Email</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
