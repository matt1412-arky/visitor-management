<div id="modalAddEmployee" wire:ignore.self class="modal fade bd-example-modal-lg" tabindex="-1"
    style="display: none; padding-right: 17px;" aria-modal="true" role="dialog" data-bs-backdrop="static"
    aria-labelledby="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <form wire:submit.prevent='createNewEmployee'>
                <div class="modal-body">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">NIK</label>
                        <div class="col-sm-10">
                            <input wire:model='karyawan_ga.NIK' type="number" class="form-control form-control-lg"
                                placeholder="nik...">
                            @error('karyawan_ga.NIK')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Fullname</label>
                        <div class="col-sm-10">
                            <input wire:model='karyawan_ga.name' type="text" class="form-control form-control-lg"
                                placeholder="Fullname">
                            @error('karyawan_ga.name')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Email</label>
                        <div class="col-sm-10">
                            <input wire:model='karyawan_ga.email' type="email" class="form-control form-control-lg"
                                placeholder="Your email">
                            @error('karyawan_ga.email')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Devisi</label>
                        <div class="col-sm-10">
                            <input wire:model='karyawan_ga.devisi' type="text" class="form-control form-control-lg"
                                placeholder="devisi">
                            @error('karyawan_ga.devisi')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Jabatan</label>
                        <div class="col-sm-10">
                            <input wire:model='karyawan_ga.jabatan' type="text" class="form-control form-control-lg"
                                placeholder="jabatan">
                            @error('karyawan_ga.jabatan')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label col-form-label-lg">Role</label>
                        <div class="col-sm-10">
                            <select wire:model="karyawan_ga.role_id"
                                class="form-control col-sm-2 col-form-label col-form-label-lg">
                                @foreach ($roles as $role_id => $name)
                                    <option value="{{ $role_id }}">{{ __($name->role_name) }}
                                    </option>
                                @endforeach
                            </select>
                            @error('karyawan_ga.role_id')
                                <span class="text-danger">
                                    {{ $message }}
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
