@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    <style>
        #camera {
            border-radius: 5px;
            margin: -100px auto 0;
        }

        #frame-webcame {
            margin-top: 20px;
        }

        #btnCapture {}
    </style>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Take capture KTP</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <form method="POST" action="{{ route('home.webcame') }}">
                    @csrf
                    <div class="col-md-6 col-lg-12">
                        <label class="form-label fs-4"><b class="text-red">*</b>NIK/No. SIM</label>
                        <input type="number" class="form-control" placeholder="NIK/No. SIM" name="nik">
                        @error('nik')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                    @endif
                    <div class="frame" id="frame-webcame">
                        <div id="camera"></div>
                    </div>
                    <button type="button" id="btnCapture" class="btn me-2 btn-google">Take Picture</button>
                    <input type="hidden" name="image" class="image-tag">
                    <div class="col-md-6">
                        <div id="result">Your captured image will appear here...</div>
                    </div>
                    <center>
                        <div class="col-xl-4 col-xxl-6 col-4">
                            <div class="form-check custom-checkbox mb-3 checkbox-success">
                                <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                                <label class="form-check-label" for="customCheckBox1">By agreeing to this, I promise that
                                    this ID card
                                    data is genuine.</label>
                            </div>
                        </div>
                    </center>
                    <button type="submit" id="btnSubmit" class="btn me-2 btn-google">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <script language="JavaScript">
        const btnCapture = document.querySelector('#btnCapture');
        const btnSubmit = document.querySelector('#btnSubmit');
        const isCheck = document.querySelector('input[type=checkbox]');

        btnSubmit.style.visibility = 'hidden';
        isCheck.addEventListener('click', (e) => {
            !(isCheck.checked) ?
            btnSubmit.style.visibility = 'hidden':
                btnSubmit.style.visibility = 'visible'
        })
        /*webcame*/
        Webcam.set({
            width: 600,
            height: 600,
            image_format: 'jpeg',
            jpeg_quality: 90,
            dest_width: 500,
            dest_height: 500,
        });

        Webcam.attach('#camera');
        btnCapture.addEventListener('click', (e) => {
            e.preventDefault();
            Webcam.snap(async (picture) => {
                document.querySelector('.image-tag').value = await picture;
                document.querySelector('#result').innerHTML = await '<img src="' + picture + '"/>'
            })
        })
    </script>
@endpush
