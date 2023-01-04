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
                    @if (in_array(Auth::user()->role_id, [1, 2, 3]))
                        <li>
                            <a href="{{ route('home.visitor-data') }}">Visitor Data</a>
                        </li>
                    @endif
                    @if (in_array(Auth::user()->role_id, [6]))
                        <li>
                            <a href="{{ route('home.visitor-feedback') }}">Visitor Feedback</a>
                        </li>
                        @if (auth()->user()->role_id !== 6)
                            <li>
                                <a href="{{ route('home.form-kesehatan') }}">Form health</a>
                            </li>
                            <li>
                                <a href="{{ route('home.capture-ktp') }}">Take capture KTP</a>
                            </li>
                        @endif

                    @endif
                    @if (in_array(Auth::user()->role_id, [1, 2]))
                        <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false">Admin
                                GA</a>
                            <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                                <li><a href="{{ route('home.my-dashboard') }}">Dashboard GA</a></li>
                                <li><a href="{{ route('home.generate') }}">Generate</a></li>
                                <li><a href="{{ route('home.customize-feed') }}">Customize Feedback</a></li>
                                <li><a href="{{ route('home.visitor-approval') }}">Visitor Approval</a></li>
                            </ul>
                        </li>
                    @endif
                    @if (in_array(Auth::user()->role_id, [1, 3]))
                        <li class=""><a class="has-arrow" href="javascript:void()"
                                aria-expanded="false">Security</a>
                            <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                                <li><a href="{{ route('home.track-visitor') }}/#">Track Visitor</a></li>
                                <li><a href="{{ route('home.lost-items') }}">Lost Item</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </li>

            @if (auth()->user()->role_id !== 6)
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
                            <a href="{{ route('home.order-history') }}">Order History (GA)</a>
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

                        <li>
                            <a href=" {{ route('home.order-information') }}"> Order Information (Employee)</a>
                        </li>
                    </ul>
                </li>
            @endif

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa  fa-address-book"></i>
                    <span class="nav-text">Manage Account</span>
                </a>
                <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                    <li><a href="{{ route('home.employee-account') }}">Employee Account</a></li>
                    <li><a href="{{ route('home.vendor-account') }}">Vendor Account</a></li>
                    <li><a href="{{ route('home.visitor-account') }}">Visitor Account</a></li>
                    <li><a href="">Visitor Schedule</a></li>
                </ul>

            </li>

            <li>
                <a class="" href="{{ route('home.visitor-checking') }}" aria-expanded="false">
                    <i class="fa fa-user-check"></i>
                    <span class="nav-text">Visitor Checking</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa fa-user-astronaut"></i>
                    <span class="nav-text">Cleaning Service</span>
                </a>
                <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                    <li><a href="{{ route('home.cs') }}">Cleaning Service Form</a></li>
                    <li><a href="{{ route('home.cs.information') }}">Cleaning Service Information</a></li>
                </ul>
            </li>
    </div>
</div>
