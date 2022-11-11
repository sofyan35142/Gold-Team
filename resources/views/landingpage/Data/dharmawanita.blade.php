<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:11 GMT -->

<head>
    @include('landingpage.layout.head')
</head>

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




    <div class="service-title-bg">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    {{-- <div class="blog-title-text">
                        <h2>Blog Details</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="blog.html">Blogs</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Blog Details
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>


    <div class="blog-details-area blog-details-page-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{-- <img src="assets/img/blog/7.png" alt="service"> --}}
                    <div class="blog-details-post">
                        <div class="blog-post-title">
                            <h3>
                                Data Dharwa Wanita Persatuan
                            </h3>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">John Doe</a>
                                </li>
                            </ul>
                        </div>
                        <table class="table table-bordered" id="id">
                            <td> No </td>
                            <td> Foto </td>
                            <td> Nama </td>
                            <td> TEMPAT LAHIR </td>
                            <td> TGL LAHIR </td>
                            <td> Alamat </td>
                            <td> JABATAN</td>

                            <tr>
                                <td>1</td>
                                <td><img src="{{ asset ('dharmawanita/aida.jpeg') }}" alt="" height="150px"></td>
                                <td>Nur Aida, S.Pd / Ny. Rudi Trisantoso, S.Pd., M.Pd</td>
                                <td>Pasuruan</td>
                                <td>16 Mei 1970</td>
                                <td>Perumahan Landungsari indah blok I-20 RT 3 RW 6 Landungsari-Dau, Kab. Malang</td>
                                <td>KETUA</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{ asset ('dharmawanita/luluk.jpg') }}" alt="" height="150px"></td>
                                <td>Luluk Kusuma Herminingsih, S.Pd</td>
                                <td>Pasuruan</td>
                                <td>06-Feb-1968</td>
                                <td>Jaqi RT 008 RW 002 Candiwates Prigen, Kab. Pasuruan</td>
                                <td>WAKIL KETUA</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><img src="{{ asset ('dharmawanita/asnah.jpg') }}" alt="" height="150px"></td>
                                <td>Asnah Yuniarti, S.Pd</td>
                                <td>Pasuruan</td>
                                <td>06 Ags 1973</td>
                                <td>Dusun Sendi RT 01/RW 23 Sumbergedang Pandaan Pasuruan</td>
                                <td>SEKRETARIS</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td> <img src="{{ asset ('dharmawanita/endang.jpg') }}" alt=""> </td>
                                <td>Endang Sri Handayani, S.Pd</td>
                                <td>Magelang</td>
                                <td>04 Des 1972</td>
                                <td>Dsn Karanglo, Sukorejo</td>
                                <td>BENDAHARA</td>
                            </tr>
                            <tr>
                               <td>1</td>
                                <td><img src="{{ asset ('dharmawanita/asnah.jpg') }}" alt="" height="150px"></td>
                                <td>Siti Juwariah,S.Pd</td>
                                <td>Trenggalek</td>
                                <td>31 Des 1968</td>
                                <td>RT 06 RW 05 Kalitengah, Karangjati, Pandaan, Pasuruan</td>
                                <td>KOORDINATOR SIE BIDANG PENDIDIKAN</td>
                            </tr>
                            <tr>
                               <td>1</td>
                                <td><img src="{{ asset ('dharmawanita/khuswantun.jpg') }}" alt="" height="150px"></td>
                                <td>Khuswatul Khasanah, S.Pd</td>
                                <td>Pasuruan</td>
                                <td>06 Des 1971</td>
                                <td>Kejapanan Gang Kuntodewo RT 08 RW 12 Kejapanan - Gempol - Pasuruan</td>
                                <td>ANGGOTA SIE BIDANG PENDIDIKAN</td>
                            </tr>
                            <tr>
                               <td>1</td>
                                <td><img src="{{ asset ('dharmawanita/ririk.jpg') }}" alt="" height="150px"></td>
                                <td>Ririk Suryawati, S.Pd</td>
                                <td>Pasuruan</td>
                                <td>06 Feb 1977</td>
                                <td>Dusun Besongol RT 01 RW 03 Desa Sumberejo Kec. Pandaan</td>
                                <td>ANGGOTA SIE BIDANG PENDIDIKAN</td>
                            </tr>
                            <tr>
                               <td>1</td>
                                <td><img src="{{ asset ('dharmawanita/titik.jpg') }}" alt="" height="150px"></td>
                                <td>Titik Chomzah, S.Pd.</td>
                                <td>Pasuruan</td>
                                <td>10 Nov 1973</td>
                                <td>Jl. Anggrek I RT 09 RW 06 Prigen Pasuruan</td>
                                <td>ANGGOTA SIE BIDANG PENDIDIKAN</td>
                            </tr>
                            <tr>
                               <td>1</td>
                                <td><img src="{{ asset ('dharmawanita/lina.jpg') }}" alt="" height="150px"></td>
                                <td>Lina Indrawati,S.Pd</td>
                                <td>Pasuruan</td>
                                <td>22 Jul 1969</td>
                                <td>Jln. Tawes No 4 Kalirejo Bangil</td>
                                <td>ANGGOTA SIE BIDANG PENDIDIKAN</td>
                            </tr>
                            <tr>
                               <td>1</td>
                                <td><img src="{{ asset ('dharmawanita/juanita.jpg') }}" alt="" height="150px"></td>
                                <td>Juanitasari, S.Pd</td>
                                <td>Pasuruan</td>
                                <td>05 Nov 1993</td>
                                <td>Dsn. Al-kemar RT. 16 RW.10 MArtopuro Purwosari</td>
                                <td>ANGGOTA SIE BIDANG PENDIDIKAN</td>
                            </tr>
                        </table>
                    </div>
                    <div class="page-button">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="theme-button">
                                    <a href="#" class="default-btn">
                                        <i class="icofont-rounded-left"></i>
                                        Previous Post
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 offset-md-6">
                                <div class="theme-button">
                                    <a href="#" class="default-btn">
                                        Next Post
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar">
                    <div class="service-sidebar">
                        <form class="search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit" class="btn btn-primary">
                                    <i class="icofont-search-1"></i>
                                </button>
                            </div>
                        </form>
                        <div class="service-list">
                            <p class="sidetitle">Instansi Terkait</p>
                            <ul>
                                <li class="hcard overflow-auto">
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Cabang Dinas Pendidikan Wilayah Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kementerian Pendidikan & Kebudayaan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Direktorat PSMK
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Dinas Pendidikan Jatim
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Pemerintah Kabupaten Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Dinas Ketenagakerjaan Kabupaten Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Sistem Informasi Inovasi Sekolah
                                    </a>
                                </li>
                            </ul>
                            <p class="sidetitle">Potensi Sekitar</p>
                            <ul>
                                <li class="hcard overflow-auto">
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kecamatan Sukorejo Kab.Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kaboki-Pionir Ekspor Tas Rajut
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Taman Safari Indonesia 2
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Saygon Waterpark
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kebon Raya Purwodadi
                                    </a>
                                </li>
                            </ul>
                            <p class="sidetitle">Kategori</p>
                            <ul>
                                <li class="hcard overflow-auto border-0">
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Agenda Sekolah
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Artikel Guru
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Informasi Sekolah
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Kegiatan BKK
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Kegiatan Sekolah
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Lowongan Kerja
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="tags">
                            <p>Most Popular Tags</p>
                            <a href="#">Enjoy</a>
                            <a href="#">Clean</a>
                            <a href="#">Hygienic</a>
                            <a href="#">Time</a>
                            <a href="#">Brush</a>
                            <a href="#">Wash</a>
                            <a href="#">Call</a>
                        </div> --}}
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/_3QdWBLnRlo?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"
                                title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="contact-section details-page">
        <div class="container">
            <div class="contact-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-img">
                            <img src="assets/img/contact-img.png" alt="contact image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="section-head">
                            <h2>We Love to <span> Hear from You</span></h2>
                            <p>Feel free and share it with us. We will get you</p>
                        </div>
                        <div class="contact-form">
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control"
                                                required data-error="Please enter your name" placeholder="Your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control"
                                                required data-error="Please enter your email"
                                                placeholder="Your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="5" required
                                                data-error="Write your message" placeholder="Your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn page-btn">
                                            Send Message
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/img/logo-2.png" alt="logo">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, tur adipiscing elit, sed do eiusmod tempor contratc.</p>
                        <div class="email">
                            <form class="newsletter-form" data-bs-toggle="validator">
                                <input type="email" class="form-control" placeholder="Enter Your Email"
                                    name="EMAIL" required autocomplete="off">
                                <button class="default-btn electronics-btn" type="submit">
                                    <i class="icofont-location-arrow"></i>
                                </button>
                                <div id="validator-newsletter" class="form-result"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget pl-40">
                        <h3>Services</h3>
                        <ul>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="service-details.html">Low cost</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="service-details.html">Fastest Service</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="service-details.html">Professional Cleaning</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="service-details.html">Home Cleaning</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="service-details.html">Office Cleaning</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget pl-40">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="about.html">About Us</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="blog.html">Blog</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="team.html">Team</a>
                            </li>
                            <li>
                                <i class="icofont-simple-right"></i>
                                <a href="testimonial.html">Testimonial</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Find Us</h3>
                        <p class="find-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed</p>
                        <ul class="find-us">
                            <li>
                                <i class="icofont-location-pin"></i>
                                28/A Street, New York City
                            </li>
                            <li>
                                <i class="icofont-phone"></i>
                                <a href="tel:+88 0123 456 789">
                                    +88 0123 456 789
                                </a>
                            </li>
                            <li>
                                <i class="icofont-ui-message"></i>
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#abc2c5cdc4ebddc2d8c8c4ded885c8c4c6">
                                    <span class="__cf_email__"
                                        data-cfemail="c0a9aea6af80b6a9b3a3afb5b3eea3afad">[email&#160;protected]</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer">
            <div class="container">
                <div class="row  align-items-center">
                    <div class="col-lg-6">
                        <div class="footer-social">
                            <ul>
                                <li>
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="copyright-text text-end">
                            <p>&copy;2022 Viscous. All Rights Reserved By <a href="https://hibootstrap.com/"
                                    target="_blank">HiBootstrap</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>


@include('landingpage.layout.js')
</body>
<script>
    $(document).ready(function () {
     $('#id').DataTable();
 });
 </script>
<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:12 GMT -->

</html>
