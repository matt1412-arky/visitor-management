<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            @if (in_array(Auth::user()->role_id, [4]))
                <li class="{{ Request::route()->getName() == 'home.dashboard-visitor' ? 'active' : '' }}">
                    <a href="{{ route('home.dashboard-visitor') }}">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
            @else
                <li class="{{ Request::route()->getName() == 'home.dashboard-page' ? 'active' : '' }}">
                    <a href="{{ route('home.dashboard-page') }}">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
            @endif


            @if (in_array(Auth::user()->role_id, [1]))
                <li class="{{ request()->route()->getName() === 'home.lost-item.index'? 'active': '' }}">
                    <a href="{{ route('home.lost-item.index') }}">
                        <i class="fas fa-briefcase"></i>
                        <span class="nav-text">Lost Item</span>
                    </a>
                </li>
            @endif

            @if (in_array(Auth::user()->role_id, [3]))
                <li class="{{ Request::route()->getName() == 'home.lost-items' ? 'active' : '' }}">
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-address-book"></i>
                        <span class="nav-text">Security</span>
                    </a>
                    <ul aria-expanded="false">
                        <li class="{{ request()->route()->getName() === 'home.lost-item.index'? 'active': '' }}">
                            <a href="{{ route('home.lost-item.index') }}">Lost Item</a>
                        </li>
                        <li class="{{ Request::route()->getName() == 'home.security-visitor-data' ? 'active' : '' }}">
                            <a href="{{ route('home.security-visitor-data') }}">Security Visitation Data</a>
                        </li>
                    </ul>
                </li>
            @endif

            @if (in_array(Auth::user()->role_id, [1, 2]))
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

                <li class="{{ Request::route()->getName() == 'home.visiting-appointments' ? 'active' : '' }}">
                    <a href="{{ route('home.visiting-appointments') }}">
                        <i class="far fa-calendar-alt"></i>
                        <span class="nav-text">Visiting Appointments</span>
                    </a>
                </li>                
            @endif

            @if (in_array(Auth::user()->role_id, [1, 2]))
                <li
                    class="{{ Request::route()->getName() == 'home.employee-account' || Request::route()->getName() == 'home.visitor-account' ? 'active' : '' }}">
                    <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                        <i class="fa fa-address-book"></i>
                        <span class="nav-text">Manage Account</span>
                    </a>
                    <ul aria-expanded="false">
                        <li class="{{ Request::route()->getName() == 'home.employee-account' ? 'active' : '' }}">
                            <a href="{{ route('home.employee-account') }}">Employee Account</a>
                        </li>
                        <li class="{{ Request::route()->getName() == 'home.visitor-account' ? 'active' : '' }}">
                            <a href="{{ route('home.visitor-account') }}">Visitor Account</a>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
</div>
