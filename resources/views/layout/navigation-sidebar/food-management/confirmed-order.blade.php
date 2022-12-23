@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Confirmed Order</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="example4_wrapper" class=" no-footer">
                            <div class="dataTables_length" id="example4_length"><label>Show <select name="example4_length"
                                        aria-controls="example4" class="">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                            <div id="example4_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="" placeholder="" aria-controls="example4"></label></div>
                            <table id="example4" class="display table " style="" role="grid"
                                aria-describedby="example4_info">
                                <thead>
                                    <tr>
                                        <th>ID-Order</th>
                                        <th>Nama Karyawan</th>
                                        <th>Nama Paket Menu</th>
                                        <th></th>
                                        <th>Ordered At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($confirmed_orders as $order)
                                        <tr role="row" class="odd">
                                            <td class="">#order0{{ $loop->iteration }}</td>
                                            <td>{{ $order->karyawan->name }}</td>
                                            <td>{{ $order->paket_menu->nama_paket_menu }}</td>
                                            <td><span class="badge light badge-success">Ordered</span></td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>Rp.....</td>
                                        </tr>
                                    @empty
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
