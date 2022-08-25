<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>@yield('title')</title>
    <!-- FAVICONS ICON -->
    <link rel="support/shortcut icon" type="image/png" href="support/images/favicon.png" />
    <link href="support/vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" />
    <link href="support/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <link rel="stylesheet" href="support/vendor/nouislider/nouislider.min.css" />

    <!-- Style css -->
    <link href="support/css/style.css" rel="stylesheet" />
</head>

<body>
    <!--Preloader start-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--Preloader end-->

    @yield('content')

    <!--Scripts/ Required vendors -->
    <script src="support/vendor/global/global.min.js"></script>
    <script src="support/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="support/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>

    <!-- Apex Chart -->
    <script src="support/vendor/apexchart/apexchart.js"></script>

    <script src="support/vendor/chart.js/Chart.bundle.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="support/vendor/peity/jquery.peity.min.js"></script>
    <!-- Dashboard 1 -->
    <script src="support/js/dashboard/dashboard-1.js"></script>

    <script src="support/vendor/owl-carousel/owl.carousel.js"></script>

    <script src="support/js/custom.min.js"></script>
    <script src="support/js/dlabnav-init.js"></script>
    <script src="support/js/demo.js"></script>
    <script src="support/js/styleSwitcher.js"></script>
    <script>
        function cardsCenter() {
            /*  testimonial one function by = owl.carousel.js */

            jQuery(".card-slider").owlCarousel({
                loop: true,
                margin: 0,
                nav: true,
                //center:true,
                slideSpeed: 3000,
                paginationSpeed: 3000,
                dots: true,
                navText: [
                    '<i class="fas fa-arrow-left"></i>',
                    '<i class="fas fa-arrow-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    576: {
                        items: 1,
                    },
                    800: {
                        items: 1,
                    },
                    991: {
                        items: 1,
                    },
                    1200: {
                        items: 1,
                    },
                    1600: {
                        items: 1,
                    },
                },
            });
        }

        jQuery(window).on("load", function() {
            setTimeout(function() {
                cardsCenter();
            }, 1000);
        });
    </script>
</body>

</html>
