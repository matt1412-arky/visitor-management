<div class="row">
    <div class="col-md-12">
        <form class="mb-3 position-relative">
            <div class="input-group d-flex justify-content-end">
                <input type="text" wire:model="search" class="form-control" placeholder="Search by Item Name">
                {{-- <button type="" class="btn btn-primary position-absolute top-0 end-0"
                  >Search</button> --}}
            </div>
        </form>
    </div>
    @if ($lostItems->isEmpty())
        <div class="col-md-12">
            <div class="alert text-center text-dark" role="alert">
                No matching data found.
            </div>
        </div>
    @else
        @foreach ($lostItems as $item)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-blog">
                            <h5 class="text-dark d-inline">{{ $item->item_name }}</h5>
                            <p class="text-muted">Found on: {{ $item->created_at->format('d M Y') }}</p>
                            <img src="{{ asset('storage/images/' . $item->item_image) }}" alt="{{ $item->item_name }}"
                                class="img-fluid mt-4 mb-4 w-100 rounded">
                            <span class="badge badge-{{ $item->status === 'Not Taken' ? 'danger' : 'success' }}"></span>
                            @if ($item->status_taken)
                                <span class="badge badge-success">Taken</span>
                            @else
                                <span class="badge badge-danger">Not Taken</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
