<div class="container-fluid" style="width: 900px;">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Visitation Data</h4>
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
                                        <td><strong>{{ __($loop->iteration) }}</strong></td>
                                        <td>{{ __($visitor->visitor->name) }}</td>
                                        <td>{{ __($visitor->visitor->phone) }}</td>
                                        <td>{{ $visitor->visitor->visit_date }}</td>
                                        <td>{{ __($visitor->visitor->arrival_time) }}</td>
                                        <td>{{ __($visitor->karyawan->name) }}</td>
                                        <td>{{ __($visitor->visitor->visitation_purpose) }}</td>
                                        <td><span
                                                class="badge light badge-{{ __($visitor->checkin == 'pending') ? 'info' : 'success' }}">{{ __($visitor->checkin) }}
                                            </span>
                                        </td>
                                        <td><span
                                                class="badge light badge-{{ __($visitor->checkout == 'pending') ? 'info' : 'success' }}">{{ __($visitor->checkout) }}
                                            </span>
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
                                                                height="24">
                                                            </rect>
                                                            <circle fill="#000000" cx="5" cy="12"
                                                                r="2">
                                                            </circle>
                                                            <circle fill="#000000" cx="12" cy="12"
                                                                r="2">
                                                            </circle>
                                                            <circle fill="#000000" cx="19" cy="12"
                                                                r="2">
                                                            </circle>
                                                        </g>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" wire:click="checkin({{ $visitor->id }})"
                                                        href="#">CheckIn</a>
                                                    <a class="dropdown-item" wire:click="checkout({{ $visitor->id }})"
                                                        href="#">CheckOut</a>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No matching records found.</td>
                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{-- <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Checkout</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th style="width:80px;"><strong></strong></th>
                                <th><strong>NAME</strong></th>
                                <th><strong>DATE</strong></th>
                                <th><strong>Checkout</strong></th>
                                <th><strong>Feedback</strong></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>01</strong></td>
                                <td>Mr. Bobby</td>
                                <td>Senin,12/24/2002</td>
                                <td>08.00am</td>
                                <td>*****</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> --}}
</div>
