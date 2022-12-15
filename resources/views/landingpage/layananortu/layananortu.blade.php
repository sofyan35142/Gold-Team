<!doctype html>
<html lang="zxx">
@include('landingpage.layout.head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

    <div class="loader-content">
        <div class="d-table">
            <div class="d-table-cell">
                <div id="loading-center">
                    <div id="loading-center-absolute">
                        <div class="object" id="object_one"></div>
                        <div class="object" id="object_two"></div>
                        <div class="object" id="object_three"></div>
                        <div class="object" id="object_four"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('landingpage.layout.header')


    <div class="service-title service-title-bg bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="service-title-text">
                        <h2>Layanan Orang Tua</h2>
                        <ul>
                            <li>
                                <a href="/">Beranda</a>
                            </li>
                            
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Layanan Orang Tua
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-details-area main-service-area pt-100 services-details-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="alert alert-primary">
                            <ol>

                                <li>Silahkan isi form ini untuk memberikan saran dan masukan untuk SMK Negeri 1 Sukorejo
                                </li>
                                <li>Mohon untuk menyertakan solusi untuk setiap saran yang disampaikan sebagai bahan
                                    pertimbangan untuk manajemen.</li>
                                <li>Mohon menggunakan bahasa yang baik dan sopan dalam menyampaikan saran.</li>

                            </ol>
                        </div>
                    </div>
                    <hr class="solid tall mb-xlg">
                    <form class="form-horizontal form-bordered" method="post"
                        action="/insertlayor">
                            @csrf
                        <div class="row">
                            <div class="form-group">
                                <label>
                                    Nama Siswa </label>
                                <div>
                                    <input class="form-control" type="text" name="nama_siswa" value=""
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label>
                                    Kelas </label>
                                <div>
                                    <select class="form-control select2" name="kelas" required>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XII</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>
                                    Jurusan </label>
                                <div>
                                    <select class="form-control" name="id_jurusan" aria-label="Default select example" required>

                                        <option value="0" selected>Pilih Jurusan</option>
                                        @foreach ($datajurusan as $dj)
                                            <option value="{{ $dj->id }}">{{ $dj->jurusan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_jurusan')
                                    <div class="alert alert-danger">Harus di isi</div>
                                    @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>
                                    Nama Orang Tua </label>
                                <div>
                                    <input class="form-control" type="text" name="nama_ortu" value="" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>
                                    Telepon Aktif </label>
                                <div>
                                    <input class="form-control" type="number" name="no_telp" value="" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>
                                    Email Aktif </label>
                                <div>
                                    <input class="form-control" type="email" name="email" value="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>
                                    Unit Tujuan </label>
                                <div>
                                    <select class="form-control select2" name="unit_tujuan" required>

                                        <option value="kurikulum">Kurikulum</option>
                                        <option value="sarpra">Sarana dan Prasarana</option>
                                        <option value="hubin">Hubungan Masyarakat dan Industri</option>
                                        <option value="kesiswaan">Kesiswaan</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>
                                    Saran </label>
                                <div>
                                    <textarea class="form-control" rows="5" name="saran" required></textarea>
                                    <span class="help-block">
                                        Mohon untuk menuliskan pesan dengan lengkap dan detail. Saran yang tidak jelas
                                        tidak akan dimasukkan dalam kategori komplain
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <label>
                                    Solusi </label>
                                <div>
                                    <textarea class="form-control" rows="5" name="solusi" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-xl">
                            <div class="form-group">
                                <label></label>
                                <div>
                                    <button class="btn btn-primary ">
                                        Kirim Saran </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- -------------------- side bar sekolah -------------------- --}}
    {{-- <div class="col-lg-4 main-service-area blog-side-bar">
                    <div class="team-section team-style-two team-style-three team-members pt-1000">
                        <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img src="https://3.bp.blogspot.com/-dlkRB2pfZXs/V8U-w7xCFCI/AAAAAAAABjQ/O6ywuHewtpg7oJOEexbvcyrgA_gImHyAQCLcB/s1600/modul.jpg"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4 class="h4-css">Modul Produktif TKI</h4>
                                <p><a href="/modulproduktiftki">Lihat selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                </div> --}}
    </div>
    </div>
    </div>






    @include('landingpage.layout.footer')


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/owl.carousel.min.js"></script>

    <script src="../assets/js/slick.min.js"></script>

    <script src="../assets/js/jquery.magnific-popup.min.js"></script>

    <script src="../assets/js/meanmenu.js"></script>

    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="../assets/js/form-validator.min.js"></script>

    <script src="../assets/js/contact-form-script.js"></script>

    <script src="../assets/js/custom.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

<script>
    @if(Session::get('info'))
    toastr.info("{{ Session::get('info') }}")
    @endif
</script>

</html>
