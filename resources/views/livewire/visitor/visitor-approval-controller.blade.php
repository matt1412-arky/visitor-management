<div class="row">
    <div class="col-lg-6 col-xl-12">
        <h4 class="card-title">List Visitor</h4>
        <div class="list-group mb-4 " id="list-tab" role="tablist">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example4_wrapper" class="dataTables_wrapper no-footer">
                                <div class="dataTables_length" id="example4_length"><label>Show
                                        <select name="example4_length" aria-controls="example4" class="">
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
                                            <th class="fs-6"><strong>VISITOR ID</strong></th>
                                            <th class="fs-6"><strong>NAME</strong></th>
                                            <th class="fs-6"><strong>INVITATION FROM</strong></th>
                                            <th class="fs-6"><strong>ACTION (checkin/out)</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_barcodes as $barcode)
                                            <tr>
                                                <td><strong>{{ $loop->iteration }}</strong></td>
                                                <td>{{ __($barcode['link'][0]->visitor->id) }}</td>
                                                <td>{{ __($barcode['link'][0]->visitor->name) }}</td>
                                                <td>{{ __($barcode['link'][0]->karyawan_ga->name) }}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button
                                                            class="dropdown-item btn {{ $barcode->status == 'pending' ? 'btn-linkedin' : 'btn-whatsapp' }}"
                                                            wire:click.lazy="onClickBtnApprove({{ $barcode->id }})">
                                                            {{ $barcode->status }}
                                                        </button>

                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <div class="dataTables_info" id="example4_info" role="status" aria-live="polite">
                                    Showing 1 to 10 of 30 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers" id="example4_paginate"><a
                                        class="paginate_button previous disabled" aria-controls="example4"
                                        data-dt-idx="0" tabindex="0" id="example4_previous"><i
                                            class="fa fa-angle-double-left" aria-hidden="true"></i></a><span><a
                                            class="paginate_button current" aria-controls="example4" data-dt-idx="1"
                                            tabindex="0">1</a><a class="paginate_button " aria-controls="example4"
                                            data-dt-idx="2" tabindex="0">2</a><a class="paginate_button "
                                            aria-controls="example4" data-dt-idx="3" tabindex="0">3</a></span><a
                                        class="paginate_button next" aria-controls="example4" data-dt-idx="4"
                                        tabindex="0" id="example4_next"><i class="fa fa-angle-double-right"
                                            aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
