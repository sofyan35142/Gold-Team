<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark"
    data-assets-path="../../assets1/" data-template="vertical-menu-template-semi-dark">
@include('Admin.layoutadmin.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                                <h5 class="card-header">DAFTAR LOWONGAN KERJA</h5>
                                <a href="/index/addlowongankerja" type="button"
                                    class="btn rounded-pill btn-primary">Tambah
                                    +</a>
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Isi Artikel</th>
                                            <th scope="col">status</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php $no = 1; ?>
                                        @foreach ($lowongan as $data)
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td
                                                    style="
                                            width: 26pc;
                                            height: 19pc;
                                        ">
                                                    <img style="height: 22pc" class="w-100"
                                                        src="{{ asset('assets/img/lowongankerja/' . $data->foto) }}"
                                                        alt="struktur"></td>
                                                <td>{{ $data->judul }}</td>
                                                <td>{!! $data->deskripsi !!}</td>
                                                <td>{{$data->status}}</td>
                                                <td>
                                                    <a href="/index/editsobkk" class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $data->id }}"
                                                        data-jurusan="{{ $data->visi }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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
    @include('Admin.layoutadmin.jsadmin')
</body>
<script>
    $('.delete').click(function() {
        var jurusanid = $(this).attr('data-id');
        var jurusan = $(this).attr('data-jurusan');

        swal({
                title: "Apakah kamu yakin?",
                text: "Kamu akan mereset data ini",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletevisimisibkk"
                    swal("Data berhasil direset", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi direset");
                }
            });
    });
</script>
<script>
    $(document).ready(function() {
        $('#table1').DataTable();
    });
</script>
<script>
    @if (Session::get('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>

</html>
