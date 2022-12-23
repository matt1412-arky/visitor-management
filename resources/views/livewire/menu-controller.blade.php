<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="default-tab">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#home"><i class="la la-home me-2"></i>Insert
                    Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#profile"><i class="la la-user me-2"></i>All Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#addmenu"><i class="la la-user me-2"></i> Profile</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade" id="home" role="tabpanel">
                <div class="tab-pane fade active show" id="addmenu">
                    <div class="basic-form p-3">
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
            <div class="tab-pane fade" id="profile">
                <div class="pt-4">
                    <div class="card">
                        <div class="card-header border-0 pb-0">
                            <h5 class="card-title">Menu Avaible</h5>
                        </div>
                        <div class="card-body justify-end">
                            <div class="row justify-content-between">
                                <div id="example_filter" class="col-3">
                                    <label class="d-flex">
                                        <input type="search" wire:model="search" class="form-control"
                                            placeholder="search" aria-controls="example">
                                    </label>
                                </div>
                                <div id="" class="col-2">
                                    <select wire:model="category" class="form-control" id="">
                                        <option value="">--Select--</option>
                                        <option value="food">Food</option>
                                        <option value="beverage">Beverage</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    @include('components.menus')
                </div>
            </div>
        </div>
    </div>
</div>
