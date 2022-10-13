<div class="row">
    <div class="col-xl-6 col-lg-12 mx-auto">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Visitor Registration Form</h4>
                <span class="text-bold text-red"><b>*Please Turn on your GPS for the Duration of Your Visits</b> </span>
            </div>

            <div class="card-body">
                <div class="basic-form">
                    <form wire:submit.prevent="register" class="" id="form-register">
                        <div class="row ">
                            <div class="mb-3 col-md-6 col-lg-12">
                                <label class="form-label fs-4"><b class="text-red">*</b> Full Name</label>
                                <input type="text" wire:model='visitor.name' class="form-control"
                                    placeholder="fullname">
                                @error('visitor.name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>Age</label>
                                <input type="text" wire:model='visitor.age' class="form-control" placeholder="age">
                                @error('visitor.age')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>Phone number</label>
                                <input type="text" wire:model='visitor.phone' class="form-control"
                                    placeholder="phone number">
                                @error('visitor.phone')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4">Transportation used</label><span
                                    class="text-muted">(optional)</span>
                                <input type="text" wire:model='visitor.transportasi_visitor'
                                    placeholder="transportasi visitor"class="form-control">
                                @error('visitor.transportasi_visitor')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4">Vehicle License Plate Number</label><span
                                    class="text-muted">(optional)</span>
                                <input type="text" wire:model='visitor.plat_nomor'
                                    placeholder="vehicle license plate number"class="form-control">
                                @error('visitor.plat_nomor')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                {{--    --}}
                                <label class="form-label fs-4"><b class="text-red">*</b>Invitation from</label>
                                <input type="texet" wire:model='visitor.invitation_from' class="form-control"
                                    value="" placeholder="invitation from">
                                @error('visitor.invitation_from')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>Visitation purpose</label>
                                <input type="text" wire:model='visitor.visitation_purpose' class="form-control"
                                    placeholder="visitation Purpose">
                                @error('visitor.visitation_purpose')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>Visiting Time</label>
                                <input type="time" wire:model='visitor.waktu_kunjungan' class="form-control"
                                    placeholder="waktu kungjungan">
                                @error('visitor.waktu_kunjungan')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4">Picture</label><span class="text-muted">(optional)</span>
                                <div class="input-group mb-3">
                                    <div class="form-file">
                                        <input type="file" wire:model='visitor.picture' placeholder="picture"
                                            class="form-file-input form-control">
                                    </div>
                                    <span class="input-group-text">Upload</span>
                                    @error('visitor.picture')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4">File</label><span class="text-muted">(optional)</span>
                                <div class="input-group mb-3">
                                    <div class="form-file">
                                        <input type="file" wire:model='visitor.file_surat'
                                            class="form-file-input form-control" placeholder="document">
                                    </div>
                                    <span class="input-group-text">Upload</span>
                                    @error('visitor.file_surat')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3 col-md-12">
                                    <label class="form-label fs-4">Emergency Number</label><span
                                        class="text-muted">(optional)</span>
                                    <input type="text" wire:model='visitor.no_darurat'
                                        placeholder="emergency number"class="form-control">
                                    @error('visitor.no_darurat')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-google" style="color:white;">Confirm</button>
                    </form>
                    @if (session()->has('success'))
                        <span>{{ session()->get('success') }}</span>
                        @else
                        <span>{{ session()->get('error') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
