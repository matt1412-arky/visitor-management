<div class="container-fluid" style="position: relative;">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="card-title">Visitor Account</h4>
            <div class="d-flex align-items-center">
                <div class="form-inline mr-3">
                    <label class="mr-2">Show</label>
                    <select wire:model.debounce='paginator' aria-controls="example3" class="form-control">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="form-inline">
                    <label class="mr-2">Search:</label>
                    <input type="search" wire:model.debounce='search' class="form-control" placeholder=""
                        aria-controls="">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                    <table id="example4" class="display dataTable no-footer" style="min-width: 845px" role="grid"
                        aria-describedby="example4_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label=": activate to sort column descending" style="width: 35px;">No</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-label="Name: activate to sort column ascending"
                                    style="width: 75px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-label="Education: activate to sort column ascending"
                                    style="width: 78px;">Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-label="Gender: activate to sort column ascending"
                                    style="width: 56px;">Phone</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-label="Name: activate to sort column ascending"
                                    style="width: 75px;">Invitation
                                    From</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-label="Education: activate to sort column ascending"
                                    style="width: 78px;">
                                    Visitation Purpose
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-label="Gender: activate to sort column ascending"
                                    style="width: 56px;">Visit Date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-label="Gender: activate to sort column ascending"
                                    style="width: 56px;">Arrival
                                    Time
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-label="Action: activate to sort column ascending"
                                    style="width: 49px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visitors as $visitor)
                                <tr role="row" class="odd">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $visitor->name }}</td>
                                    <td>{{ $visitor->email }}</td>
                                    <td>{{ $visitor->phone }}</td>
                                    <td>{{ $visitor->invitation_from }}</td>
                                    <td>{{ $visitor->visitation_purpose }}</td>
                                    <td>{{ $visitor->visit_date }}</td>
                                    <td>{{ $visitor->arrival_time }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button wire:click="openModalDialog({{ $visitor->id }})"
                                                class="btn btn-primary shadow btn-xs sharp me-1" data-toggle="tooltip"
                                                data-placement="top" title="Edit Visitor">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button wire:click.debounce='delete({{ $visitor->id }})'
                                                class="btn btn-danger shadow btn-xs sharp" data-toggle="tooltip"
                                                data-placement="top" title="Delete Visitor">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            @if ($visitors->isEmpty())
                                <tr>
                                    <td colspan="9" class="text-center">No matching records found.</td>
                                </tr>
                            @endif

                        </tbody>
                    </table>
                    <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">
                        Showing 1 to {{ $visitors->count() }} of {{ $visitors->count() }} entries
                    </div>
                    <div class="dataTables_paginate paging_simple_numbers" id="example4_paginate">
                        <a class="paginate_button previous disabled" aria-controls="example4" data-dt-idx="0"
                            tabindex="0" id="example4_previous">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </a>
                        <span>
                            {{-- {{ $visitors->links() }} --}}
                        </span>
                        <a class="paginate_button next" aria-controls="example4" data-dt-idx="4" tabindex="0"
                            id="example4_next">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @include('modal-utility.manage-account.edit-visitor-modal')
    </div>

    @push('scripts')
        <script>
            window.addEventListener('swal:delete', (e) => {
                Swal.fire({
                    title: e.detail.title,
                    msg: e.detail.msg,
                    type: e.detail.type,
                    confirmButtonText: 'Yes',
                });
            });
            window.addEventListener('editVisitor', (e) => {
                $('#modalEditVisitor').modal('hide');
                Swal.fire({
                    title: e.detail.title,
                    text: e.detail.text,
                    icon: e.detail.icon,
                    confirmButtonText: 'Yes',
                });
            });

            window.addEventListener('openEditVisitor', (e) => {
                $('#modalEditVisitor').modal('show');
            });

            window.addEventListener('closeEditVisitor', (e) => {
                $('#modalEditVisitor').modal('hide');
            });
        </script>
    @endpush
