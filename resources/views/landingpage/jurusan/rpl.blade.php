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
                    <img src="foto/jurusan/RPL.JPG" alt="service">
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
                    <div class="service-details-post">

                        <h3>Ketua Kompetensi Keahlian <span class="tkrfont"> (KaKomLi)</span></h3>
                        <div class="d-flex flex-row">
                            <div class="p-2"><img class="img-guru"
                                    src="https://smkn1sukorejo.sch.id/wp-content/uploads/2022/06/IMG_20200726_194531-Widya-Syabil.jpg" />
                            </div>
                            <div class="p-2"><b>WIDYAWATI, S.Kom</b>

                                <p>NIP: 19951227 201903 1 003
                                    <br />
                                    Tempat/Tgl Lahir: Pasuruan, 07 Agustus 1976
                                    <br />
                                    Status: PNS
                                    <br />
                                    Gol. Ruang: III/c
                                </p>


                            </div>
                        </div>
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
                                <h4 class="h4-css">Modul Produktif RPL</h4>
                                <p><a href="/modulproduktifrpl">Lihat selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="team-section team-style-two team-style-three team-members pt-1000">
                        <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img src="https://news.unair.ac.id/wp-content/uploads/2021/09/21.-Penulisan-Artikel-Ilmiah-Populer-Mudah-dan-Menyenangkan.jpeg"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                            <div class="team-text">
                                <h4 class="h4-css">Artikel Ilmiah</h4>
                                <p><a href="/artikelilmiah">Lihat selengkapnya</a></p>
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
