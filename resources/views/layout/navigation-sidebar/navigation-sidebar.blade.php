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
                        <a href="#">Dashboard Light</a>
                    </li>
                    <li>
                        <a href="#">Dashboard Dark</a>
                    </li>

                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="fas fa-chart-line"></i>
                    <span class="nav-text">Manage Visitors</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('scan-qr') }}">Scan QR</a></li>
                    <li>
                        <a href="{{ route('registrasi') }}">Form Registrasi</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>
