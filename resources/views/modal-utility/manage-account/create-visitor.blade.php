<div id="modalAddEmployee" wire:ignore.self class="modal fade bd-example-modal-lg" tabindex="-1"
    style="display: none; padding-right: 17px;" aria-modal="true" role="dialog" data-bs-backdrop="static"
    aria-labelledby="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Visitor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form wire:submit.prevent='createNewEmployee'>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Visitor Name</label>
                        <div class="col-sm-10">
                            <input wire:model='visitorname' type="text" class="form-control form-control-lg"
                                placeholder="name...">
                            {{-- @error('karyawan_ga.NIK')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                            <input wire:model='karyawan_ga.email' type="email" class="form-control form-control-lg"
                                placeholder="Your email">
                            {{-- @error('karyawan_ga.email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                </span>
                            @enderror --}}
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Password</label>
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
