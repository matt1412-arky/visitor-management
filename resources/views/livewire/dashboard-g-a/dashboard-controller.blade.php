<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Visitors</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <div class="form-check custom-checkbox checkbox-success check-lg me-1">
                                    <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                    <label class="form-check-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th><strong>NO.</strong></th>
                            <th><strong>NAME</strong></th>
                            <th><strong>Email</strong></th>
                            <th><strong>Phone</strong></th>
                            <th><strong>Picture</strong></th>
                            <th><strong></strong></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($visitors as $visitor)
                            <tr>
                                <td>
                                    <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                        <input type="checkbox" class="form-check-input" id="customCheckBox2"
                                            required="">
                                        <label class="form-check-label" for="customCheckBox2"></label>
                                    </div>
                                </td>
                                <td><strong>{{ $loop->iteration }}</strong></td>
                                <td>{{ $visitor->name }}</td>
                                <td>{{ $visitor->email }} </td>
                                <td>{{ __($visitor->phone) }}</td>
                                <td>{{ $visitor->picture }}</td>
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
</div>
