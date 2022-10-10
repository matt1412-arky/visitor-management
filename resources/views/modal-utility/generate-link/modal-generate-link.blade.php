<div wire:ignore.self tabindex="-1" class="modal fade" id="modal-generate" style="display: none;" aria-modal="true"
    role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Link Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                @if ($user_generates != null)
                    @forelse ($user_generates as $index => $user)
                        <p>username : {{ $user[0] }}</p>
                        <p>password : {{ $user[1] }}</p>
                        <p>Link-visitor <a href="{{ $user[2] }}">Link-visitor.com</a></p>
                    @empty
                    @endforelse
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
