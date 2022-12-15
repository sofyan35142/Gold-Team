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
                                    <h5 class="card-header">Edit Kegiatan BKK</h5>
                                    <div class="card-body">
                                        <form action="/editkegiatanbkk/{{$data->id}}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="defaultFormControlInput" class="form-label">judul</label>
                                                <input type="text" name="judul" class="form-control"
                                                    id="defaultFormControlInput"
                                                    aria-describedby="defaultFormControlHelp" value="{{$data->judul}}"/>
                                            </div>
                                            <label for="defaultFormControlInput" class="form-label mb-3">Foto kegiatan bkk</label>
                                            <div class="mb-3 row">
                                                <?php $key = 0 ?>
                                                @foreach (json_decode($data->foto) as $foto)
                                                <div class="col-4">
                                                    <img  src="{{ asset("assets/img/detailbkk/" .$foto ) }}" alt="" width="200px" height="200px" class="my-3">
                                                    <input type="file" name="foto[{{$key++}}]" class="form-control w-75"
                                                        id="defaultFormControlInput"
                                                        aria-describedby="defaultFormControlHelp" value="{{$data->judul}}"/>
                                                </div>
                                                @endforeach
                                            </div>
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
    @include('Admin.layoutadmin.jsadmin')
    <script>
        $(document).ready(function() {
            $('#jurusan').DataTable();
        });
    </script>
</body>

</html>
