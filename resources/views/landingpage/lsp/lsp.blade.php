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
                        <h2>LSP</h2>
                        <ul>
                            <li>
                                <a href="/">Beranda</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                LSP
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
                    {{-- <img src="foto/jurusan/TKR.JPG" alt="service"> --}}
                    <div class="service-details-post">

                        <h1>{{$data->judul}}</h1>
                        {!!$data->deskripsi!!}




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
                    <div class="service-details-post">
                        <h3>PAPAN NAMA</h3>
                            <img src="{{ asset('lsp/' . $data->papannama) }}"
                                            alt="papan nama">
                    </div>
                    <div class="service-details-post">
                        <h3>KANTOR LSP</h3>
                            <img src="{{ asset('lsp/' . $data->kantor) }}"
                                            alt="kantor lsp">
                    </div>
                    <div class="service-details-post">
                        <h3>DENAH LOKASI (LAY OUT)</h3>
                            <img src="{{ asset('lsp/' . $data->denah) }}"
                                            alt="layout lsp">
                    </div>

                </div>
                {{-- <div class="col-lg-8">
                    <div class="service-details-post">
                        <section
                            class="elementor-element elementor-element-41e4419 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                            data-id="41e4419" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-row">
                                    <div class="elementor-element elementor-element-09d1bd8 elementor-column elementor-col-100 elementor-top-column"
                                        data-id="09d1bd8" data-element_type="column">
                                        <div class="elementor-column-wrap  elementor-element-populated">
                                            <div class="elementor-widget-wrap">
                                                <div class="elementor-element elementor-element-0ce3808 elementor-widget elementor-widget-text-editor"
                                                    data-id="0ce3808" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="elementor-text-editor elementor-clearfix"><iframe
                                                                src="{{$data->link}}"
                                                                width="100%" height="750px">
                                                            </iframe></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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
