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
                                <h5 class="card-header">Data Kegiatan BKK</h5>
                                <a href="/index/add_kegiatan" type="button" class="btn rounded-pill btn-primary">Tambah
                                    +</a>
                                <table class="table" id="jurusan">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Judul</th>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        <?php $no = 1; ?>
                                        @foreach ($data as $kegiatan)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{$kegiatan->judul}}</td>
                                                <td style="width: 23pc">
                                                    @foreach (json_decode($kegiatan->foto) as $foto)
                                                    <img class="mx-1 my-1" src="{{ asset("assets/img/detailbkk/" .$foto ) }}" alt="" width="100px" height="100px">
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <a href="/index/editviewkegiatanbkk/{{$kegiatan->id}}" class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $kegiatan->id }}"
                                                        data-kegiatan="{{ $kegiatan->judul }}"><i
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
                    @include("Admin.layoutadmin.footer")
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
    @include("Admin.layoutadmin.jsadmin")
</body>
<script>
    $('.delete').click(function() {
        var jurusanid = $(this).attr('data-id');
        var jurusan = $(this).attr('data-kegiatan');

        swal({
                title: "Apakah kamu yakin?",
                text: "Kamu akan menghapus data " + jurusan,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletekegiatanbkk/" + jurusanid +""
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
</script>
<script>
    @if (Session::get('success'))
        toastr.success("{{ Session::get('success') }}")
    @endif
</script>

</html>
