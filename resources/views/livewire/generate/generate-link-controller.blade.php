<div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card text-center">
                <div class="card-header">
                    <h5 class="card-title">Generate Link Registrasi</h5>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Time Duration</span>
                        <input type="time" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Number of visitor</span>
                        <input type="number" class="form-control" wire:model="number_of_visitors">
                    </div>
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter" wire:click="generateLinkVisitor()">Generate</button>
                </div>
                <div class="card-footer">
                    <p class="card-text text-dark">Last updateed 3 min ago</p>
                </div>
            </div>
        </div>
    </div>
    @include('modal-utility/generate-link.modal-generate-link')
</div>
@push('scripts')
    <script>
        window.addEventListener('generate-link', (e) => {
            $('#modal-generate').modal('show');
            
        })
    </script>
@endpush
