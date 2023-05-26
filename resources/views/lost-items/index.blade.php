@extends('layout.apps')
@section('title', 'Lost Items')
@section('content')
    <div class="container-fluid" style="position: relative;">
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Lost Items</h4>
                    </div>

                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('home.lost-item.store') }}" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="mb-3 col-md-6 col-lg-12">
                                        <label class="form-label fs-4"><b class="text-red">*</b>Item Name</label>
                                        <input name="itemName" type="text" name="item_name" class="form-control"
                                            placeholder="Item Name">
                                        @error('itemName')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label fs-4"><b class="text-red">*</b>Item Image</label>
                                        <div class="input-group">
                                            <div class="form-file">
                                                <input name="itemImage" type="file" name="item_image"
                                                    class="form-file-input form-control">
                                                @error('itemImage')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label fs-4"><b class="text-red">*</b>Status</label>
                                        <select name="status" name="status" class="form-control">
                                            <option value="Taken">Taken</option>
                                            <option value="Not Taken">Not Taken</option>
                                        </select>
                                        @error('status')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-google" style="color:white;">Confirm</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Data barang hilang --}}
        <div class="row">
            @foreach ($lostItems as $item)
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-blog">
                                <h5 class="text-dark d-inline">{{ $item->item_name }}</h5>
                                <img src="{{ asset('storage/' . $item->item_image) }}" alt=""
                                    class="img-fluid mt-4 mb-4 w-100 rounded">
                                <span class="badge badge-danger">{{ $item->status }}</span>
                                @if ($item->karyawan)
                                    <p>Karyawan yang menemukan: {{ $item->karyawan->nama_karyawan }}</p>
                                @endif
                                @if ($item->visitor)
                                    <p>Visitor yang mengambil: {{ $item->visitor->nama_visitor }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@livewireStyles
@livewireScripts
