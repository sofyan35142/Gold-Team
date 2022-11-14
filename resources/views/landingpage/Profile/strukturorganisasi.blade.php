<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from templates.hibootstrap.com/viscous/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:33:31 GMT -->

<!-- Mirrored from previewthemes.com/enzio/home-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 03:25:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
                        <h2>Struktur Organisasi</h2>
                        <ul>
                            <li>
                                <a href="/">Profil</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Struktur Organisasi</a>
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
                    <div class="blog-details-post">
                        <div class="blog-post-title text-center mb-5">
                            <h3>
                                STRUKTUR ORGANISASI
                            </h3>
                            <h4>SMK NEGERI 1 SUKOREJO</h4>
                            <h7>TAHUN AJARAN 2021/2022</h7>
                        </div>
                        <img src="../assets/img/strukturorganisasi.jpg" alt="service">
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar border shadows mb-40px">
                    <div class="row">
                        <div class="col-lg-6 mt-3">
                            <div class="img-overlay">
                                <img class="h-12pc w-100" src="../assets/img/so/rudi.jpg" alt="Avatar" class="img-overlay-image">
                                <div class="overlay">
                                    <div class="text">RUDI TRISANTOSO, S.Pd, M.Pd</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="img-overlay">
                                <img class="h-12pc w-100" src="../assets/img/so/titik.jpg" alt="Avatar" class="img-overlay-image">
                                <div class="overlay">
                                    <div class="text">TITIK CHOMZAH, S.Pd</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="img-overlay">
                                <img class="h-12pc w-100" src="../assets/img/so/ellya.jpg" alt="Avatar" class="img-overlay-image">
                                <div class="overlay">
                                    <div class="text">ELLYA MAGHFIRLI, S.Pd</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="img-overlay">
                                <img class="h-12pc w-100" src="../assets/img/so/asnah.jpg" alt="Avatar" class="img-overlay-image">
                                <div class="overlay">
                                    <div class="text">ASNAH YUNIARTI, S.Pd</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-3">
                            <div class="img-overlay">
                                <img class="h-12pc w-100" src="../assets/img/so/joko.jpeg" alt="Avatar" class="img-overlay-image">
                                <div class="overlay">
                                    <div class="text">JOKO SISWANTO, S.T., M.Pd</div>
                                </div>
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
                            <img src="../assets/img/contact-img.png" alt="contact image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-text">
                            <div class="section-head">
                                <h2>We Love to <span> Hear from You</span></h2>
                                <p>Feel free and share with us. We will get you</p>
                            </div>
                            <div class="contact-form">
                                <form id="contactForm" novalidate="true">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name" class="form-control"
                                                    required="" data-error="Please enter your name"
                                                    placeholder="Your Name">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email" class="form-control"
                                                    required="" data-error="Please enter your email"
                                                    placeholder="Your Email">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group">
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="5" required=""
                                                    data-error="Write your message" placeholder="Your Message"></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <button type="submit" class="default-btn page-btn disabled"
                                                style="pointer-events: all; cursor: pointer;">
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
    </div>
    @include('landingpage.layout.footer')

    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    @include('landingpage.layout.js')
</body>

<!-- Mirrored from previewthemes.com/enzio/home-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 03:25:34 GMT -->

</html>
