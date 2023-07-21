<div class="container-fluid" style="position: relative;">
    <div class="row">
        <div class="col-lg-12 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Visitation Data</h4>
                    <div class="table-responsive">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <label for="showEntries">Show:</label>
                                <select name="showEntries" id="showEntries" class="form-select"
                                    wire:model.debounce="paginator">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="my-2">
                                <label for="search">Search:</label>
                                <input type="search" id="search" class="form-control" wire:model="search"
                                    placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>PHONE</th>
                                    <th>DATE</th>
                                    <th>ARRIVAL TIME</th>
                                    <th>INVITATION FROM</th>
                                    <th>VISITATION PURPOSE</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Konten tabel --}}
                                @foreach ($visits as $index => $visit)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $visit->name }}</td>
                                        <td>{{ $visit->phone }}</td>
                                        <td>{{ $visit->visit_date }}</td>
                                        <td>{{ $visit->arrival_time }}</td>
                                        <td>{{ $visit->invitation_from }}</td>
                                        <td>{{ $visit->visitation_purpose }}</td>
                                        <td>
                                            <span
                                                class="badge light badge-{{ $visit->checkin == 'pending' ? 'info' : 'success' }}">{{ $visit->checkin }}</span>
                                            -
                                            <span
                                                class="badge light badge-{{ $visit->checkout == 'pending' ? 'info' : 'success' }}">{{ $visit->checkout }}</span>
                                        </td>
                                    </tr>
                                @endforeach

                                @if ($visits->isEmpty())
                                    <tr>
                                        <td colspan="10" class="text-center">No matching records found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="d-flex flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
                            <p class="small text-muted">
                                @if ($visits->isEmpty())
                                    Showing 0 to 0 of 0 results
                                @else
                                    Showing {{ $visits->firstItem() }} to {{ $visits->lastItem() }} of
                                    {{ $visits->total() }} results
                                @endif
                            </p>
                            <div class="mt-3">
                                {{ $visits->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
