<div class="container-fluid" style="position: relative;">
    <div class="row">
        <div class="col-lg-6 col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">List Visitor</h4>
                    <div class="table-responsive">
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
                    <div class="table-responsive mt-3">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NAME</th>
                                    <th>EMAIL</th>
                                    <th>PHONE</th>
                                    <th>INVITATION FROM</th>
                                    <th>VISITATION PURPOSE</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Konten tabel --}}
                                @foreach ($visitors as $visitor)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $visitor->name }}</td>
                                        <td>{{ $visitor->email }}</td>
                                        <td>{{ $visitor->phone }}</td>
                                        <td>{{ $visitor->invitation_from }}</td>
                                        <td>{{ $visitor->visitation_purpose }}</td>
                                    </tr>
                                @endforeach
                                @if ($visitors->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center">No matching records found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-2 fs-3">
                        {{ $visitors->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-xl-6">
            <div class="card">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <i class="la la-users fs-1 text-primary"></i>
                        <h4 class="my-2">Visitors {{ $totalVisitors }}</h4>
                        <button type="button" class="btn btn-rounded btn-success">
                            <i class="fa fa-download color-warning"></i>
                            Export
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
