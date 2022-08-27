<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=o">
    <title>Document</title>
    {{-- style --}}
    <link rel="stylesheet" href="{{ asset('support/css/style.css') }}">
</head>

<body>
    <div class="authincation h-100 ">
        <div class="container h-100 my-auto">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <div class="text-center mb-3">
                                        <a href="#" class="">
                                            <img src="{{ asset('support/images/avatar/login-b7.jpg') }}" width="300"
                                                height="" alt="logo bintang toejoe">
                                        </a>
                                    </div>

                                    <form class="form-valide-with-icon needs-validation" novalidate=""
                                        action="{{ url('dashboard-page') }}">
                                        <div class="mb-3">
                                            <label class="text-label form-label"
                                                for="validationCustomUsername">Username</label>
                                            <div class="input-group">
                                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                <input type="text" class="form-control" id="validationCustomUsername"
                                                    placeholder="Enter a username.." required="">
                                                <div class="invalid-feedback">
                                                    Please Enter a username.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="dlab-password">Password *</label>
                                            <div class="input-group transparent-append">
                                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                <input type="password" class="form-control" id="dlab-password"
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
