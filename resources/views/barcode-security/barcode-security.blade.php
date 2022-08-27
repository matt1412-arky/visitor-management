<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barcode | Bintang Toe Joe</title>
    <link href="support/css/style.css" rel="stylesheet" />
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        {{-- overflow: hidden; --}}
    }

    #navmenu {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #navmenu li {
        padding: 0 1em;
    }
</style>

<body style="background-color: #fff">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-xl-2 offset-1">
                <img class="rounded img-responsive" src="{{ asset('support/images/avatar/login-b7.jpg') }}"
                    width="200" height="100" alt="">
            </div>
        </div>
        <div class="row justify-content-center py-2">
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Visitor Registration</h5>
                    </div>
                    <div class="card-body py-0">
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis,
                            pariatur.
                        </p>
                        <img class="card-img-bottom" src="{{ asset('support/icons/barcode/QR_code1.png') }}"
                            alt="QR-visitor" width="200" height="350">
                    </div>

                </div>
            </div>
            <div class="col-xl-5">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">GPS</h5>
                    </div>
                    <div class="card-body py-2">
                        <p class="card-text">This is a wider card with supporting text and below as a natural lead-in t
                        </p>
                        <img class="card-img-bottom" src="{{ asset('support/icons/barcode/QR_code1.png') }}"
                            width="200" height="350" alt="QR-GPS">
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 offset-1">
                <div class="card">
                    <div class="card-body ">
                        <ul id="navmenu">
                            <li>
                                <a href="{{ route('visitor-data') }}" class="btn btn-outline-primary btn-lg">
                                    Visitor Data
                                </a>
                            </li>
                            <li>
                                <a data-bs-toggle="modal" href="#" data-bs-target=".bd-example-modal-lg"
                                    type="button" class="btn btn-outline-primary btn-lg">
                                    Make a temporary account
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('track-visitor') }}" class="btn btn-primary btn-lg">
                                    Track Visitor
                                </a>
                            </li>
                            <li>
                                <a href="" class="btn btn-outline-primary btn-lg">
                                    Refresh Data
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="modal fade bd-example-modal-lg show " tabindex="-1" style="display: block;" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Generate Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <p>cotoh usernma</p>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <p>contoh password</p>
                            </div>
                        </div>
                        {{-- <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">Visitation Purpose</label>
                            <div class="col-sm-9">
                                <textarea name="" id="" class="form-control" cols="5"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-3 col-form-label">what division do you want to meet?</label>
                            <div class="col-sm-9">
                                <select name="" id="" class="form-control">
                                    @for ($i = 0; $i < 4; $i++)
                                        <option value=""></option>
                                    @endfor
                                </select>
                            </div>
                        </div> --}}
    <div class="mb-3 row">
        <div class="col-sm-10">
            <button type="submit" class="btn" style="background:#1b0888; color:#fff;">
                Close
            </button>
        </div>
    </div>
    </form>

    </div>

    </div>
    </div>
    </div> --}}
</body>

</html>
