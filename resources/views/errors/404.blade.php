<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <title>Error Page</title>
    @include('layout.template.style-css')

</head>

<body class="vh-100" data-typography="poppins" data-theme-version="light" data-layout="vertical"
    data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="overlay" data-sibebarbg="color_1"
    data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr"
    data-primary="color_1">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-7">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text fw-bold">404</h1>
                        <h4><i class="fa fa-exclamation-triangle text-warning"></i> The page you were looking for is not
                            found!</h4>
                        <p>You may have mistyped the address or the page may have moved.</p>
                        <div>
                            <a class="btn btn-primary" href="{{ route('home.dashboard-page') }}">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.template.style-js')
</body>

</html>
