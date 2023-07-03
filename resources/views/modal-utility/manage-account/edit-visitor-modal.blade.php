<div id="modalEditVisitor" wire:ignore.self class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Visitor</h5>
                <button type="button" class="btn-close" wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="update">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="edit-name">Name:</label>
                        <input type="text" id="edit-name" wire:model.defer="name" class="form-control">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit-email">Email:</label>
                        <input type="text" id="edit-email" wire:model.defer="email" class="form-control">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit-phone">Phone:</label>
                        <input type="text" id="edit-phone" wire:model.defer="phone" class="form-control">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit-invitation">Invitation From:</label>
                        <input type="text" id="edit-invitation" wire:model.defer="invitation_from"
                            class="form-control">
                        @error('invitation_from')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit-purpose">Visitation Purpose:</label>
                        <input type="text" id="edit-purpose" wire:model.defer="visitation_purpose"
                            class="form-control">
                        @error('visitation_purpose')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit-date">Visit Date:</label>
                        <input type="date" id="edit-date" wire:model.defer="visit_date" class="form-control">
                        @error('visit_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit-arrival">Arrival Time:</label>
                        <input type="time" id="edit-arrival" wire:model.defer="arrival_time" class="form-control">
                        @error('arrival_time')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
