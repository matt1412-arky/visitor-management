@section('title', ' Visitor Registration ')
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
    <form class="form-valide-with-icon needs-validation" novalidate="" wire:submit.prevent="register()">
        <div class="mb-3">
            <label class="mb-1"><strong><span class="text-danger">*</span>Fullname</strong></label>
            <div class="input-group">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                <input type="text" class="form-control" wire:model="name" id="validationCustomUsername"
                    placeholder="Input your fullname" required="">
            </div>
            @error('name')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong><span class="text-danger">*</span>Email</strong></label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                <input type="email" class="form-control" wire:model="email" id="validationCustomUsername"
                    placeholder="hello@example.com" required="">
            </div>
            @error('email')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong><span class="text-danger">*</span>Password</strong></label>
            <div class="input-group transparent-append">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" wire:model="password" id="dlab-password"
                    placeholder="password" required="">

            </div>
            @error('password')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong><span class="text-danger">*</span>Phone</strong></label>
            <div class="input-group">
                <span class="input-group-text"><i class='fas fa-phone'></i></span>
                <input type="phone" class="form-control" wire:model="phone" id="validationCustomUsername"
                    placeholder="Input your phone number" required="">
            </div>
            @error('phone')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong><span class="text-danger">*</span>Invitation From</strong></label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-address-card"></i></span>
                <input type="text" class="form-control" wire:model="invitation_from" id="validationCustomUsername"
                    placeholder="Input invitation from" required="">
            </div>
            @error('invitation_from')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong><span class="text-danger">*</span>Visitation Purpose</strong></label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-clipboard"></i></span>
                <input type="text" class="form-control" wire:model="visitation_purpose" id="validationCustomUsername"
                    placeholder="Input your visitation purpose" required="">
            </div>
            @error('visitation_purpose')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="mb-1"><strong><span class="text-danger">*</span>Waktu Kunjungan</strong></label>
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                <input type="date" class="form-control" wire:model="waktu_kunjungan" id="validationCustomUsername"
                    placeholder="" required="">
            </div>
            @error('waktu_kunjungan')
                <span class="text-red">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </div>
    </form>

</div>

@push('scripts')
    <script>
        window.addEventListener('showToastr', (e) => {
            Swal.fire({
                title: e.detail.title,
                text: e.detail.msg,
                type: e.detail.type,
                timer: 5000,
                confirmButtonText: 'Save',
                timerProgressBar: true,
                onClose: () => window.location.href = '/h/dashboard-page'
            })
        })
    </script>
@endpush
