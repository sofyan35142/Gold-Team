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




    <div class="blog-title blog-title-bg bg-2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="blog-title-text">
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
                    </div>
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
                                Data Guru & Karyawan
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
                        <table class="table table-bordered">
                            <td> No </td>
                            <td> Foto </td>
                            <td> Nama </td>
                            <td> NIP </td>
                            <td> TEMPAT LAHIR </td>
                            <td> TGL LAHIR </td>
                            <td> TMT AWAL</td>
                            <td> STATUS </td>
                            <td> GOL.RUANGAN </td>
                            <td> JABATAN</td>

                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>RUDI TRISANTOSO, S.Pd, M.Pd</td>
                                <td>19710124 199512 1 001</td>
                                <td>Pasuruan</td>
                                <td>24 Jan 1971</td>
                                <td>16 Jan 2019</td>
                                <td>PNS</td>
                                <td>IV/b – Pembina Tingkat I</td>
                                <td>KEPALA SEKOLAH</td>
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
                             <p class="sidetitle">Email :</p>
                            <ul>
                                <li class="hcard overflow-auto border-0">
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                       <b>info@smkn1sukorejo.sch.id</b>
                                    </a>
                                </li>
                            </ul>
                             <p class="sidetitle">Alamat</p>
                            <ul>
                               <div class="textwidget">
                               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.585483431905!2d112.7150166749192!3d-7.727543392290657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d1337b9fbe51%3A0x5f53153c148fedfd!2sSMK%20Negeri%201%20Sukorejo!5e0!3m2!1sid!2sid!4v1667957123853!5m2!1sid!2sid" width="415" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </ul>
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

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/meanmenu.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:12 GMT -->

</html>
