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
                            <p>Instansi Terkait</p>

                               <a href=""> <li>Cabang Dinas Pendidikan Wilayah Pasuruan</li></a>
                               <a href="">  <li>Kementerian Pendidikan & Kebudayaan</li></a>
                               <a href="">  <li>Direktorat PSMK</li></a> <br>
                               <a href="">  <li>Dinas Pendidikan Jatim</li></a>
                              <a href=""> <li>Pemerintah Kabupaten Pasuruan</li></a>
                               <a href="">  <li>Dinas Ketenagakerjaan Kabupaten Pasuruan</li></a>
                               <a href="">  <li>Sistem Informasi Inovasi Sekolah</li></a>

                            {{-- <ul>
                                <li>
                                    <a href="#">
                                        Toilet Cleaning
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Stay Hygienic
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        News
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Cleaning Floor
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Cleaning Kitchen
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Wash Home
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </li>
                            </ul> --}}
                        </div>
                        <div class="tags">
                            <p>Most Popular Tags</p>
                            <a href="#">Enjoy</a>
                            <a href="#">Clean</a>
                            <a href="#">Hygienic</a>
                            <a href="#">Time</a>
                            <a href="#">Brush</a>
                            <a href="#">Wash</a>
                            <a href="#">Call</a>
                        </div>
                        <div class="discount-text">
                            <h1>Get <span>15% Discount</span> on your first Service</h1>
                            <div class="theme-button">
                                <a href="#" class="default-btn">Book Now</a>
                            </div>
                            <div class="discount-shapes">
                                <img src="assets/img/counter/1.png" alt="shape">
                                <img src="assets/img/counter/2.png" alt="shape">
                                <img src="assets/img/counter/3.png" alt="shape">
                                <img src="assets/img/counter/4.png" alt="shape">
                                <img src="assets/img/counter/5.png" alt="shape">
                                <img src="assets/img/counter/6.png" alt="shape">
                                <img src="assets/img/counter/7.png" alt="shape">
                                <img src="assets/img/counter/8.png" alt="shape">
                                <img src="assets/img/counter/5.png" alt="shape">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-section blog-style-two">
        <div class="container">
            <h2 class="post-head">Related Post</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/1.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">How to cleanroom yourself</a></h4>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc
                                ut labore et.</p>
                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/2.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Enjoy the working time</a></h4>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc
                                ut labore et.</p>
                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="assets/img/blog/3.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">Self Cleaning is the best drill</a></h4>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc
                                ut labore et.</p>
                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="theme-button text-center blog-btn">
                <a href="blog.html" class="default-btn">More Blogs</a>
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
