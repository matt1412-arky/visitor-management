@extends('layout.apps')
@section('title', ' Dashboard Admin ')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-xl-6">
            <h4 class="card-title">List Visitor</h4>
            <div class="list-group mb-4 " id="list-tab" role="tablist">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                                    <div class="dataTables_length" id="example4_length"><label>Show
                                            <select name="example4_length" wire:model.debounce='paginator'
                                                aria-controls="example4" class="">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                    <div id="example4_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" wire:model='search' class=""
                                                placeholder="" aria-controls="example4"></label>
                                    </div>
                                    <table class="table table-responsive">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th class="fs-6"><strong>NAME</strong></th>
                                                <th class="fs-6"><strong>EMAIL</strong></th>
                                                <th class="fs-6"><strong>PHONE</strong></th>
                                                <th class="fs-6"><strong>INVITATION FROM</strong></th>
                                                <th class="fs-6"><strong>VISITATION PURPOSE</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($visitors as $visitor)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $visitor->name }}</td>
                                                    <td>{{ $visitor->email }}</td>
                                                    <td>{{ $visitor->phone }}</td>
                                                    <td>{{ $visitor->invitation_from }}</td>
                                                    <td>{{ $visitor->visitation_purpose }}</td>
                                                </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="9" class="text-center">No matching records found.</td>
                                                    </tr>
                                                @endforelse --}}
                                        </tbody>
                                    </table>
                                    <div class="mt-2 fs-3 ">
                                        {{-- {{ $visitors->links() }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
