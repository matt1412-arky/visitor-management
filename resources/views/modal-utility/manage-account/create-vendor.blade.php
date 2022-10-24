<div id="modalAddVendor" wire:ignore.self class="modal fade bd-example-modal-lg" tabindex="-1"
    style="display: none; padding-right: 17px;" aria-modal="true" role="dialog" data-backdrop="static" aria-labelledby="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form wire:submit.prevent='createNewVendor()'>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Fullname</label>
                        <div class="col-sm-10">
                            <input wire:model.defer='vendor.name' type="text" class="form-control form-control-lg"
                                placeholder="fullname...">
                            @error('vendor.name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                            <input wire:model.defer='vendor.email' type="email" class="form-control form-control-lg"
                                placeholder="email...">
                            @error('vendor.email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Password</label>
                        <div class="col-sm-10">
                            <input wire:model.defer='vendor.password' type="text"
                                class="form-control form-control-lg" placeholder="password...">
                            @error('vendor.password')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
