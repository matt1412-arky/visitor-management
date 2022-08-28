@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-xl-9 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Lost Items</h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form>
                            <div class="row ">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Item Name</label>
                                    <input type="text" class="form-control" placeholder="Item Name">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Item Image</label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input type="file" class="form-file-input form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Status</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">Taken</option>
                                        <option value="">Not Taken</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-google" style="color:white;">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- //data barang hilang --}}
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-blog">
                        <h5 class="text-dark d-inline">Item Name</h5>
                        <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2021/12/14/61b801d1116d0-brand-tas-lokal-rv-reloas-victory_1265_711.jpg"
                            alt="" class="img-fluid mt-4 mb-4 w-100 rounded">
                        <span class="badge badge-danger">Not Taken</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-blog">
                        <h5 class="text-dark d-inline">Item Name</h5>
                        <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2021/12/14/61b801d1116d0-brand-tas-lokal-rv-reloas-victory_1265_711.jpg"
                            alt="" class="img-fluid mt-4 mb-4 w-100 rounded">
                        <span class="badge badge-danger">Not Taken</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="profile-blog">
                        <h5 class="text-dark d-inline">Item Name</h5>
                        <img src="https://thumb.viva.co.id/media/frontend/thumbs3/2021/12/14/61b801d1116d0-brand-tas-lokal-rv-reloas-victory_1265_711.jpg"
                            alt="" class="img-fluid mt-4 mb-4 w-100 rounded">
                        <span class="badge badge-danger">Not Taken</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
