@extends('layout.apps')
@section('title', 'Visitor Feedback')
@section('content')
    <div class="container-fluid" style="width: 916px; height: 280.56px;">
        <div class="row">
            <div class="card" style="width: 95%; height: 30%;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h4 class="card-title">Visitor Feedback</h4>
                        </div>
                        {{-- <div class="card-body"> --}}
                        <div class="basic-form my-3">
                            <form>
                                <h5>Seberapa puas Anda dengan pelayanan yang diberikan di tempat kami?</h5>
                                <div class="mb-3 mb-0 rating">

                                    <div class="mb-3 mb-0">
                                        <div class="radio">
                                            <label><input type="radio" name="optradio"> Sangat puas</label>
                                        </div>
                                        <div class="radio">
                                            <label><input type="radio" name="optradio"> Puas</label>
                                        </div>
                                        <div class="radio disabled">
                                            <label><input type="radio" name="optradio"> Netral</label>
                                        </div>
                                        <div class="radio disabled">
                                            <label><input type="radio" name="optradio"> Tidak puas</label>
                                        </div>
                                        <div class="radio disabled">
                                            <label><input type="radio" name="optradio"> Sangat tidak
                                                puas</label>
                                        </div>
                                    </div>

                                    <h5>Bagaimana pendapat Anda mengenai kualitas fasilitas yang kami sediakan?</h5>
                                    <div class="mb-3 mb-0 rating">

                                        <div class="mb-3 mb-0">
                                            <div class="radio">
                                                <label><input type="radio" name="optradio"> Sangat puas</label>
                                            </div>
                                            <div class="radio">
                                                <label><input type="radio" name="optradio"> Puas</label>
                                            </div>
                                            <div class="radio disabled">
                                                <label><input type="radio" name="optradio"> Netral</label>
                                            </div>
                                            <div class="radio disabled">
                                                <label><input type="radio" name="optradio"> Tidak puas</label>
                                            </div>
                                            <div class="radio disabled">
                                                <label><input type="radio" name="optradio"> Sangat tidak
                                                    puas</label>
                                            </div>
                                        </div>

                                        <h5>Seberapa nyaman Anda selama mengunjungi tempat kami?</h5>
                                        <div class="mb-3 mb-0 rating">

                                            <div class="mb-3 mb-0">
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio"> Sangat puas</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio"> Puas</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" name="optradio"> Netral</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" name="optradio"> Tidak puas</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" name="optradio"> Sangat tidak
                                                        puas</label>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- <h5>Bagaimana kesan Anda terhadap staf kami? Apakah mereka ramah dan membantu?
                                        </h5>
                                        <div class="mb-3 mb-0 rating">

                                            <div class="mb-3 mb-0">
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio"> Sangat puas</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio"> Puas</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" name="optradio"> Netral</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" name="optradio"> Tidak puas</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" name="optradio"> Sangat tidak
                                                        puas</label>
                                                </div>
                                            </div>
                                        </div>

                                        <h5>Seberapa efektif pertemuan ini dalam mencapai tujuan yang telah ditetapkan?
                                        </h5>
                                        <div class="mb-3 mb-0 rating">

                                            <div class="mb-3 mb-0">
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio"> Sangat puas</label>
                                                </div>
                                                <div class="radio">
                                                    <label><input type="radio" name="optradio"> Puas</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" name="optradio"> Netral</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" name="optradio"> Tidak puas</label>
                                                </div>
                                                <div class="radio disabled">
                                                    <label><input type="radio" name="optradio"> Sangat tidak
                                                        puas</label>
                                                </div>
                                            </div> --}}
                                    </div>

                                    <button type="button" class="btn btn-google" id="btnCheckOut"
                                        style="color:white;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endsection
