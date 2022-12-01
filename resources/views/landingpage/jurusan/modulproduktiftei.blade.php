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
                        <h2>Modul Produktif TEI</h2>
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
                                <a href="/detailjurusan/2">Teknik Elektronika Industri</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Modul Produktif TEI
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
                    {{-- <img src="foto/jurusan/TEI.JPG" alt="service"> --}}
                    <div class="service-details-post keymodul">
                        <h3>{{$modultei->judul}}</h3>
                        {!!$modultei->deskripsi!!}

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
                {{-- <div class="col-lg-4 main-service-area blog-side-bar">
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
                        {{-- <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/cxtGfQh188A?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"
                                title="YouTube video" allowfullscreen></iframe>
                        </div> --}}
                        <div class="discount-shapes">

                        </div>
                    </div>
                </div> --}}
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
