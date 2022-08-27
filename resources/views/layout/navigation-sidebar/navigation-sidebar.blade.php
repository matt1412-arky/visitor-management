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
                        <a href="#">Dashboard</a>
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
                        <a href="{{ route('registrasi') }}">Form Registrasi</a>
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
                </ul>
            </li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="	fas fa-bread-slice"></i>
                    <span class="nav-text">Food Management</span>
                </a>
                <ul aria-expanded="false">
                    <li>
                        <a href="#">Food Menu & List (vendor)</a>
                    </li>
                    <li>
                        <a href="{{ route('insert-menu') }}">Insert Menu (vendor)</a>
                    </li>
                    <li>
                        <a href="#">Vendor</a>
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
<div class="modal fade bd-example-modal-md hide" tabindex="-1" style="display: bloc;" aria-modal="true" role="dialog"
    id="ModalGPS">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alert GPS</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
            <div class="modal-body">
                <h5>Please turn on your GPS before filling this form to update your last location before leaving</h5>
                <button type="button" class="btn btn-google">Update Location</button>
                <button type="button" class="btn btn-danger light" data-bs-dismiss="modal"
                    onclick="closeModal()">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function closeModal() {
        const modalGps = document.getElementById('ModalGPS')
        modalGps.style.display = 'none';
    }
</script>
