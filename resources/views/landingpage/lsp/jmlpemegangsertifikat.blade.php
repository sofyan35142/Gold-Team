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
                        <h2>Jumlah Pemegang Sertifikat</h2>
                        <ul>
                            <li>
                                <a href="/">Beranda</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/lsp">LSP</a>
                            </li>

                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Jumlah Pemegang Sertifikat
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
                        <h1>{{$jml->judul}}</h1>
                        
                        <div class="entry-content">
                            <div data-elementor-type="wp-page" data-elementor-id="1704" class="elementor elementor-1704"
                                data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        <section
                                            class="elementor-element elementor-element-ee694aa elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                                            data-id="ee694aa" data-element_type="section">
                                            <div class="elementor-container elementor-column-gap-default">
                                                <div class="elementor-row">
                                                    <div class="elementor-element elementor-element-5126293 elementor-column elementor-col-100 elementor-top-column"
                                                        data-id="5126293" data-element_type="column">
                                                        <div class="elementor-column-wrap  elementor-element-populated">
                                                            <div class="elementor-widget-wrap">
                                                                <div class="elementor-element elementor-element-693b17a elementor-widget elementor-widget-image"
                                                                    data-id="693b17a" data-element_type="widget"
                                                                    data-widget_type="image.default">
                                                                    <div class="elementor-widget-container">
                                                                        <div class="elementor-image">
                                                                            <img width="720" height="401"
                                                                                src="{{ asset('lsp/' . $jml->jml) }}"
                                                                                class="attachment-large size-large"
                                                                                alt=""
                                                                                srcset="{{ asset('lsp/' . $jml->jml) }} 733w, {{ asset('lsp/' . $jml->jml) }} 300w"
                                                                                sizes="(max-width: 640px) 100vw, 640px" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                  

                </div>
               <div class="col-lg-4 main-service-area blog-side-bar">
                    <div class="service-details-post">
                                        <img src="{{ asset('lsp/' . $jml->foto) }}"
                                            alt="logo lsp">
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
