<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Data Visitors</h4>
        </div>
        <div class="card mt-3">
            <div class="dataTables_length  justify-content-between" id="example4_length">
                <label class="me-3">Search :
                    <input type="text" class="form-control" placeholder="search" />
                </label>
                <label class="me-3">Show
                    <select class="form-control">
                        <option value="delete">Delete</option>
                        <option value="sentEmail">Sent email</option>
                        <option value="test"> others method</option>
                    </select>
                </label>
                <label class="me-3">Sort by
                    <select class="form-control" wire:model='sortBy'>
                        <option value="id">id</option>
                        <option value="name">name</option>
                        <option value="email">email</option>
                    </select>
                </label>
                <label class="me-3">order by
                    <select class="form-control" wire:model='orderBy'>
                        <option value="1">ascending</option>
                        <option value="0">descending</option>
                    </select>
                </label>
                <button type="button" wire:click.lazy='doSelected()' class="btn btn-primary">do somethign</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th style="width:20px;">
                                <div class="form-check custom-checkbox checkbox-success check-lg me-1">
                                    <input type="checkbox" class="form-check-input"
                                        wire:click.defer='selectAllVisitors()' id="checkAll" required="">
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
                            <tr class="{{ $this->isCheckId($visitor->id) }}">
                                <td>
                                    <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                        <input type="checkbox" value={{ $visitor->id }} class="form-check-input"
                                            wire:model='checkedVisitors' id="customCheckBox2" required="">
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
                {{ $visitors->links() }}
            </div>
        </div>
    </div>
</div>
