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
                        <h2>{{ $data->jurusan }}</h2>
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
                                {{ $data->jurusan }}
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
                    <img src="../foto/jurusan/TKR.JPG" alt="service">
                    <div class="service-details-post">
                        <h3 id="jurusan">{{ $data->jurusan }}</h3>
                        <p id="deskirpsi">{!! $data->deskripsi !!}</p>
                    </div>
                    <div class="service-details-post">
                        <h3>Ketua Kompetensi Keahlian <span class="tkrfont"> (KaKomLi)</span></h3>
                        <div class="d-flex flex-row">
                            <div class="p-2"><img class="img-guru"
                                    src="https://smkn1sukorejo.sch.id/wp-content/uploads/2020/07/ndr-Rohmad-Munandar.jpg"
                                    width="10px" />
                            </div>
                            <div class="p-2"><b>ROHMAD MUNANDAR, S.Pd</b>
                                <br />
                                <p>NIP: 19740609 200902 1 002
                                    <br />
                                    Tempat/Tgl Lahir: Sukoharjo, 09 Juni 1974
                                    <br />
                                    Status: PNS
                                    <br />
                                    Gol. Ruang: III/b
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar">
                    {{-- <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e42d576"
                        data-id="e42d576" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-4e51a48 elementor-widget elementor-widget-heading"
                                    data-id="4e51a48" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h3 class="elementor-heading-title elementor-size-default">Guru Prodi TKJ</h3>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4afdaa1 elementor-arrows-position-inside elementor-pagination-position-outside elementor-widget elementor-widget-image-carousel"
                                    data-id="4afdaa1" data-element_type="widget"
                                    data-settings="{&quot;slides_to_show&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;both&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;infinite&quot;:&quot;yes&quot;,&quot;effect&quot;:&quot;slide&quot;,&quot;speed&quot;:500}"
                                    data-widget_type="image-carousel.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                                            <div class="elementor-image-carousel swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image"
                                                            src="https://smktelkom-bdg.sch.id/wp-content/uploads/2020/11/Bu-Mila-225x300.jpg"
                                                            alt="Milkhatussyafa&#039;ah Taufiq" />
                                                        <figcaption class="elementor-image-carousel-caption">
                                                            Milkhatussyafa'ah Taufiq</figcaption>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image"
                                                            src="https://smktelkom-bdg.sch.id/wp-content/uploads/2020/11/Bu-Fitri-1-225x300.jpg"
                                                            alt="Fitri Yanti" />
                                                        <figcaption class="elementor-image-carousel-caption">Fitri Yanti
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image"
                                                            src="https://smktelkom-bdg.sch.id/wp-content/uploads/2020/11/Bu-Ane-1-225x300.jpg"
                                                            alt="Ane Riyana" />
                                                        <figcaption class="elementor-image-carousel-caption">Ane Riyana
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image"
                                                            src="https://smktelkom-bdg.sch.id/wp-content/uploads/2020/11/Pak-Pipin-225x300.jpg"
                                                            alt="Muhammad Thoifur" />
                                                        <figcaption class="elementor-image-carousel-caption">Muhammad
                                                            Thoifur</figcaption>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image"
                                                            src="https://smktelkom-bdg.sch.id/wp-content/uploads/2020/09/260-300x300.jpg"
                                                            alt="Amorsa Erlosima Prianda" />
                                                        <figcaption class="elementor-image-carousel-caption">Amorsa
                                                            Erlosima Prianda</figcaption>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image"
                                                            src="https://smktelkom-bdg.sch.id/wp-content/uploads/2020/11/Pak-Darman-225x300.jpg"
                                                            alt="Maidarman" />
                                                        <figcaption class="elementor-image-carousel-caption">Maidarman
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                                <div class="swiper-slide">
                                                    <figure class="swiper-slide-inner"><img class="swiper-slide-image"
                                                            src="https://smktelkom-bdg.sch.id/wp-content/uploads/2020/11/Pak-Arariko-1.png"
                                                            alt="Arariko" />
                                                        <figcaption class="elementor-image-carousel-caption">Arariko
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </div>
                                            <div class="swiper-pagination"></div>
                                            <div class="elementor-swiper-button elementor-swiper-button-prev">
                                                <i aria-hidden="true" class="eicon-chevron-left"></i> <span
                                                    class="elementor-screen-only">Previous</span>
                                            </div>
                                            <div class="elementor-swiper-button elementor-swiper-button-next">
                                                <i aria-hidden="true" class="eicon-chevron-right"></i> <span
                                                    class="elementor-screen-only">Next</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="team-section team-style-two team-style-three team-members pt-1000">
                        <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img src="https://3.bp.blogspot.com/-dlkRB2pfZXs/V8U-w7xCFCI/AAAAAAAABjQ/O6ywuHewtpg7oJOEexbvcyrgA_gImHyAQCLcB/s1600/modul.jpg"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4 class="h4-css">Modul Produktif TKR</h4>
                                <p><a href="/modulproduktiftkr">Lihat selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="team-section team-style-two team-style-three team-members pt-1000">
                        <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img src="https://img.inews.co.id/media/620/files/inews_new/2022/10/07/unsur_buku_nonfiksi.jpg"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4 class="h4-css">Buku Reparasi Bengkel</h4>
                                <p><a href="/reparasi bengkel">Lihat selengkapnya</a></p>
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
