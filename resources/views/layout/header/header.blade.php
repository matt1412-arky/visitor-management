<div class="header border-bottom">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">Dashboard</div>

                </div>
                <ul class="navbar-nav header-right">
                    <li class="nav-item dropdown header-profile">
                        <span class="me-2">
                            {{ __(auth()->user()->name) }}
                            {{ __(auth()->user()->role_id) }}
                        </span>
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('support/images/avatar/logo-b7.jpeg') }}" width="56"
                                alt="logo-bintang toejoe" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <form action="{{ route('home.logout') }}" method="POST">
                                @csrf
                                <button class="btn" type="submit"> Logout
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                        width="18" height="18" viewbox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12">
                                        </line>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
