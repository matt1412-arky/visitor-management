@extends('layout.apps')
@section('title', 'Visitor Account')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Visitor Account</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                    <div class="dataTables_length" id="example4_length">
                        <label>Show
                            <select name="example4_length" aria-controls="example4" class="">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            entries
                        </label>
                    </div>
                    <div id="example4_filter" class="dataTables_filter">
                        <label>Search:
                            <input type="search" class="" wire:model.debounce='search' placeholder=""
                                aria-controls="example4">
                        </label>
                    </div>

                    <table id="example4" class="display dataTable no-footer" style="min-width: 845px" role="grid"
                        aria-describedby="example4_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example3" rowspan="1"
                                    colspan="1" aria-sort="ascending" aria-label=": activate to sort column descending"
                                    style="width: 35px;">No</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Name: activate to sort column ascending" style="width: 75px;">Name</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Education: activate to sort column ascending" style="width: 78px;">Email
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Gender: activate to sort column ascending" style="width: 56px;">Phone</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Name: activate to sort column ascending" style="width: 75px;">Invitation
                                    From</th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Education: activate to sort column ascending" style="width: 78px;">
                                    Visitation Purpose
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Gender: activate to sort column ascending" style="width: 56px;">Visit Date
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Gender: activate to sort column ascending" style="width: 56px;">Arrival Time
                                </th>

                                <th class="sorting" tabindex="0" aria-controls="example3" rowspan="1" colspan="1"
                                    aria-label="Action: activate to sort column ascending" style="width: 49px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($visitors as $visitor)
                                <tr role="row" class="{{ $loop->odd ? 'odd' : 'even' }}">
                                    <td class="sorting_1">{{ $visitor->id }}</td>
                                    <td>{{ $visitor->name }}</td>
                                    <td>{{ $visitor->email }}</td>
                                    <td>{{ $visitor->phone }}</td>
                                    <td>{{ $visitor->invitation_from }}</td>
                                    <td>{{ $visitor->visitation_purpose }}</td>
                                    <td>{{ $visitor->visit_date }}</td>
                                    <td>{{ $visitor->arrival_time }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button href="#" class="btn btn-primary shadow btn-xs sharp me-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </button>
                                            <button wire:click.debounce='delete({{ $visitor->id }})'
                                                class="btn btn-danger shadow btn-xs sharp">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
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
                            {{ $visitors->links() }}
                        </span>
                        <a class="paginate_button next" aria-controls="example4" data-dt-idx="4" tabindex="0"
                            id="example4_next">
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function() {
                // Inisialisasi DataTables
                var table = $('#example4').DataTable({
                    serverSide: true,
                    processing: true,
                    ajax: {
                        url: '{{ route('home.visitor-account') }}',
                        data: function(data) {
                            data.search = document.getElementById('example4_filter').querySelector('input')
                                .value;
                        }
                    },
                    columns: [
                        // Definisikan kolom-kolom tabel                       
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'phone',
                            name: 'phone'
                        },
                        // Tambahkan kolom lain jika diperlukan
                    ]
                });

                // Event listener saat input pencarian berubah
                document.getElementById('example4_filter').querySelector('input').addEventListener('input', function() {
                    table.search(this.value).draw();
                });
            });
        </script>
    @endpush
@endsection
