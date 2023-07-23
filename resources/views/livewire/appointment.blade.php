@extends('layout.apps')
@section('title', 'Visiting Appointments')
@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('fail'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('fail') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="row">
        <div class="col-xl-9 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Visiting Appointments</h4>
                </div>

                <div class="card-body">
                    <div class="basic-form">
                        <form action="{{ route('home.create-appointment') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6 col-lg-12">
                                    <label class="form-label fs-4">Name</label>
                                    <input name="name" type="text" class="form-control" placeholder="Name"
                                        value="{{ auth()->user()->name }}" disabled>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-1"><strong><span class="text-danger">*</span>Phone</strong></label>
                                    <div class="input-group">
                                        <input type="phone" class="form-control" name="phone"
                                            placeholder="Input your phone number" required maxlength="15">
                                    </div>
                                    @error('phone')
                                        @if ($message == 'The phone field may not be greater than 15 characters.')
                                            <span class="text-red">Phone number must not exceed 15 characters.</span>
                                        @else
                                            <span class="text-red">{{ $message }}</span>
                                        @endif
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-1"><strong><span class="text-danger">*</span>Invitation
                                            From</strong></label>
                                    <div class="input-group">
                                        <select name="invitation_from" class="form-control select2"
                                            id="invitationFromSelect" required="">
                                            <option value="">Choose invitation from</option>
                                            @foreach ($karyawan as $k)
                                                @if ($k->name != 'admin')
                                                    <option value="{{ $k->name }}">{{ $k->name }}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('invitation_from')
                                        <span class="text-red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-1"><strong><span class="text-danger">*</span>Visitation
                                            Purpose</strong></label>
                                    <div class="input-group">
                                        <select name="visitation_purpose" class="form-control" required="">
                                            <option value="">Choose visitation purpose</option>
                                            <option value="Meeting">Meeting</option>
                                            <option value="Company Visit">Company Visit</option>
                                        </select>
                                    </div>
                                    @error('visitation_purpose')
                                        <span class="text-red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-1"><strong><span class="text-danger">*</span>Visit
                                            Date</strong></label>
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="visit_date" placeholder=""
                                            required="">
                                    </div>
                                    @error('visit_date')
                                        <span class="text-red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="mb-1"><strong><span class="text-danger">*</span>Arrival
                                            Time</strong></label>
                                    <div class="input-group">
                                        <input type="time" class="form-control" name="arrival_time" placeholder=""
                                            required="">
                                    </div>
                                    @error('arrival_time')
                                        <span class="text-red">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-google" style="color:white;">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
