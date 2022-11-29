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
                                    <h5 class="card-header">Tambah profile sekolah</h5>
                                    <div class="card-body">
                                        <form action="/insertprofil" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <h5>Identitas</h5>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Foto
                                                    Sekolah:</label>
                                                <input type="file" name="foto_sekolah" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Nama
                                                    Sekolah:</label>
                                                <input type="text" name="nama_sekolah" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">NPSN:</label>
                                                <input type="text" name="npsn" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Desa:</label>
                                                <input type="text" name="desa" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput"
                                                    class="form-label">Kecamatan:</label>
                                                <input type="text" name="kecamatan" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Daerah:</label>
                                                <input type="text" name="daerah" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput"
                                                    class="form-label">Provinsi:</label>
                                                <input type="text" name="provinsi" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Kode
                                                    Pos:</label>
                                                <input type="text" name="kode_pos" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Alamat :</label>
                                                <input type="text" name="alamat" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">No
                                                    Telepon:</label>
                                                <input type="text" name="no_telp" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Email:</label>
                                                <input type="text" name="email" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Kegiatan
                                                    Pembelajaran:</label>
                                                <input type="text" name="kegiatan_pembelajaran" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Waktu
                                                    Penyelenggaraan:</label>
                                                <input type="text" name="waktu_penyelenggaraan"
                                                    class="form-control" id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Jarak Ke Pusat
                                                    Kecematan:</label>
                                                <input type="text" name="jarak_ke_pusat_kecamatan"
                                                    class="form-control" id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Jarak Ke Pusat
                                                    Daerah:</label>
                                                <input type="text" name="jarak_ke_pusat_daerah"
                                                    class="form-control" id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Tahun
                                                    Berdiri:</label>
                                                <input type="text" name="tahun_berdiri" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">penerbit
                                                    SK:</label>
                                                <input type="text" name="penerbit_SK" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">SK Pendirian
                                                    Sekolah:</label>
                                                <input type="text" name="sk_pendirian_sekolah"
                                                    class="form-control" id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Status
                                                    Sekolah:</label>
                                                <input type="text" name="status_sekolah" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput"
                                                    class="form-label">Kurikulum:</label>
                                                <input type="text" name="kurikulum" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Status
                                                    Bos:</label>
                                                <input type="text" name="status_bos" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Sumber
                                                    Listrik:</label>
                                                <input type="text" name="sumber_listrik" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <div>
                                                <label for="defaultFormControlInput" class="form-label">Akses
                                                    Internet:</label>
                                                <input type="text" name="akses_internet" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" />
                                            </div>
                                            <button type="submit"
                                                class="btn rounded-pill btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- DataTable with Buttons -->
                        <!--/ DataTable with Buttons -->
                        <!-- Complex Headers -->
                        <!--/ Complex Headers -->
                        <!-- Row grouping -->
                        <!--/ Row grouping -->
                        <!-- Multilingual -->
                        <!--/ Multilingual -->
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
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
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

</html>
