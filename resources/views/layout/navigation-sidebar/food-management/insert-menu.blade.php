@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Insert Menu</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('home.store-menu') }}" method="post" id="insert-menu"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row ">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Package Menu Name</label>
                                    <input name="nama_paket_menu" required type="text" class="form-control"
                                        placeholder="package menu name">
                                    <span class="text-danger error-text nama_paket_menu_error"></span>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Food</label>
                                    <select id='sel_makanan' name="" class="form-control" multiple="multiple">
                                        <option value="0">--select makanan--</option>
                                    </select>
                                    <span class="text-danger error-text makanan_error"></span>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Beverage</label>
                                    <select id='sel_minuman' name="minuman" class="form-control" multiple="multiple">
                                        <option value="0">--select minuman--</option>
                                    </select>
                                </div>


                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Quantity</label>
                                    <input name="jumlah" type="number" class="form-control" placeholder="quantity">
                                    <span class="text-danger error-text jumlah_error"></span>

                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Cost</label>
                                    <input name="cost" type="number" class="form-control" placeholder="cost">
                                    <span class="text-danger error-text cost_error"></span>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Picture</label><span class="text-muted">(optional)</span>
                                    <div class="input-group mb-2">
                                        <div class="form-file">
                                            <input type="file" name="picture" placeholder="picture"
                                                class="form-file-input form-control">
                                        </div>
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <span class="text-danger error-text picture_error"></span>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-google">Send to GA
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('main.js') }}"></script>
@endpush
