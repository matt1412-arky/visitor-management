<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="{{ route('home.dashboard-page') }}#">Dashboard</a>
                    </li>

                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-search-location"></i>
                    <span class="nav-text">Manage Visitors</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('barcode') }}">Scan QR</a></li>
                    <li>
                        <a href="{{ route('home.registrasi') }}">Form Registrasi</a>
                    </li>
                    <li>
                        <a href="{{ route('visitor-data') }}">Visitor Data</a>
                    </li>
                    <li>
                        <a href="{{ route('lost-items') }}">Lost Items</a>
                    </li>
                    <li>
                        <a href="{{ route('visitor-arival') }}">Visitor Arival</a>
                    </li>
                    <li>
                        <a href="{{ route('visitor-feedback') }}">Visitor Feedback</a>
                    </li>
                    <li>
                        <a href="{{ route('form-kesehatan') }}">Form health</a>
                    </li>
                    <li>
                        <a href="{{ route('capture-KTP') }}">Take capture KTP</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="	fas fa-bread-slice"></i>
                    <span class="nav-text">Food Management</span>
                </a>
                <ul aria-expanded="false">

                    <li>
                        <a href="{{ route('insert-menu') }}">Insert Menu (vendor)</a>
                    </li>

                    <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false">View Menu
                            (Vendor)</a>
                        <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                            <a href="{{ route('food-menu') }}">Food</a>
                            <li><a href="{{ route('beverage-menu') }}">Beverage</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('menu-from-vendor') }}">Menu From Vendor (GA)</a>
                    </li>
                    <li>
                        <a href="{{ route('form-gizi') }}">Nutrition Verification (Gizi Verificator)</a>
                    </li>
                    <li>
                        <a href="{{ route('form-feedback') }}"> Form Feedback (Employee)</a>
                    </li>
                    <li>
                        <a href="{{ route('confirmed-order') }}"> Confirmed Order (vendor)</a>
                    </li>
                    <li>
                        <a href="{{ route('blast-email') }}"> Blast Email (GA)</a>
                    </li>
                    <li>
                        <a href="{{ route('food-order') }}"> Food Order (Employee)</a>
                    </li>
                    <li>
                        <a href="{{ route('customer-feedback') }}"> Customer Feedback (Vendor)</a>
                    </li>
                </ul>
            </li>
            <li>
                <a class="" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-qrcode"></i>
                    <span class="nav-text">Barcode</span>
                </a>
            </li>

        </ul>
    </div>
</div>
