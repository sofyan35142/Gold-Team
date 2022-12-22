<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark"
    data-assets-path="../../assets1/" data-template="vertical-menu-template-semi-dark">
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
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <h5 class="card-header">Tambah Anggota Struktur Organisasi BKK</h5>
                                    <div class="card-body">
                                        <form action="/editupdatesidesobkk" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="pembungkus">
                                                <div class="mb-3">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label>Nama :</label>
                                                            <input type="text" name="nama_member[]"
                                                                class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" required>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Foto Anggota :</label>
                                                            <i style="color:red;">Masukkan Foto Ukuran 160px x 200px</i>
                                                            <input type="file" name="foto_member[]"
                                                                class="form-control" id="exampleInputEmail1"
                                                                aria-describedby="emailHelp" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <button class="add_form_field">Adfield</button> --}}
                                            <button class="btn rounded-pill btn-primary add_form_field">Add New Field
                                                &nbsp; <span style="font-size:16px; font-weight:bold;">+
                                                </span></button>
                                            <button type="submit" class="btn rounded-pill btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
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
    @include("Admin.layoutadmin.jsadmin")
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#editor2'))
            .catch(error => {
                console.error(error);
            });
    </script>
</body>
<script>
    $(document).ready(function() {
        $('#jurusan').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        var max_fields = 5;
        var wrapper = $(".pembungkus");
        var add_button = $(".add_form_field");

        var x = 1;
        $(add_button).click(function(e) {
            e.preventDefault();
            if (x < max_fields) {
                x++;
                $(wrapper).append(
                    '<div class="mb-3 mt-5">\
                                                <div class="row">\
                                                    <div class="col-lg-6">\
                                                        <label>Nama :</label>\
                                                        <input type="text" name="nama_member[]" class="form-control"\
                                                            id="exampleInputEmail1" aria-describedby="emailHelp">\
                                                    </div>\
                                                    <div class="col-lg-6">\
                                                        <label>Foto Anggota :</label>\<i style="color:red;">Masukkan Foto Ukuran 160px x 200px</i>\
                                                        <input type="file" name="foto_member[]" class="form-control"\
                                                            id="exampleInputEmail1" aria-describedby="emailHelp">\
                                                    </div>\
                                                </div><button type="button" class="btn btn-danger delete float-right mt-2">Hapus</button>\
                                            </div>'
                ); //add input box
            } else {
                alert('Menambahkan Maximal 5')
            }
        });
        $(wrapper).on("click", ".delete", function(e) {
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });
</script>

</html>
