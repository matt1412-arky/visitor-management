@extends('layout.apps')
@section('title', 'Dashboard Admin')
@section('content')
    <div class="row">

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Nutrition Value Table</h3>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="text-muted">
                            Show
                            <div class="mx-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" value="8" size="3"
                                    aria-label="Invoices count">
                            </div>
                            entries
                        </div>
                        <div class="ms-auto text-muted">
                            Search:
                            <div class="ms-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                            </div>
                        </div>
                        <div class="">
                            <div class="ms-2 d-inline-block">
                                <button class="btn btn-google btnOpenModal">Add New</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select all invoices"></th>
                                <th class="w-1">No</th>
                                <th>Makanan/Minuman</th>
                                <th>Air</th>
                                <th>Energi</th>
                                <th>Protein</th>
                                <th>Kalsium</th>
                                <th>Fosfor</th>
                                <th>Zat Besi</th>
                                <th>Natrium</th>
                                <th>Kalium</th>
                                <th>Zinc</th>
                                <th>Niasin</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                        aria-label="Select invoice"></td>
                                <td><span class="text-muted">1</span></td>
                                <td><a href="invoice.html" class="text-reset" tabindex="-1">Ayam Bakso</a></td>
                                <td>
                                    <span class="flag flag-country-us"></span>
                                    55.9 ml
                                </td>
                                <td>
                                    298 kal
                                </td>
                                <td>
                                    18,34 gr
                                </td>
                                <td>
                                    38 gr
                                </td>
                                <td>
                                    234 mg
                                </td>
                                <td>
                                    45 mg
                                </td>
                                <td>
                                    35 mg
                                </td>

                                <td>
                                    65 mg
                                </td>
                                <td>
                                    <span class="badge bg-success me-1"></span> 56 mg
                                </td>
                                <td>45 mg</td>
                                <td class="text-end">
                                    <span class="dropdown">
                                        <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                            data-bs-toggle="dropdown">Actions</button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">
                                                Action
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                Another action
                                            </a>
                                        </div>
                                    </span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class="pagination m-0 ms-auto">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="15 6 9 12 15 18"></polyline>
                                </svg>
                                prev
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                next
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <polyline points="9 6 15 12 9 18"></polyline>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    // modal create check nutrition

    <div class="modal modal-blur fade show" id="modal-large" tabindex="-1" role="dialog" aria-modal="true"
        style="display: none;">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Nutrition Value</h5>
                    <button type="button" class="btn-close btnclose" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floating-input" value="name@example.com"
                                autocomplete="off">
                            <label for="floating-input">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floating-password" value="Password"
                                autocomplete="off">
                            <label for="floating-password">Password</label>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto btnclose" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const modalCheckNutrition = document.getElementById('modal-large')
        document.querySelectorAll('.btnclose').forEach((element) => {
            element.addEventListener('click', () => {
                if (modalCheckNutrition.style.display == 'block') {
                    modalCheckNutrition.style.display = 'none'
                }
            })
        })
        document.querySelector('.btnOpenModal').addEventListener('click', (e) => {
            modalCheckNutrition.style.display = 'block'
        })
    </script>
@endsection
