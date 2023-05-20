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
                        <div class="basic-form my-3">
                            <form>
                                <div class="form-group">
                                    <label for="visitation_purpose">Visitation Purpose:</label>
                                    <select class="form-control" id="visitation_purpose" name="visitation_purpose">
                                        <option value="meeting">Meeting</option>
                                        <option value="company_visit">Company Visit</option>
                                    </select>
                                </div>

                                {{-- @if ($visitation_purpose == 'meeting') --}}
                                <h5>Seberapa efektif pertemuan ini dalam mencapai tujuan yang telah ditetapkan?</h5>
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
                                            <label><input type="radio" name="optradio"> Sangat tidak puas</label>
                                        </div>
                                    </div>
                                </div>

                                {{-- @elseif ($visitation_purpose == 'company_visit') --}}
                                <h5>Bagaimana pendapat Anda mengenai fasilitas yang disediakan selama kunjungan?</h5>
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
                                            <label><input type="radio" name="optradio"> Sangat tidak puas</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- @endif --}}

                                <button type="button" class="btn btn-google" id="btnCheckOut"
                                    style="color:white;">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
