@extends('layout.apps')
@section('title', 'Lost Items')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-xl-9 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Lost Items</h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('home.lost-item.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Item name</label>
                                    <input name="item_name" type="text" class="form-control" placeholder="Item Name">
                                    @error('item_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Item image</label>
                                    <div class="input-group">
                                        <div class="form-file">
                                            <input name="item_image" type="file" class="form-file-input form-control">
                                            @error('item_image')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="Not Taken">Not Taken</option>
                                        <option value="Taken">Taken</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Item belongs to visitor</label>
                                    <select name="id_visitor" class="form-control">
                                        <option value="">Choose Visitor</option>
                                        @foreach ($visitors as $visitor)
                                            <option value="{{ $visitor->id }}">{{ $visitor->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_visitor')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Employee who found it</label>
                                    <select name="id_karyawan" class="form-control">
                                        <option value="">Choose Employee</option>
                                        @foreach ($employees as $employee)
                                            @if ($employee->name !== 'admin')
                                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('id_karyawan')
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
        <div class="col-md-12">
            <form action="{{ route('home.lost-item.index') }}" method="GET" class="mb-3 position-relative">
                <div class="input-group d-flex justify-content-end">
                    <input type="text" name="search" class="form-control" placeholder="Search by Item Name"
                        value="{{ request('search') }}">
                    <button type="submit" class="btn btn-primary position-absolute top-0 end-0">Search</button>
                </div>
            </form>
        </div>
        @if ($lostItems->isEmpty())
            <div class="col-md-12">
                <div class="alert text-center text-dark" role="alert">
                    No matching data found.
                </div>
            </div>
        @endif
        @foreach ($lostItems as $item)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-blog">
                            <h5 class="text-dark d-inline">{{ $item->item_name }}</h5>
                            <img src="{{ asset('storage/images/' . $item->item_image) }}" alt=""
                                class="img-fluid mt-4 mb-4 w-100 rounded">
                            <div class="d-flex align-items-center justify-content-between">
                                <span
                                    class="badge badge-{{ $item->status === 'Not Taken' ? 'danger' : 'success' }}">{{ $item->status }}</span>
                                @if ($item->status === 'Not Taken')
                                    <form action="{{ route('home.lost-item.update', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="Taken">
                                        <button type="submit" class="btn btn-primary">Mark as Taken</button>
                                    </form>
                                @elseif ($item->status === 'Taken')
                                    <form action="{{ route('home.lost-item.update', $item->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="status" value="Not Taken">
                                        <button type="submit" class="btn btn-warning">Mark as Not Taken</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
