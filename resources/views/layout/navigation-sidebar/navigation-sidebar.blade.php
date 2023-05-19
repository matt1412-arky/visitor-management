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

            @if (in_array(Auth::user()->role_id, [1, 2, 3]))
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-search-location"></i>
                        <span class="nav-text">Manage Visitors</span>
                    </a>
                    <ul aria-expanded="false">
                        <li>
                            <a href="{{ route('home.visitor-data') }}">Visitor Data</a>
                        </li>
            @endif

            @if (in_array(Auth::user()->role_id, [4]))
                <li>
                    <a href="{{ route('home.visitor-feedback') }}">
                        <i class="far fa-comment"></i>
                        <span class="nav-text">Visitor Feedback</span>
                    </a>
                </li>
            @endif

            @if (in_array(Auth::user()->role_id, [1, 2]))
                <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false">Admin GA</a>
                    <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                        <li><a href="{{ route('home.my-dashboard') }}">Dashboard GA</a></li>
                        <li><a href="{{ route('home.customize-feed') }}">Customize Feedback</a></li>
                        <li><a href="{{ route('home.visitor-approval') }}">Visitor Approval</a></li>
                    </ul>
                </li>
            @endif

            @if (in_array(Auth::user()->role_id, [1, 3]))
                <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false">Security</a>
                    <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                        <li><a href="{{ route('home.lost-items') }}">Lost Item</a></li>
                    </ul>
                </li>
            @endif

            @if (in_array(Auth::user()->role_id, [1, 2]))
                <li>
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa  fa-address-book"></i>
                        <span class="nav-text">Manage Account</span>
                    </a>
                    <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                        <li><a href="{{ route('home.employee-account') }}">Employee Account</a></li>
                        <li><a href="{{ route('home.visitor-account') }}">Visitor Account</a></li>
                        <li><a href="">Visitor Schedule</a></li>
                    </ul>
                </li>
            @endif

            {{-- @if (in_array(Auth::user()->role_id, [1, 2])) --}}
            <li>
                <a class="" href="{{ route('home.visitor-checking') }}" aria-expanded="false">
                    <i class="fa fa-user-check"></i>
                    <span class="nav-text">Visitor Checking</span>
                </a>
            </li>
        </ul>
    </div>
</div>
