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
                                <input type="text" wire:model='fullname' class="form-control" placeholder="fullname">
                                @error('fullname')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>Phone number</label>
                                <input type="text" wire:model='phone' class="form-control"
                                    placeholder="phone number">
                                @error('phone')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4">Transportation used</label>
                                <input type="text" wire:model='transportation_used'
                                    placeholder="transportation used"class="form-control">
                                @error('transportation_used')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>Invitation from</label>
                                <input type="texet" wire:model='invitation_from' class="form-control"
                                    placeholder="invitation from">
                                @error('invitation_from')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>Visitation purpose</label>
                                <input type="text" wire:model='visitation_purpose' class="form-control"
                                    placeholder="visitation Purpose">
                                @error('visitation_purpose')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>waktu_kunjungan</label>
                                <input type="time" class="form-control" placeholder="waktu kungjungan">
                                @error('time')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>Picture(Optional)</label>
                                <div class="input-group mb-3">
                                    <div class="form-file">
                                        <input type="file" wire:model='picture' placeholder="picture"
                                            class="form-file-input form-control">
                                    </div>
                                    <span class="input-group-text">Upload</span>
                                    @error('picture')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3 col-md-12">
                                <label class="form-label fs-4"><b class="text-red">*</b>File(Optional)</label>
                                <div class="input-group mb-3">
                                    <div class="form-file">
                                        <input type="file" wire:model='file_doc' class="form-file-input form-control"
                                            placeholder="document">
                                    </div>
                                    <span class="input-group-text">Upload</span>
                                    @error('file_doc')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <button type="submit" class="btn btn-google" style="color:white;">Confirm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
