<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark"
    data-assets-path="http://127.0.0.1:8000/assets1/" data-template="vertical-menu-template-semi-dark">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Modals - UI elements | Frest - Bootstrap Admin Template</title>

        <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
        <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 admin, bootstrap 5 design, bootstrap 5">
        <!-- Canonical SEO -->
        <link rel="canonical" href="https://1.envato.market/frest_admin">

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/assets/img/favicon/favicon.ico" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="../../assets1/vendor/fonts/boxicons.css" />
        <link rel="stylesheet" href="../../assets1/vendor/fonts/fontawesome.css" />
        <link rel="stylesheet" href="../../assets1/vendor/fonts/flag-icons.css" />

        <!-- Core CSS -->
        <link rel="stylesheet" href="../../assets1/vendor/css/rtl/core.css" class="template-customizer-core-css" />
        <link rel="stylesheet" href="../../assets1/vendor/css/rtl/theme-semi-dark.css" class="template-customizer-theme-css" />
        <link rel="stylesheet" href="../../assets1/css/demo.css" />

        <!-- Vendors CSS -->
        <link rel="stylesheet" href="../../assets1/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
        <link rel="stylesheet" href="../../assets1/vendor/libs/typeahead-js/typeahead.css" />
        <link rel="stylesheet" href="../../assets1/vendor/libs/animate-css/animate.css">

        <!-- Page CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
        <!-- Helpers -->
        <script src="../../assets1/vendor/js/helpers.js"></script>

        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="../../assets1/vendor/js/template-customizer.js"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="../../assets1/js/config.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'GA_MEASUREMENT_ID');
        </script>
        <!-- Custom notification for demo -->
        <!-- beautify ignore:end -->

    </head>
<body>
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
                        <!-- DataTable with Buttons -->
                        <div class="card mb-4">
                            <div class="card-datatable table-responsive pt-0">
                                <h5 class="card-header">Data sejarahsingkat</h5>
                                {{-- <a href="/index/addsejarahsingkat" type="button"
                                    class="btn rounded-pill btn-primary">Tambah +</a> --}}
                                <table class="table" id="jurusan">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Isi Artikel</th>
                                            <th scope="col">Judul Foto Side</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php $no = 1; ?>
                                        <tr>
                                            <td>{{ $no }}</td>
                                            <td>{{ $sejarah->judul }}</td>
                                            <td>{!! $sejarah->isi_artikel !!}</td>
                                            <td>{{ $sejarah->judul_fotoside }}</td>
                                            {{-- <td>
                                                    <img src="{{ asset('fotosejarah/' . $sejarah->foto_side) }}" alt=""
                                                        style="width: 80px; height:80px;">
                                                </td> --}}
                                            <td>
                                                <a href="/sejarahsingkat/edit"
                                                    class="btn btn-warning"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                {{-- <a href="#" class="btn btn-danger delete"
                                                    data-id="{{ $sejarah->id }}"
                                                    data-sejarah="{{ $sejarah->judul }}"><i
                                                        class="fa-solid fa-trash"></i></a> --}}
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php $no++; ?>
                                </table>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-datatable table-responsive pt-0">
                                <h5 class="card-header">Daftar Foto Side</h5>
                                <a href="/index/addsidesejarahsingkat" type="button"
                                    class="btn rounded-pill btn-primary">Tambah +</a>
                                <table class="table" id="sidefoto">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php $no = 0;
                                        $idarray = -1; ?>
                                        @foreach (json_decode($sejarah->foto_side) as $data)
                                            <?php $no++;
                                            $idarray++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td><img src="{{ asset('assets/img/side sejarah/' . $data) }}"
                                                        alt="" width="100px" height="100px"></td>
                                                <td>
                                                    <button class="btn btn-warning" data-bs-toggle="modal"
                                                        data-bs-target="#smallModal{{ $no }}"><i
                                                            class="fa-solid fa-pen-to-square"></i></button>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $idarray }}"
                                                        data-sejarah="{{ $data }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <div class="modal fade" id="smallModal{{ $no }}" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-sm" role="document">
                                                    <form action="/editsidesejarah/{{$idarray}}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel2">Edit Foto
                                                                Side
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col mb-3">
                                                                    <img class="mb-3" src="{{ asset('assets/img/side sejarah/' . $data) }}"
                                                                        alt="" width="100px" height="100px">
                                                                    <input type="file" name="foto_side" id="nameSmall"
                                                                        class="form-control" placeholder="Enter Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-label-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Save
                                                                changes</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                    <?php $no++; ?>
                                </table>
                            </div>
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
                                </script>
                                , made with ❤️ by <a href="https://pixinvent.com/" target="_blank"
                                    class="footer-link fw-semibold">PIXINVENT</a>
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
                    </footer>
                    <!-- / Footer -->
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
        <a href="https://1.envato.market/frest_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
    </div>
    <!-- Core JS -->
    <!-- build:js assets1/vendor/js/core.js -->
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
    <script src="../../assets1/vendor/libs/datatables/jquery.dataTables.js"></script>
    <script src="../../assets1/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets1/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
    <script src="../../assets1/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
    <script src="../../assets1/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js"></script>
    <script src="../../assets1/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
    <script src="../../assets1/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
    <script src="../../assets1/vendor/libs/jszip/jszip.js"></script>
    <script src="../../assets1/vendor/libs/pdfmake/pdfmake.js"></script>
    <script src="../../assets1/vendor/libs/datatables-buttons/buttons.html5.js"></script>
    <script src="../../assets1/vendor/libs/datatables-buttons/buttons.print.js"></script>
    <!-- Flat Picker -->
    <script src="../../assets1/vendor/libs/moment/moment.js"></script>
    <script src="../../assets1/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- Row Group JS -->
    <script src="../../assets1/vendor/libs/datatables-rowgroup/datatables.rowgroup.js"></script>
    <script src="../../assets1/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js"></script>
    <!-- Form Validation -->
    <script src="../../assets1/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
    <script src="../../assets1/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
    <script src="../../assets1/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

    <!-- Main JS -->
    <script src="../../assets1/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets1/js/tables-datatables-basic.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
</body>
<script>
    $('.delete').click(function() {
        var sejarahid = $(this).attr('data-id');
        var sejarah = $(this).attr('data-sejarah');

        swal({
                title: "Apakah kamu yakin?",
                text: "Kamu akan menghapus sejarah data ini",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/sidesejarahdelete/" + sejarahid + ""
                    swal("Data berhasil dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi dihapus");
                }
            });
    });
</script>
<script>
    $(document).ready(function() {
        $('#jurusan').DataTable();
    });
    $(document).ready(function() {
        $('#sidefoto').DataTable();
    });
</script>
<script>
    @if (Session::get('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>

</html>
