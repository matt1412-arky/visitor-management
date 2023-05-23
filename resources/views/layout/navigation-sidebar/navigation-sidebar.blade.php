<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="{{ Request::route()->getName() == 'home.dashboard-page' ? 'active' : '' }}">
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
                <ul aria-expanded="false">
                    <li class="{{ Request::route()->getName() == 'home.dashboard-page' ? 'active' : '' }}">
                        <a href="{{ route('home.dashboard-page') }}">Dashboard</a>
                    </li>
                </ul>
            </li>

            @if (in_array(Auth::user()->role_id, [1, 2]))
                <li
                    class="{{ Request::route()->getName() == 'home.my-dashboard' || Request::route()->getName() == 'home.customize-feed' || Request::route()->getName() == 'home.visitor-approval' || Request::route()->getName() == 'home.visitor-checking' ? 'active' : '' }}">
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fas fa-search-location"></i>
                        <span class="nav-text">Manage Visitors</span>
                    </a>
                    <ul aria-expanded="false">
                        <li class="{{ Request::route()->getName() == 'home.my-dashboard' ? 'active' : '' }}"><a
                                href="{{ route('home.my-dashboard') }}">Dashboard GA</a></li>
                    </ul>
                </li>
            @endif

            @if (in_array(Auth::user()->role_id, [1, 3]))
                <li class="{{ Request::route()->getName() == 'home.lost-items' ? 'active' : '' }}">
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa  fa-address-book"></i>
                        <span class="nav-text">Security</span>
                    </a>
                    <ul aria-expanded="false">
                        <li class="{{ Request::route()->getName() == 'home.lost-items' ? 'active' : '' }}">
                            <a href="{{ route('home.lost-items') }}">Lost Item</a>
                        </li>
                    </ul>
                </li>
            @endif


            @if (in_array(Auth::user()->role_id, [1, 2, 3]))
                <li class="{{ Request::route()->getName() == 'home.visitor-data' ? 'active' : '' }}">
                    <a href="{{ route('home.visitor-data') }}">
                        <i class="fas fa-address-card"></i>
                        <span class="nav-text">Visitation Data</span>
                    </a>
                </li>
            @endif

            @if (in_array(Auth::user()->role_id, [4]))
                <li class="{{ Request::route()->getName() == 'home.visitor-feedback' ? 'active' : '' }}">
                    <a href="{{ route('home.visitor-feedback') }}">
                        <i class="far fa-comment"></i>
                        <span class="nav-text">Visitor Feedback</span>
                    </a>
                </li>
            @endif

            @if (in_array(Auth::user()->role_id, [1, 2]))
                <li
                    class="{{ Request::route()->getName() == 'home.employee-account' || Request::route()->getName() == 'home.visitor-account' ? 'active' : '' }}">
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa  fa-address-book"></i>
                        <span class="nav-text">Manage Account</span>
                    </a>
                    <ul aria-expanded="false" class="" style="height: 14px;">
                        <li class="{{ Request::route()->getName() == 'home.employee-account' ? 'active' : '' }}"><a
                                href="{{ route('home.employee-account') }}">Employee Account</a></li>
                        <li class="{{ Request::route()->getName() == 'home.visitor-account' ? 'active' : '' }}"><a
                                href="{{ route('home.visitor-account') }}">Visitor Account</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>
