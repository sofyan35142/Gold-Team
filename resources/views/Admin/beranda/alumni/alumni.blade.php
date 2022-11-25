<!DOCTYPE html>
<!-- =========================================================
* Frest - Bootstrap Admin Template | v1.0.0
==============================================================

* Product Page: https://1.envato.market/frest_admin
* Created by: PIXINVENT
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright PIXINVENT (https://pixinvent.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-semi-dark" data-assets-path="../../assets1/" data-template="vertical-menu-template-semi-dark">
<!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/tables-datatables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 01:22:18 GMT -->
@include('Admin.layoutadmin.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<!-- DataTable with Buttons -->

<div class="card mb-4">
  <div class="card-datatable table-responsive pt-0">
    <h5 class="card-header">Blog</h5>
    <a href="/beranda/tambahalumni" type="button" class="btn rounded-pill btn-primary">Tambah</a>
    <table class="table" id="blog">
  <thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama</th>
      <th scope="col">Pekerjaan</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php $no = 1; ?>
    @foreach ($data as $alumni)
<tr>
        <td>{{ $no }}</td>
        <td>{{ $alumni->nama }}</td>
        <td>{{ $alumni->pekerjaan }}</td>
        <td style="word-break: break-all;">{!! $alumni->deskripsi !!}</td>
        <td>
            <img src="{{ asset('fotoalumni/' . $alumni->foto) }}" alt="" style="width: 80px; height:80px;">
        </td>


        <td>
            <a href="/beranda/editalumni/{{ $alumni->id }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
            <a href="#" class="btn btn-danger delete" data-id="{{ $alumni->id }}" data-alumni="{{ $alumni->nama }}"><i class="fa-solid fa-trash"></i></a>
        </td>
    </tr>


  </tbody>
   <?php $no++; ?>
@endforeach
</table>
  </div>
</div>
<!-- Modal to add new record -->


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
  <div class="container-fluid d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
          document.write(new Date().getFullYear())
      </script>
      , made with ❤️ by <a href="https://pixinvent.com/" target="_blank" class="footer-link fw-semibold">PIXINVENT</a>
    </div>
    <div>

      <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
      <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>

      <a href="https://pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/documentation-bs5/" target="_blank" class="footer-link me-4">Documentation</a>


      <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>

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
        var alumniid = $(this).attr('data-id');
        var alumni = $(this).attr('data-alumni');

        swal({
                title: "Apakah kamu yakin?",
                text: "Kamu akan menghapus alumni " + alumni + "",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/alumni/deletealumni/" + alumniid + ""
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
        $('#blog').DataTable();
    });
</script>
<script>
    @if (Session::get('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>

<!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/tables-datatables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 01:22:20 GMT -->
</html>