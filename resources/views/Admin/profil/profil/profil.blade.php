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
                                <h5 class="card-header">Data Profil Sekolah</h5>
                                {{-- <a href="/index/addprofil" type="button" class="btn rounded-pill btn-primary">Tambah
                                    +</a> --}}
                                <table class="table" id="jurusan">
                                    <thead>
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Identitas</th>
                                            <th scope="col">Keterangan</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-group-divider">
                                        @foreach ($data as $profil)
                                            <tr>
                                                <td>1</td>
                                                <td>Foto Sekolah:</td>
                                                <td>{{ $profil->foto_sekolah }}</td>
                                                <td>
                                                    <a href="/index/tambahprofil/foto_sekolah"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="foto_sekolah" data-profil="Foto Sekolah"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Nama Sekolah:</td>
                                                <td>{{ $profil->nama_sekolah }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="nama_sekolah"
                                                        data-profil="Nama Sekolah"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Nomor Pokok Sekolah Nasional (NPSN) :</td>
                                                <td>{{ $profil->npsn }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="npsn"
                                                        data-profil="NPSN"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Desa:</td>
                                                <td>{{ $profil->desa }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="desa"
                                                        data-profil="Desa"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Kecamatan:</td>
                                                <td>{{ $profil->kecamatan }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="kecamatan"
                                                        data-profil="kecamatan"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Daerah:</td>
                                                <td>{{ $profil->daerah }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="daerah"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Provinsi:</td>
                                                <td>{{ $profil->provinsi }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="provinsi"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Kode Pos:</td>
                                                <td>{{ $profil->kode_pos }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="kode pos"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Alamat:</td>
                                                <td>{{ $profil->alamat }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="alamat"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>No Telepon:</td>
                                                <td>{{ $profil->no_telp }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="No telepon"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Email :</td>
                                                <td>{{ $profil->email }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="Email"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Kegiatan Pembelajaran:</td>
                                                <td>{{ $profil->kegiatan_pembelajaran }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="Kegiatan Pembelajaran"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Waktu Penyelenggaraan:</td>
                                                <td>{{ $profil->waktu_penyelenggaraan }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Jarak Ke Pusat Kecamatan:</td>
                                                <td>{{ $profil->jarak_ke_pusat_kecamatan }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Jarak Ke Pusat Daerah:</td>
                                                <td>{{ $profil->jarak_ke_pusat_daerah }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Tahun Berdiri:</td>
                                                <td>{{ $profil->tahun_berdiri }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>penerbit_SK:</td>
                                                <td>{{ $profil->penerbit_SK }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>SK Pendirian Sekolah:</td>
                                                <td>{{ $profil->sk_pendirian_sekolah }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>Status Sekolah</td>
                                                <td>{{ $profil->status_sekolah }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>Kurikulum:</td>
                                                <td>{{ $profil->kurikulum }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Sumber Listrik:</td>
                                                <td>{{ $profil->sumber_listrik }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>Akses Internet:</td>
                                                <td>{{ $profil->akses_internet }}</td>
                                                <td>
                                                    <a href="/index/editstrukturorganisasi/{{ $profil->id }}"
                                                        class="btn btn-warning"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger delete"
                                                        data-id="{{ $profil->id }}"
                                                        data-profil="{{ $profil->judul }}"><i
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>
<script>
    $('.delete').click(function() {
        var profilid = $(this).attr('data-id');
        var profil = $(this).attr('data-profil');

        swal({
                title: "Apakah kamu yakin?",
                text: "Kamu akan menghapus data " + profil,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/profil/delete/" + profilid + ""
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
