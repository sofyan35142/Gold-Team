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
                                <h5 class="card-header">DAFTAR MOU NAMA PERUSAHAAN MITRA SMKN 1 SUKOREJO</h5>
                                <a href="/index/addpt" type="button" class="btn rounded-pill btn-primary">Tambah
                                    +</a>
                                <table class="table" id="table1">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama Perusahaan</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">no perusahaan</th>
                                            <th scope="col">Masa Berlaku</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php $no = 1; ?>
                                        @foreach ($perusahaan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{$data->dudi}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->nomor}}</td>
                                            <td>{{$data->masa_berlaku}}</td>
                                            <td>
                                                <a href="/index/showaddpt/{{$data->id}}" class="btn btn-warning"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger delete"
                                                    data-id="{{ $data->id }}" data-jurusan="{{ $data->dudi }}"><i
                                                        class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-datatable table-responsive pt-0">
                                <h5 class="card-header">DAFTAR MOU NAMA UMKM PASANGAN
                                    SMKN 1 SUKOREJO</h5>
                                <a href="/index/addumkm" type="button" class="btn rounded-pill btn-primary">Tambah
                                    +</a>
                                <table class="table" id="table2">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama UMKM</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Bidang</th>
                                            <th scope="col">Pemilik</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php $no = 1; ?>
                                    @foreach ($umkmpasangan as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{$data->nama_umkm}}</td>
                                            <td>{{$data->bidang}}</td>
                                            <td>{{$data->alamat}}</td>
                                            <td>{{$data->pemilik}}</td>
                                            <td>
                                                <a href="/index/showumkm/{{$data->id}}" class="btn btn-warning"><i
                                                        class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn btn-danger delete2"
                                                    data-id="{{ $data->id }}" data-jurusan="{{ $data->nama_umkm }}"><i
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
                                ??
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>
                                , made with ?????? by <a href="https://pixinvent.com/" target="_blank"
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
                text: "Kamu akan menghapus data "+ jurusan,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletemitra/" +jurusanid + ""
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
    $('.delete2').click(function() {
        var jurusanid = $(this).attr('data-id');
        var jurusan = $(this).attr('data-jurusan');

        swal({
                title: "Apakah kamu yakin?",
                text: "Kamu akan menghapus data "+jurusan,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deleteumkm/" +jurusanid + ""
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
    $(document).ready(function() {
        $('#table2').DataTable();
    });
</script>
<script>
    @if (Session::get('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>

</html>
