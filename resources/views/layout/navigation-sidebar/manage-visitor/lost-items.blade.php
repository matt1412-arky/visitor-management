@extends('layout.apps')
@section('title', 'Lost Item')
@section('content')
    <div class="container-fluid" style="width: 916px;">
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lost Items</h4>
                    </div>

                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ url('/lost-items') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row ">
                                    <div class="mb-3 col-md-6 col-lg-12">
                                        <label class="form-label fs-4"><b class="text-red">*</b>Item Name</label>
                                        <input type="text" name="item_name" class="form-control" placeholder="Item Name">
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label fs-4"><b class="text-red">*</b>Item Image</label>
                                        <div class="input-group">
                                            <div class="form-file">
                                                <input type="file" name="item_image"
                                                    class="form-file-input form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label fs-4"><b class="text-red">*</b>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="Taken">Taken</option>
                                            <option value="Not Taken">Not Taken</option>
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
        {{-- <div class="row">
            @foreach ($lostItems as $item)
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-blog">
                                <h5 class="text-dark d-inline">{{ $item->item_name }}</h5>
                                <img src="{{ asset('storage/' . $item->item_image) }}" alt=""
                                    class="img-fluid mt-4 mb-4 w-100 rounded">
                                <span class="badge badge-danger">{{ $item->status }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> --}}
    @endsection
