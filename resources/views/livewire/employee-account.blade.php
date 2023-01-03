@push('page-title', 'Employee Account')
<div class="col">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Employee Account</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="" class=" no-footer">
                    <div class="" id="">
                        <label>Show
                            <select wire:model.debounce='paginator' aria-controls="example3" class="">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries</label>
                    </div>

                    <div id="" class=""><label>Search:
                            <input type="search" wire:model.debounce='search' class="form-control" placeholder=""
                                aria-controls=""></label></div>

                    <div class="col-md float-right text-end">
                        <button type="button" wire:click.lazy="openModalDialog()" class="btn btn-rounded btn-success">
                            <span class="btn-icon-start text-dark"><i class="fa fa-plus"></i>
                            </span>Add</button>
                    </div>

                    <table id="" class="table table-active table-hover" aria-describedby="">
                        <thead>
                            <tr role="row">
                                <th></th>
                                <th>NIK</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Division</th>
                                <th></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr role="row" class="odd">
                                    <td class="sorting_1"><img class="rounded-circle" width="35" src=""
                                            alt=""></td>
                                    <td>{{ $employee->NIK }}</td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->role->role_name }}</td>
                                    <td><a href="javascript:void(0);"><strong>{{ $employee->devisi }}</strong></a></td>
                                    <td><a href="javascript:void(0);"><strong>assumenda</strong></a></td>
                                    <td>
                                        <div class="d-flex">
                                            <button href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i
                                                    class="fas fa-pencil-alt"></i></button>
                                            <button wire:click.debounce='delete({{ $employee->NIK }})'
                                                class="btn btn-danger shadow btn-xs sharp">
                                                <i class="fa fa-trash"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modal-utility.manage-account.create-employee')
</div>
@push('scripts')
    <script>
        window.addEventListener('createNewEmployee', (e) => {
            $('#modalAddEmployee').modal('hide');
            Swal.fire({
                title: e.detail.title,
                msg: e.detail.msg,
                type: e.detail.type,
                confirmButtonText: 'Yep!',
            })
        })
        window.addEventListener('openAddEmployee', (e) => {
            $('#modalAddEmployee').modal('show');
        })
        window.addEventListener('swal:delete', (e) => {
            Swal.fire({
                title: e.detail.title,
                msg: e.detail.msg,
                type: e.detail.type,
                confirmButtonText: 'Yep!',
            })
        })
    </script>
@endpush
