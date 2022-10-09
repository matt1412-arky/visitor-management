@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    {{-- berada pada conainer fluid --}}
    {{-- <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">How good is our service?</h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row ">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Give us rating</label><br>
                                    <div>
                                        <img src="https://cms.dailysocial.id/wp-content/uploads/2013/03/rating-system.png"
                                            class="rounded" alt="" height="250" width="500">
                                    </div>

                                </div>
                            </div>
                            <button type="submit" class="btn btn-google">Confirm & checkout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md">
                    <h4 class="card-title">Visitor Feedback</h4>
                </div>
                {{-- <div class="col-md float-right text-end">
                    <button type="button" class="btn btn-rounded btn-success"><span class="btn-icon-start text-dark"><i
                                class="fa fa-plus"></i>
                        </span>Add</button>
                    <button type="button" class="btn btn-rounded btn-success"><span class="btn-icon-start text-dark"><i
                                class="fa fa-trash-alt"></i>
                        </span>Delete</button>
                </div> --}}
                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="mb-3 mb-0">
                                <h5>How satisfied are you with the service in our place?</h5>
                                {{-- <label class="form-label fs-4"><b class="text-red">*</b>Give us rating</label><br> --}}
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 1</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 2</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 3</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 4</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 5</label>
                            </div>
                            <div class="mb-3 mb-0">
                                <h5>Are the instructions from the guide given easy to understand?</h5>
                                {{-- <label class="form-label fs-4"><b class="text-red">*</b>Give us rating</label><br> --}}
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 1</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 2</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 3</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 4</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 5</label>
                            </div>
                            <div class="mb-3 mb-0">
                                <h5>How satisfied are you with our facilities?</h5>
                                {{-- <label class="form-label fs-4"><b class="text-red">*</b>Give us rating</label><br> --}}
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 1</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 2</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 3</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 4</label>
                                <label class="radio-inline me-5"><input type="radio" name="optradio"> 5</label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade bd-example-modal-md show" tabindex="-1" style="display: block;" aria-modal="true"
                role="dialog" id="ModalGPS">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Alert GPS</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal">
                            </button>
                        </div>
                        <div class="modal-body">
                            <h5>Please turn on your GPS before filling this form to update your last location before leaving
                            </h5>
                            <button type="button" class="btn btn-google">Update Location</button>
                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal"
                                onclick="closeModal()">Close</button>
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
    </div>
@endsection
