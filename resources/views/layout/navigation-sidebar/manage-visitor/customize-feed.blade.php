@extends('layout.apps')
@section('title', 'Customize Feed')
@section('content')
    <div>
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
                    <div class="col-md float-right text-end">
                        <button type="button" class="btn btn-rounded btn-success"><span class="btn-icon-start text-dark"><i
                                    class="fa fa-plus"></i>
                            </span>Add</button>
                        <button type="button" class="btn btn-rounded btn-success"><span class="btn-icon-start text-dark"><i
                                    class="fa fa-trash-alt"></i>
                            </span>Delete</button>
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
                                <button type="button" class="btn btn-google" style="color:white;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
