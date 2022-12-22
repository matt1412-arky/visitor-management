<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Vendor A</h4>
                <div class="">
                    <a href=""class="btn btn-primary">Confirm Order</a>
                    <button type="button" wire:click.lazy="openModalDialog()" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-start text-dark"><i class="fa fa-plus"></i>
                        </span>Add New</button>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="" class="">
                        <label class="d-flex col-1">Show
                            <select name="" aria-controls="" class="form-control text-black">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select> entries
                        </label>
                        <div id="" class="">
                            <label>Search:<input type="search" class="form-control" placeholder=""
                                    aria-controls="example"></label>
                        </div>
                        <table id="example" class="display table" style="min-width: 845px" role="grid"
                            aria-describedby="">
                            <thead>
                                <tr role="row">
                                    <th>Gambar</th>
                                    <th>Paket Menu</th>
                                    <th>Makanan</th>
                                    <th>Minuman</th>
                                    <th>Jumlah</th>
                                    <th>Const</th>
                                    <th>SubTotal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($vendor_menus as $menu)
                                    <tr>
                                        <td class="">{{ __($menu->picture ?? 'No Pic') }}</td>
                                        <td class="">{{ __($menu->nama_paket_menu) }}</td>
                                        <td>{{ __($menu->makanan) }}</td>
                                        <td>{{ __($menu->minuman) }}</td>
                                        <td>{{ __($menu->jumlah) }}</td>
                                        <td>{{ __($menu->cost) }}</td>
                                        <td>Rp. {{ __(number_format($menu->jumlah * $menu->cost)) }}</td>
                                        <td><span class="badge badge-primary">Approved</span></td>
                                    </tr>
                                @empty
                                    <p>No Menus from vendor</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
