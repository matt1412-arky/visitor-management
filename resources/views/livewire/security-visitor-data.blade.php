<div class="container-fluid" style="width: 900px; height:660px;">
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
                                    <th><strong>STATUS</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($visits as $visit)
                                    <tr>
                                        <td><strong>{{ $loop->iteration }}</strong></td>
                                        <td>{{ optional($visit->visitor)->name ?? '' }}</td>
                                        <td>{{ optional($visit->visitor)->phone ?? '' }}</td>
                                        <td>{{ optional($visit->visitor)->visit_date ?? '' }}</td>
                                        <td>{{ optional($visit->visitor)->arrival_time ?? '' }}</td>
                                        <td>{{ optional($visit->karyawan)->name ?? '' }}</td>
                                        <td>{{ optional($visit->visitor)->visitation_purpose ?? '' }}</td>
                                        <td>
                                            <span
                                                class="badge light badge-{{ $visit->checkin == 'pending' ? 'info' : 'success' }}">{{ $visit->checkin }}</span>
                                            -
                                            <span
                                                class="badge light badge-{{ $visit->checkout == 'pending' ? 'info' : 'success' }}">{{ $visit->checkout }}</span>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No matching records found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
