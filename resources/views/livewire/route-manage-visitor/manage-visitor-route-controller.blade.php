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
            <li class=""><a class="has-arrow" href="javascript:void()" aria-expanded="false">Security</a>
                <ul aria-expanded="false" class="left mm-collapse" style="height: 14px;">
                    <li><a href="{{ route('home.track-visitor') }}/#">Track Visitor</a></li>
                    <li><a href="{{ route('home.lost-items') }}">Lost Item</a></li>
                </ul>
            </li>
        @endif
    </ul>
</li>
