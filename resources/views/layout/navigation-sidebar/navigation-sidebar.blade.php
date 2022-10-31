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
            <livewire:route-manage-visitor.manage-visitor-route-controller />

            @if (auth()->user()->role_id !== 6)
                <livewire:food-management-route.food-management-food-route-controller />
            @endif

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fa  fa-address-book"></i>
                    <span class="nav-text">Manage Account</span>
                </a>
                <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                    <li><a href="{{ route('home.employee-account') }}">Employee Account</a></li>
                    <li><a href="{{ route('home.vendor-account') }}">Vendor Account</a></li>
                </ul>

            </li>

            <li>
                <a class="" href="{{ route('home.visitor-checking') }}" aria-expanded="false">
                    <i class="fa fa-user-check"></i>
                    <span class="nav-text">Visitor Chacking</span>
                </a>
            </li>
        </ul>
    </div>
</div>
