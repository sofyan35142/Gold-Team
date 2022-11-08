<!doctype html>
<html lang="zxx">
@include('landingpage.layout.head')

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
                        <h2>Rekayasa Perangkat Lunak</h2>
                        <ul>
                            <li>
                                <a href="/">Beranda</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Jurusan</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Rekayasa Perangkat Lunak
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
                <div class="col-lg-8">
                    <img src="foto/rpl.jpg" alt="service">
                    <div class="service-details-post">
                        <h3>Rekayasa Perangkat Lunak <span class="tkrfont"> (RPL)</span></h3>
                        <p>Program Keahlian Rekayasa Perangkat Lunak (RPL) adalah salah satu kompetensi keahlian dalam
                            bidang Teknologi Komputer dan Informatika yang secara khusus mempelajari tentang pemrograman
                            komputer. Lulusan RPL dewasa ini sangat dibutuhkan untuk menjawab banyaknya kebutuhan
                            industri bagi ketersediaan tenaga Teknisi dalam bidang pengembangan software. Beberapa ruang
                            lingkup pekerjaan di bidang RPL adalah Software Developer, Game Development, Software
                            Tester, Software Engineering , Software Analis dan Integrator, Konsultan IT dan Programmer.
                        </p>
                        <p><b>Keunggulan Jurusan RPL:</b>
                        </p>

                        <p>1. Mampu bekerja di berbagai bidang karena sudah dibekali dengan berbagai ilmu dan
                            pengetahuan pada bidang teknologi.
                            <br />2. Mampu membuat aplikasi desktop, web dan mobile.
                            <br />3. Pekerjaan yang relatif mudah dan santai, dapat dikerjakan dimanapun dan kapanpun
                            menggunakan koneksi tentunya.
                            <br />4. Lebih terdepan karena jurusan RPL lebih mengerti dan mendalami berbagai teknologi.
                            <br />5. Mampu memasang sebuah PC.
                            <br />6. Mengerti akan fungsi dari komputer
                        </p>


                    </div>
                    {{-- <div class="page-button">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="theme-button">
<a href="#" class="default-btn">
<i class="icofont-rounded-left"></i>
Previous
</a>
</div>
</div>
<div class="col-md-3 col-sm-6 offset-md-6">
<div class="theme-button">
<a href="#" class="default-btn">
Next
<i class="icofont-rounded-right"></i>
</a>
</div>
</div>
</div>
</div> --}}
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
                            <p>Categories</p>
                            <ul>
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
                            </ul>
                        </div>
                        <div class="sidebar">
                            <iframe class="elementor-video-iframe" allowfullscreen title="youtube Video Player"
                                src="https://www.youtube.com/embed/cxtGfQh188A?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"></iframe>

                            <div class="discount-shapes">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-section">
        <div class="container">
            <div class="contact-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-img">
                            <img src="assets/img/contact-img.png" alt="contact image">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 offset-lg-1">
                        <div class="section-head">
                            <h2>We Love to <span> Hear from You</span></h2>
                            <p>Feel free and share with us. We will get you</p>
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
                                                required data-error="Please enter your email" placeholder="Your Email">
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
</body>

</html>
