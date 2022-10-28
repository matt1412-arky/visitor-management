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
                        <form>
                            <div class="row ">

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Package Menu Name</label>
                                    <input type="text" class="form-control" placeholder="package menu name">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Food</label>
                                    <input type="text" class="form-control" placeholder="food">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Beverage</label>
                                    <input type="text" class="form-control" placeholder="beverage">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Quantity</label>
                                    <input type="number" class="form-control" placeholder="quantity">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Cost</label>
                                    <input type="number" class="form-control" placeholder="cost">
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Picture</label><span class="text-muted">(optional)</span>
                                    <div class="input-group mb-2">
                                        <div class="form-file">
                                            <input type="file" wire:model.defer='picture' placeholder="picture"
                                                class="form-file-input form-control">
                                        </div>
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    @error('picture')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                            </div>
                            <button type="submit" class="btn btn-google">Send to GA</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
