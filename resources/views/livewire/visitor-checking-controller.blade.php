@section('title', ' Visitor Checking ')
<div class="row">
    <h4 class="card-title">List Visitor</h4>
    <div class="list-group mb-4 " id="list-tab" role="tablist">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                            <div class="dataTables_length" id="example4_length"><label>Show
                                    <select name="example4_length" wire:model="paginator" aria-controls="example4"
                                        class="">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="example4_filter" class="dataTables_filter">
                                <label>Search:<input type="search" wire:model='search' class="" placeholder=""
                                        aria-controls="example4"></label>
                            </div>
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="fs-6"><strong>NAME</strong></th>
                                        <th class="fs-6"><strong>INVITATION FROM</strong></th>
                                        <th class="fs-6"><strong>STATUS</strong></th>
                                        <th class="fs-6"><strong>Check In</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{--  {{ dd($visitors) }}  --}}
                                    @forelse($visitors as $visitor)
                                        <tr>
                                            <td><strong>{{ $loop->iteration }}</strong></td>
                                            <td>{{ __($visitor->visitor->name) }}</td>
                                            <td>{{ __($visitor->karyawan_ga->name) }}</td>
                                            <td class="">
                                                <span
                                                    class="badge light badge-{{ $visitor->status == 'pending' ? 'danger' : 'success' }}">
                                                    <i
                                                        class="fa fa-circle text-{{ $visitor->status == 'pending' ? 'danger' : 'success' }} me-1"></i>
                                                    {{ __($visitor->status) }}
                                                </span>
                                            </td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="mt-2 fs-3 ">
                                {{ $visitors->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
