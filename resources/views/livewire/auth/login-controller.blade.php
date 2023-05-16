<div>
    @if (Session::has('fail'))
        <div class="alert alert-danger text-center">
            {{ Session::get('fail') }}
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger text-center">
            {{ Session::get('error') }}
        </div>
    @endif
    <form class="form-valide-with-icon needs-validation" novalidate="" wire:submit.prevent="loginHandler()">
        <div class="mb-3">
            <label class="mb-1"><strong>Email</strong></label>
            <div class="input-group">
                <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
                <input type="email" class="form-control" wire:model="email" id="validationCustomUsername"
                    placeholder="hello@example.com" required="">
            </div>
            @error('email')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label class="text-label form-label" for="validationCustomUsername">Username</label>
            <div class="input-group">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                <input type="text" class="form-control" wire:model="email" id="validationCustomUsername"
                    placeholder="Enter a username.." required="">
            </div>
            @error('email')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div> --}}
        <div class="mb-3">
            <label class="mb-1"><strong>Password</strong></label>
            <div class="input-group transparent-append">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                <input type="password" class="form-control" wire:model="password" id="dlab-password"
                    placeholder="password" required="">
                {{-- <span class="input-group-text show-pass">
                    <i class="fa fa-eye-slash"></i>
                </span> --}}
            </div>
            @error('password')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label class="text-label form-label" for="dlab-password">Password *</label>
            <div class="input-group transparent-append">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                <input type="password" class="form-control" wire:model="password" id="dlab-password"
                    placeholder="Choose a safe one.." required="">
                <span class="input-group-text show-pass">
                    <i class="fa fa-eye-slash"></i>
                    <i class="fa fa-eye"></i>
                </span>
            </div>
            @error('password')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div> --}}
        <div class="row d-flex justify-content-between mt-4 mb-2">
            <div class="mb-3">
                <div class="form-check custom-checkbox ms-1">
                    <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                    <label class="form-check-label" wire:model='remember' for="basic_checkbox_1">Remember my
                        preference</label>
                </div>
            </div>
        </div>
        {{-- <div class="mb-3">

            <label>remeber me</label>
            <input wire:model='remember' type="checkbox">

        </div> --}}
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
        </div>
    </form>
    <div class="new-account mt-3">
        <p>Don't have an account? <a class="text-primary" href="{{ route('auth.register') }}">Sign up</a></p>
    </div>
</div>
