<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark"
    data-assets-path="../../assets1/" data-template="vertical-menu-template-semi-dark">
<!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 01:20:23 GMT -->
@include('Admin.layoutadmin.head')

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            <!-- Menu -->
            @include('Admin.layoutadmin.sidebar')
            <!-- / Menu -->
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                @include('Admin.layoutadmin.navbar')
                <!-- / Navbar -->
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <!-- Website Analytics-->


                            <!-- Referral, conversion, impression & income charts -->
                            <div class="col-lg-6 col-md-12">
                                <div class="row">
                                    <!-- Referral Chart-->

                                    <!-- Conversion Chart-->

                                    <!-- Impression Radial Chart-->

                                    <!-- Growth Chart-->
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between" style="position: relative;">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial bg-label-primary rounded-circle"><i
                                                                    class="bx bx-user fs-4"></i></span>
                                                        </div>
                                                        <div class="card-info">
                                                            <h5 class="card-title mb-0 me-2">{{ $jurusan }}</h5>
                                                            <small class="text-muted">Jurusan</small>
                                                        </div>
                                                    </div>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 178px; height: 43px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between" style="position: relative;">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial bg-label-primary rounded-circle"><i
                                                                    class="bx bx-user fs-4"></i></span>
                                                        </div>
                                                        <div class="card-info">
                                                            <h5 class="card-title mb-0 me-2">{{ $sponsor }}</h5>
                                                            <small class="text-muted">KerjaSama</small>
                                                        </div>
                                                    </div>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 178px; height: 43px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between" style="position: relative;">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial bg-label-primary rounded-circle"><i
                                                                    class="bx bx-user fs-4"></i></span>
                                                        </div>
                                                        <div class="card-info">
                                                            <h5 class="card-title mb-0 me-2">{{ $blog }}</h5>
                                                            <small class="text-muted">Berita</small>
                                                        </div>
                                                    </div>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 178px; height: 43px;"></div>
                                                        </div>
                                                    <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between" style="position: relative;">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial bg-label-primary rounded-circle"><i
                                                                    class="bx bx-user fs-4"></i></span>
                                                        </div>
                                                        <div class="card-info">
                                                            <h5 class="card-title mb-0 me-2">{{ $jurusan }}</h5>
                                                            <small class="text-muted">Jurusan</small>
                                                        </div>
                                                    </div>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 178px; height: 43px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between" style="position: relative;">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial bg-label-primary rounded-circle"><i
                                                                    class="bx bx-user fs-4"></i></span>
                                                        </div>
                                                        <div class="card-info">
                                                            <h5 class="card-title mb-0 me-2">{{ $jurusan }}</h5>
                                                            <small class="text-muted">Jurusan</small>
                                                        </div>
                                                    </div>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 178px; height: 43px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between" style="position: relative;">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="avatar">
                                                            <span
                                                                class="avatar-initial bg-label-primary rounded-circle"><i
                                                                    class="bx bx-user fs-4"></i></span>
                                                        </div>
                                                        <div class="card-info">
                                                            <h5 class="card-title mb-0 me-2">{{ $jurusan }}</h5>
                                                            <small class="text-muted">Jurusan</small>
                                                        </div>
                                                    </div>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 178px; height: 43px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Referral, conversion, impression & income charts -->

                            <!-- Activity -->
                            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Data</h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="p-0 m-0">
                                            <li class="d-flex mb-4 pb-2">
                                                <div class="avatar avatar-sm flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded-circle bg-label-primary"><i
                                                            class="bx bx-cube"></i></span>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Guru</span>
                                                        <span class="text-muted">{{ $guru }}</span>
                                                    </div>
                                                    <div class="progress" style="height:6px;">
                                                        <div class="progress-bar bg-primary" style="width: 40%"
                                                            role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-2">
                                                <div class="avatar avatar-sm flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded-circle bg-label-success"><i
                                                            class="bx bx-dollar"></i></span>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Dharmawanita</span>
                                                        <span class="text-muted">{{ $dharma }}</span>
                                                    </div>
                                                    <div class="progress" style="height:6px;">
                                                        <div class="progress-bar bg-success" style="width: 80%"
                                                            role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-4 pb-2">
                                                <div class="avatar avatar-sm flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                            class="bx bx-trending-up"></i></span>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Walas</span>
                                                        <span class="text-muted">{{ $walas }}</span>
                                                    </div>
                                                    <div class="progress" style="height:6px;">
                                                        <div class="progress-bar bg-warning" style="width: 80%"
                                                            role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-flex mb-2">
                                                <div class="avatar avatar-sm flex-shrink-0 me-3">
                                                    <span class="avatar-initial rounded-circle bg-label-danger"><i
                                                            class="bx bx-check"></i></span>
                                                </div>
                                                <div class="d-flex flex-column w-100">
                                                    <div class="d-flex justify-content-between mb-1">
                                                        <span>Ekstra</span>
                                                        <span class="text-muted">{{ $ekstra }}</span>
                                                    </div>
                                                    <div class="progress" style="height:6px;">
                                                        <div class="progress-bar bg-danger" style="width: 25%"
                                                            role="progressbar" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ Activity -->
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-f3a706da-b581-4af7-9b10-e84b26128d4e"></div>
                            <!-- Profit Report & Registration -->

                            <!--/ Profit Report & Registration -->

                            <!-- Sales -->

                            <!--/ Sales -->

                            <!-- Growth Chart-->

                            <!-- Growth Chart-->

                            <!-- Finance Summary -->

                            <!-- Finance Summary -->

                            <!-- Activity Timeline -->

                            <!--/ Activity Timeline -->
                        </div>


                    </div>
                    <!-- / Content -->




                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div
                            class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>2022
                                , made with ❤️ by <a href="https://pixinvent.com/" target="_blank"
                                    class="footer-link fw-semibold">GOOD TEAM</a>
                            </div>
                            <div>

                                <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                                    target="_blank">License</a>
                                <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                                    class="footer-link me-4">More Themes</a>

                                <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation-bs5/"
                                    target="_blank" class="footer-link me-4">Documentation</a>


                                <a href="https://pixinvent.ticksy.com/" target="_blank"
                                    class="footer-link d-none d-sm-inline-block">Support</a>

                            </div>
                        </div>
                    </footer> <!-- / Footer -->


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->


    <div class="buy-now">
        <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy
            Now</a>
    </div>




    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../assets1/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets1/vendor/libs/popper/popper.js"></script>
    <script src="../../assets1/vendor/js/bootstrap.js"></script>
    <script src="../../assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../assets1/vendor/libs/hammer/hammer.js"></script>


    <script src="../../assets1/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets1/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="../../assets1/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets1/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets1/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets1/js/dashboards-analytics.js"></script>
</body>
<!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 01:20:25 GMT -->

</html>
