<div class="container-fluid" style="width: 900px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Visitation Data</h4>
                    <div class="d-flex align-items-center">
                        <div class="form-inline mr-3">
                            <label class="mr-2">Show</label>
                            <select wire:model.debounce.500ms="paginator" aria-controls="example3" class="form-control">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        <div class="form-inline">
                            <label class="mr-2">Search:</label>
                            <input type="search" wire:model.debounce.500ms="search" class="form-control" placeholder=""
                                aria-controls="">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md table-header table-condensed table-hover">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong></strong></th>
                                    <th><strong>NAME</strong></th>
                                    <th><strong>PHONE</strong></th>
                                    <th><strong>DATE</strong></th>
                                    <th><strong>ARRIVAL TIME</strong></th>
                                    <th><strong>INVITATION FROM</strong></th>
                                    <th><strong>VISITATION PURPOSE</strong></th>
                                    <th><strong>CHECKIN</strong></th>
                                    <th><strong>CHECKOUT</strong></th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($visitors as $visitor)
                                    <tr>
                                        <td><strong>{{ __($visitor->id) }}</strong></td>
                                        <td>{{ __($visitor->visitor->name) }}</td>
                                        <td>{{ __($visitor->visitor->phone) }}</td>
                                        <td>{{ $visitor->visitor->visit_date }}</td>
                                        <td>{{ __($visitor->visitor->arrival_time) }}</td>
                                        <td>{{ __($visitor->karyawan->name) }}</td>
                                        <td>{{ __($visitor->visitor->visitation_purpose) }}</td>
                                        <td><span
                                                class="badge light badge-{{ __($visitor->checkin == 'pending') ? 'info' : 'success' }}">{{ __($visitor->checkin) }}</span>
                                        </td>
                                        <td><span
                                                class="badge light badge-{{ __($visitor->checkout == 'pending') ? 'info' : 'success' }}">{{ __($visitor->checkout) }}</span>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-success light sharp"
                                                    data-bs-toggle="dropdown">
                                                    <svg width="20px" height="20px" viewBox="0 0 24 24"
                                                        version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24"
                                                                height="24"></rect>
                                                            <circle fill="#000000" cx="5" cy="12"
                                                                r="2"></circle>
                                                            <circle fill="#000000" cx="12" cy="12"
                                                                r="2"></circle>
                                                            <circle fill="#000000" cx="19" cy="12"
                                                                r="2"></circle>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" wire:click="checkin({{ $visitor->id }})"
                                                        href="#">CheckIn</a>
                                                    <a class="dropdown-item" wire:click="checkout({{ $visitor->id }})"
                                                        href="#">CheckOut</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('home.create-feedback', $visitor->id) }}">Create
                                                        Feedback</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10" class="text-center">No matching records found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    @if ($visitors->isEmpty())
                        <p class="small text-muted">Showing 0 to 0 of 0 results</p>
                    @endif
                    <div class="mt-3">
                        {{ $visitors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
