@extends('layout.apps')
@section('title', 'Visitor Feedback')
@section('content')
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
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md">
                    <h4 class="card-title">Visitor Feedback</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <h5>How satisfied are you with the service in our place?</h5>
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

                            <h5>Are the instructions from the guide given easy to understand?</h5>
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

                            <h5>How satisfied are you with our facilities?</h5>
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
                            <button type="button" class="btn btn-google" id="btnCheckOut"
                                style="color:white;">Checkout</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- <div class="modal fade bd-example-modal-md show" tabindex="-1" style="display: block;" aria-modal="true"
                role="dialog" id="ModalGPS">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Alert GPS</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Please turn on your GPS before filling this form to update your last location before
                                leaving
                            </h5>
                            <button type="button" class="btn btn-google">Update Location</button>
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal"
                                onclick="closeModal()">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        function closeModal() {
            const modalGps = document.getElementById('ModalGPS')
            modalGps.style.display = 'none';
        }
    </script>
@endsection
@push('scripts')
    <script>
        const btnCheckOut = document.querySelector('#btnCheckOut')
        btnCheckOut.addEventListener('click', (e) => {
            Swal.fire({
                title: 'Checkout Success!',
                text: 'You may leave the area',
                type: 'success',
                timer: 5000,
                confirmButtonText: 'Save',
                timerProgressBar: true,
                onClose: () => window.location.href = '/h/dashboard-page'
            })
        })
    </script>
@endpush --}}
