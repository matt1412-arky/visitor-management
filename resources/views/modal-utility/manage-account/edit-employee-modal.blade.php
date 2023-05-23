<div id="modalEditEmployee" wire:ignore.self class="modal fade bd-example-modal-lg" tabindex="-1"
    style="display: none; padding-right: 17px;" aria-modal="true" role="dialog" data-bs-backdrop="static"
    aria-labelledby="">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Karyawan</h5>
                <button type="button" class="btn-close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="editEmployee">
                <div class="modal-body">
                    <!-- Field input for employee data -->
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" wire:model.defer="karyawan_ga.name">
                        @error('karyawan_ga.name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" wire:model.defer="karyawan_ga.email">
                        @error('karyawan_ga.email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="devisi">Divisi</label>
                        <input type="text" class="form-control" wire:model.defer="karyawan_ga.devisi">
                        @error('karyawan_ga.devisi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" wire:model.defer="karyawan_ga.jabatan">
                        @error('karyawan_ga.jabatan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
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
