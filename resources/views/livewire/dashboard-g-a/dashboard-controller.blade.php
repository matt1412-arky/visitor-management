<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark"></a>
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <i class="fa fa-users fs-1 text-primary"></i>
                    <h4 class="my-2">Visitors {{ $totalVisitors }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark"></a>
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <i class="fa fa-eye fs-1 text-primary"></i>
                    <h4 class="my-2">Visits {{ $totalVisits }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark"></a>
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <i class="fa fa-calendar-alt fs-1 text-primary"></i>
                    <h4 class="my-2">Visiting Appointments {{ $totalAppointment }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <a class="info-box mb-3 text-dark"></a>
        <div class="card">
            <div class="card-body d-flex align-items-center justify-content-center">
                <div class="text-center">
                    <i class="fa fa-user fs-1 text-primary"></i>
                    <h4 class="my-2">Employee {{ $totalKaryawan }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3">
                <a class="info-box mb-3 text-dark"></a>
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <i class="fa fa-comments fs-1 text-primary"></i>
                            <h4 class="my-2">Feedback {{ $totalFeedback }}</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <a class="info-box mb-3 text-dark"></a>
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <div class="text-center">
                            <i class="fa fa-search fs-1 text-primary"></i>
                            <h4 class="my-2">Lost Item {{ $totalLostItem }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Visitor</h4>
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
                            @foreach ($appointments as $index => $appointment)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $appointment->name }}</td>
                                    <td>{{ $appointment->phone }}</td>
                                    <td>{{ $appointment->visit_date }}</td>
                                    <td>{{ $appointment->arrival_time }}</td>
                                    <td>{{ $appointment->invitation_from }}</td>
                                    <td>{{ $appointment->visitation_purpose }}</td>
                                </tr>
                            @endforeach
                            @if ($appointments->isEmpty())
                                <tr>
                                    <td colspan="6" class="text-center">No matching records found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                    <div class="d-flex flex-sm-fill d-sm-flex align-items-sm-center justify-content-sm-between">
                        <p class="small text-muted">
                            @if ($appointments->isEmpty())
                                Showing 0 to 0 of 0 results
                            @else
                                Showing {{ $appointments->firstItem() }} to {{ $appointments->lastItem() }} of
                                {{ $appointments->total() }} results
                            @endif
                        </p>
                        <div class="mt-3">
                            {{ $appointments->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
