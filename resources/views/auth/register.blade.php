<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=o">
    <link href='/support/images/avatar/favicon.png' rel="support/shortcut icon" type="image/png" />
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('support/css/style.css') }}">
    <livewire:styles>

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
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <div class="text-center mb-3">
                                        <a href="#" class="">
                                            <img src="{{ asset('support/images/avatar/login-b7.jpg') }}" width="300"
                                                height="" alt="logo bintang toejoe">
                                        </a>
                                    </div>
                                    <livewire:visitor-register />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <livewire:scripts>

</body>

</html>
