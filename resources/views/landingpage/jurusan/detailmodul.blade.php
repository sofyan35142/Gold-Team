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
                        <h2>{{ $data->judul }}</h2>
                        <ul>
                            <li>
                                <a href="/">Beranda</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                {{ $data->judul }}
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

                    <div class="service-details-post keymodul">

                        <h3 id="jurusan">{{ $data->judul }}</h3>
                        <p id="deskirpsi">{!! $data->deskripsi !!}</p>
                    </div>

                </div>

                <div class="col-lg-4 main-service-area blog-side-bar">
                    <div class="service-details-post">
                        <h3>{{$data->judulsidebar1}}</h3>
                        <div class="ratio ratio-16x9">
                            <iframe src="{{$data->linksidebar1}}" title="YouTube video" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="service-details-post">
                        <h3>{{$data->judulsidebar2}}</h3>
                        <img src="{{ asset('foto/jurusan/' . $data->fotosidebar2) }}" alt="service">
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
