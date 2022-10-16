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
                    <li><a href="{{ route('home.barcode') }}">Scan QR</a></li>
                    <li>
                        {{--  <a href="{{ route('home.registrasi') }}">Form Registrasi</a>  --}}
                    </li>
                    <li>
                        <a href="{{ route('home.visitor-data') }}">Visitor Data</a>
                    </li>
                    <li>
                        <a href="{{ route('home.lost-items') }}">Lost Items</a>
                    </li>
                    <li>
                        <a href="{{ route('home.visitor-arival') }}">Visitor Arival</a>
                    </li>
                    <li>
                        <a href="{{ route('home.visitor-feedback') }}">Visitor Feedback</a>
                    </li>
                    <li>
                        <a href="{{ route('home.form-kesehatan') }}">Form health</a>
                    </li>
                    <li>
                        <a href="{{ route('home.capture-KTP') }}">Capture KTP</a>
                    </li>
                    <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false">Admin GA</a>
                        <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                            <li><a href="/#">Dashboard</a></li>
                            <li><a href="{{ route('home.generate') }}">Generate</a></li>
                            <li><a href="{{ route('home.customize-feed') }}">Customize Feedback</a></li>

                        </ul>
                    </li>
                    <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false">Security</a>
                        <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                            <li><a href="{{ route('home.scan-qr') }}">QR Scan Code</a></li>
                            <li><a href="{{ route('home.lost-items') }}">Lost Item</a></li>
                            <li><a href="{{ route('home.visitor-approval') }}">Visitor Approval</a></li>
                        </ul>
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
                        <a href="{{ route('home.insert-menu') }}">Insert Menu (vendor)</a>
                    </li>

                    <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false">View Menu
                            (Vendor)</a>
                        <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                            <a href="{{ route('home.food-menu') }}">Food</a>
                            <li><a href="{{ route('home.beverage-menu') }}">Beverage</a></li>

                        </ul>
                    </li>

                    <li>
                        <a href="{{ route('home.menu-from-vendor') }}">Menu From Vendor (GA)</a>
                    </li>
                    <li>
                        <a href="{{ route('home.form-feedback') }}"> Form Feedback (Employee)</a>
                    </li>
                    <li>
                        <a href="{{ route('home.confirmed-order') }}"> Confirmed Order (vendor)</a>
                    </li>
                    <li>
                        <a href="{{ route('home.blast-email') }}"> Blast Email (GA)</a>
                    </li>
                    <li>
                        <a href="{{ route('home.food-order') }}"> Food Order (Employee)</a>
                    </li>
                    <li>
                        <a href=" {{ route('home.customer-feedback') }}"> Customer Feedback (Vendor)</a>
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
