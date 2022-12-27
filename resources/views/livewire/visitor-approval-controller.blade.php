<div class="row">
    <div class="col-lg-6 col-xl-12">
        <h4 class="card-title">List Visitor</h4>
        <div class="list-group mb-4 " id="list-tab" role="tablist">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="" class="">
                                <label>Show
                                    <select name="" aria-controls="example4" class="form-control">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </label>
                                <label>Search:<input type="search" wire:model='search' class="form-control"
                                        placeholder="" aria-controls=""></label>
                                <label for="">Status
                                    <select name="" class="form-control" id="">
                                        <option value="">Pending</option>
                                        <option value="">Approved</option>
                                    </select>
                                </label>
                                <label for="">Group By
                                    <select name="" class="form-control" id="">
                                        <option value="">Checkin</option>
                                        <option value="">Checkout</option>
                                    </select>
                                </label>
                                <label for="">Date
                                    <select name="" class="form-control" id="">
                                        <option value="">Today</option>
                                        <option value="">All</option>
                                    </select>
                                </label>
                            </div>
                            <table class="table table-responsive table-hover table-condensed table-bordered">
                                <thead class="table-header table-dark">
                                    <tr>
                                        <th></th>
                                        <th class="fs-6"><strong>VISITOR ID</strong></th>
                                        <th class="fs-6"><strong>NAME</strong></th>
                                        <th class="fs-6"><strong>INVITATION FROM</strong></th>
                                        <th class="fs-6"><strong>CHECKIN</strong></th>
                                        <th class="fs-6"><strong>CHECKOUT</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($visitors as $visitor)
                                        <tr>
                                            <td><strong>{{ $loop->iteration }}</strong></td>
                                            <td>{{ __('absasdnakod') }}</td>
                                            <td>{{ __($visitor->visitor->name) }}</td>
                                            <td>{{ __($visitor->karyawan_ga->name) }}</td>
                                            <td>
                                                <div class="dropdown">
                                                    <button
                                                        class="dropdown-item btn {{ $visitor->status == 'pending' ? 'btn-linkedin' : 'btn-whatsapp' }}"
                                                        wire:click.lazy="onClickBtnApprove({{ $visitor->id }})">
                                                        {{ $visitor->status }}
                                                    </button>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button
                                                        class="dropdown-item btn {{ $visitor->status == 'pending' ? 'btn-linkedin' : 'btn-whatsapp' }}"
                                                        wire:click.lazy="onClickBtnApprove({{ $visitor->id }})">
                                                        {{ $visitor->status }}
                                                    </button>

                                                </div>
                                            </td>

                                        </tr>
                                    @empty
                                        <p>No Data Found</p>
                                    @endforelse

                                </tbody>
                            </table>
                            <div>
                                {{ $visitors->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        Livewire.on('showAlertDialog', (e) => {
            Swal.fire({
                title: e.title,
                text: e.msg,
                type: e.type,
                confirmButtonText: 'Yep!',
            })
        })
    </script>
@endpush
