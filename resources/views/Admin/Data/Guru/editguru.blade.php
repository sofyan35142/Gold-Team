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
                    <h5 class="card-header">Edit blog</h5>
                    <div class="card-body">
                        <form action="/data/updateguru/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                @csrf
                              <div class="row">
          <!-- Date Picker-->
          <div class="col-md-12 col-12 mb-4">
            <label for="flatpickr-date" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control"  id="flatpickr-date" value="{{ $data->nama }}" />
          </div>
          <!-- /Date Picker -->

 <!-- Datetime Picker-->
          <div class="col-md-12 col-12 mb-4">
            <label for="flatpickr-datetime" class="form-label">Nip</label>
            <input type="number" name="nip" class="form-control" id="flatpickr-datetime" value="{{ $data->nip }}" />
          </div>
          <!-- /Datetime Picker-->

          <!-- Time Picker-->
          <div class="col-md-6 col-12 mb-4">
            <label for="flatpickr-time" class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" id="flatpickr-time" value="{{ $data->jabatan }}" />
          </div>
          <!-- /Time Picker -->

          <!-- Multiple Dates Picker-->
          <div class="col-md-6 col-12 mb-4">
            <label for="flatpickr-multi" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" id="flatpickr-multi" value="{{ $data->tempat_lahir }}" />
          </div>
          <!-- /Multiple Dates Picker-->

          <!-- Range Picker-->
          <div class="col-md-6 col-12 mb-4">
            <label for="flatpickr-range" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="flatpickr-range" value="{{ $data->tgl_lahir }}" />
          </div>
          <!-- /Range Picker-->

          <!-- Human Friendly Date Picker-->
          <div class="col-md-6 col-12 mb-4">
            <label for="flatpickr-human-friendly" class="form-label">TMT Awal</label>
            <input type="date" name="tmt_awal" class="form-control" id="flatpickr-human-friendly" value="{{ $data->tmt_awal }}" />
          </div>
          <!-- /Human Friendly Date Picker-->

          <!-- Disabled Range-->
          <div class="col-md-6 col-12 mb-md-0 mb-4">
            <label for="flatpickr-disabled-range" class="form-label">Status</label>
            <input type="text" name="status" class="form-control" id="flatpickr-disabled-range" value="{{ $data->status }}" />
          </div>
          <!-- /Disabled Range-->

          <!-- Inline Picker-->
          <div class="col-md-6 col-12">
            <label for="flatpickr-inline" class="form-label">Golongan Ruangan</label>
            <input type="text" name="gol_ruangan" class="form-control mb-1" id="flatpickr-inline" value="{{ $data->gol_ruangan }}" />
          </div>
          <!-- /Inline Picker-->
<br>
         <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Update Foto</label>
        <br/>
        <img class="img mb-3" src="{{ asset('guru/' . $data->foto) }}" alt="" style="width: 100px;">
        <input type="file" name="foto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->foto }}">
        <i style="float: left;font-size: 11px;color: red">Abaikan jika tidak merubah foto</i>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
                    </from>
        </div>

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
        .create( document.querySelector('#editor') )
        .catch( error => {
          console.error(error);
        });
  </script>


</body>

<!-- Mirrored from pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/vertical-menu-template-semi-dark/tables-datatables-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Nov 2022 01:22:20 GMT -->
</html>


