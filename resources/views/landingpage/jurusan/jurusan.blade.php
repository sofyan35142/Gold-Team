<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/viscous/default/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:10 GMT -->
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


    <div class="service-title service-title-bg">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="service-title-text">
                        <h2>Jurusan</h2>
                        <ul>
                            <li>
                                <a href="/">Beranda</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Jurusan
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="main-service-area single-service-page pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($data as $jurusan)
                            <div class="col-lg-4 col-md-6">

                                <div class="service-item">
                                    <img class="img-key" src="{{ asset('foto/' . $jurusan->foto) }}" alt="">
                                    <h3 style="height: 50px">{{ $jurusan->jurusan }}</h3>
                                    <div style="height: 110px" class="card-jurusan elipsiszak">{!! $jurusan->deskripsi !!}
                                    </div>
                                    <div class="theme-button">
                                        <a href="/detailjurusan/{{ $jurusan->id }}"
                                            class="default-btn">Selengkapnya</a>
                                    </div>
                                    <div class="service-shape">
                                        <img src="../../assets/img/service/shapes/service-pattern-6.png" alt="shape">
                                        <img src="../../assets/img/service/shapes/service-pattern-7.png" alt="shape">
                                        <img src="../../assets/img/service/shapes/service-pattern-8.png" alt="shape">
                                        <img src="../../assets/img/service/shapes/service-pattern-9.png" alt="shape">
                                        <img src="../../assets/img/service/shapes/service-pattern-10.png"
                                            alt="shape">
                                    </div>
                                </div>



                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>





    @include('landingpage.layout.footer')


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../../assets/js/jquery.min.js"></script>

    <script src="../../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../assets/js/owl.carousel.min.js"></script>

    <script src="../../assets/js/slick.min.js"></script>

    <script src="../../assets/js/jquery.magnific-popup.min.js"></script>

    <script src="../../assets/js/meanmenu.js"></script>

    <script src="../../assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="../../assets/js/form-validator.min.js"></script>

    <script src="../../assets/js/contact-form-script.js"></script>

    <script src="../../assets/js/custom.js"></script>
</body>

<!-- Mirrored from templates.hibootstrap.com/viscous/default/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:10 GMT -->

</html>
