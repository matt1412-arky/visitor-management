<div>
    <form class="form-valide-with-icon needs-validation" novalidate="" wire:click.prevent="loginHandler()">
        <div class="mb-3">
            <label class="text-label form-label" for="validationCustomUsername">Username</label>
            <div class="input-group">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                <input type="text" class="form-control" wire:model="email" id="validationCustomUsername"
                    placeholder="Enter a username.." required="">
                <div class="invalid-feedback">
                    Please Enter a username.
                </div>
            </div>
            @error('email')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="text-label form-label" for="dlab-password">Password *</label>
            <div class="input-group transparent-append">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                <input type="password" class="form-control" wire:model="password" id="dlab-password"
                    placeholder="Choose a safe one.." required="">
                <span class="input-group-text show-pass">
                    <i class="fa fa-eye-slash"></i>
                    <i class="fa fa-eye"></i>
                </span>
                <div class="invalid-feedback">
                    Please Enter a username.
                </div>
            </div>
        </div>
        <button type="submit" class="btn me-2 btn-google">Submit</button>
    </form>
</div>