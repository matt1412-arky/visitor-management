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
                                    @error('nama_paket_menu')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Food</label>
                                    <input name="makanan" type="text" required="required" class="form-control"
                                        placeholder="food">
                                    @error('makanan')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Beverage</label>
                                    <input name="minuman" required="masukkan" type="text" class="form-control"
                                        placeholder="beverage">
                                    @error('minuman')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>


                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Quantity</label>
                                    <input name="jumlah" type="number" class="form-control" placeholder="quantity">
                                    @error('jumlah')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4"><b class="text-red">*</b>Cost</label>
                                    <input name="cost" type="number" class="form-control" placeholder="cost">
                                    @error('cost')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
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
@push('scripts')
    <script type="text/javascript">
        const insertMenuForm = document.getElementById('insert-menu');
        /**insertMenuForm.addEventListener('submit', (e) => {
            console.log('adada')
            e.preventDefault();
            e.stopPropagation();
        })
        */
    </script>
@endpush
