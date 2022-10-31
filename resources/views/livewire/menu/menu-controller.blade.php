<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">Menu Avaible</h5>
        </div>
        <div class="card-body justify-end">
            <div class="row justify-content-between">
                <div id="example_filter" class="col-3">
                    <label class="d-flex">
                        <input type="search" class="form-control" placeholder="search" aria-controls="example">
                    </label>
                </div>
                <div id="" class="col-4">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                            aria-expanded="false">Select menu</button>
                        <div class="dropdown-menu" style="margin: 0px;">
                            <a class="dropdown-item" data-bs-toggle="tab" id="btn-food" href="#home">Food</a>
                            <a class="dropdown-item" data-bs-toggle="tab" href="#profile">Beverage</a>
                        </div>
                    </div>
                    <button type="button" class="btn btn-info">Add new menu
                        <span class="btn-icon-end"><i class="fa fa-plus"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="default-tab">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-home me-2"></i> Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i> Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#addmenu"><i class="la la-user me-2"></i> Profile</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade" id="home" role="tabpanel">
                <div class="pt-4">
                    <h4>This is home title</h4>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live
                        the blind texts. Separated they live in Bookmarksgrove.
                    </p>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live
                        the blind texts. Separated they live in Bookmarksgrove.
                    </p>
                </div>
            </div>
            <div class="tab-pane fade" id="profile">
                <div class="pt-4">
                    <h4>This is profile title</h4>
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua,
                        retro synth master cleanse. Mustache cliche tempor.
                    </p>
                    <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua,
                        retro synth master cleanse. Mustache cliche tempor.
                    </p>
                </div>
            </div>
            <div class="tab-pane fade active show" id="addmenu">
                <div class="basic-form">
                    <form wire:submit.prevent='saveMenu' class="">
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Type</label>
                            <div class="col-sm-9">
                                <select class="form-control" wire:model='type'>
                                    <option value="food">Food</option>
                                    <option value="beverage">Beverage</option>
                                </select>
                                @error('type')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" wire:model='name' class="form-control" placeholder="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Price</label>
                            <div class="col-sm-9">
                                <input type="number" wire:model='harga' step="0.01" class="form-control"
                                    placeholder="price">
                                @error('harga')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Picture</label>
                            <div class="col-sm-9">
                                <input type="file" wire:model='picture' class="form-control" placeholder="">
                                @error('picture')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Decription</label>
                            <div class="col-sm-9">
                                <textarea wire:model='description' class="form-control" row="5"></textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    @include('components.menus')
</div>
