<div class="row">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vendor Account</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div class="" id=""><label class="d-flex col-2 mb-2">Show
                        <select name="" class="form-control" id="" aria-controls="example3">
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>

                            <option value="100">100</option>
                        </select> entries</label></div>

                <div id="example3_filter" class="dataTables_filter">
                    <label class="d-flex col-4">Search:<input class="form-control" ttype="search" class=""
                            placeholder="" aria-controls="example3">
                    </label>
                </div>

                <div class="col-md float-right text-end">
                    <button type="button" wire:click.debounce='openModal' class="btn btn-rounded btn-success">
                        <span class="btn-icon-start text-dark"><i class="fa fa-plus"></i></span>
                        Add
                    </button>
                </div>

                <table id="example3" class="display dataTable no-footer" style="min-width: 845px" role="grid"
                    aria-describedby="example3_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending"
                                style="width: 35px;"></th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="Name: activate to sort column ascending" style="width: 75px;">ID Vendor</th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="Gender: activate to sort column ascending" style="width: 56px;">Name Vendor
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="Education: activate to sort column ascending" style="width: 78px;">Email
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                aria-label="Action: activate to sort column ascending" style="width: 49px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($vendors as $vendor)
                            <tr role="row" class="odd">
                                <td class="sorting_1"><img class="rounded-circle" src="" alt=""></td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $vendor->name }}</td>
                                <td>{{ $vendor->email }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a href="#" class="btn btn-danger shadow btn-xs sharp"><i
                                                class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('modal-utility.manage-account.create-vendor')
</div>
@push('scripts')
    <script>
        Livewire.on('openModal', (e) => {
            $('#modalAddVendor').modal('show');
        })
    </script>
@endpush
