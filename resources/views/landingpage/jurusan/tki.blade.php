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
                        <h2>Teknik Kimia Industri</h2>
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
                                Teknik Kimia Industri
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
                    <img src="foto/jurusan/KI1.JPG" alt="service">
                    <div class="service-details-post">
                        <h3>Teknik Kimia Industri <span class="tkrfont"> (TKI)</span></h3>
                        <p>Program keahlian yang mempelajasi pemprosesan bahan mentah menjadi berupa barang setengah jadi ataupun barang jadi (produk) seperti : minyak bumi dan gas bumi, gas bio, detergen, cairan anti kuman, planstik, kertas, kecantikan, obat-obatan, makanan instan, dll. Lulusan Teknik Kimia Industri berpeluang kerja antara lain : Di Industri Kimia (Sebagai Analisis Laboratorium dan Operator Peralatan Industri Kimia); Industri Pangan (Indofood, Unilever, Makanan Instan dll); Industri Kesehatan dan Kecantikan : (Industri Obat-obatan, detergen, sabun, pasta gigi, dll); Pertambangan : Pertamina, Pabrik Pengolahan Oli, dan Gas; Industri Selter Industri Pupuk dan Peptisida, Dll.</p>
                        <p><b>VISI DAN MISI</b></p>

                        <p><b>Visi</b>
                            <br />Terwujudnya tamatan yang berimtaq kepada Tuhan Yang Maha Esa. Berbudi Pekerti Luhur, Mandiri, Berdaya saing tinggi, berperilaku profesional dan berwawasan lingkungan dalam menyongsong era globalisasi
                            
                        </p>
                        <p><b>Misi</b>
                            <br />1. Menyiapkan tenaga kerja terampil berkualitas dan profesional sesuai dengan standart kompetensi industri
                            <br />2. Membekali peserta didik dengan pengetahuan, ketrampilan dan atitude agar kompeten dan mampu secara mandiri baik di dunia industri maupun di jenjang pendidikan yang lebih tinggi
                            <br/>3. Menghasilkan tamatan yang memiliki kemampuan yang berkualitas dan mampu bersaing di dunia kerja maupun mampu bekerja mandiri
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
                {{---------------------- side bar sekolah ----------------------}}
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
                            <p class="sidetitle">Instansi Terkait</p>
                            <ul>
                                <li class="hcard overflow-auto">
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Cabang Dinas Pendidikan Wilayah Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kementerian Pendidikan & Kebudayaan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Direktorat PSMK
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Dinas Pendidikan Jatim
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Pemerintah Kabupaten Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Dinas Ketenagakerjaan Kabupaten Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Sistem Informasi Inovasi Sekolah
                                    </a>
                                </li>
                            </ul>
                            <p class="sidetitle">Potensi Sekitar</p>
                            <ul>
                                <li class="hcard overflow-auto">
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kecamatan Sukorejo Kab.Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kaboki-Pionir Ekspor Tas Rajut
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Taman Safari Indonesia 2
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Saygon Waterpark
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kebon Raya Purwodadi
                                    </a>
                                </li>
                            </ul>
                            <p class="sidetitle">Kategori</p>
                            <ul>
                                <li class="hcard overflow-auto border-0">
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Agenda Sekolah
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Artikel Guru
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Informasi Sekolah
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Kegiatan BKK
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Kegiatan Sekolah
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Lowongan Kerja
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="tags">
                            <p>Most Popular Tags</p>
                            <a href="#">Enjoy</a>
                            <a href="#">Clean</a>
                            <a href="#">Hygienic</a>
                            <a href="#">Time</a>
                            <a href="#">Brush</a>
                            <a href="#">Wash</a>
                            <a href="#">Call</a>
                        </div> --}}
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/kAU5CmEOVtA?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"
                                title="YouTube video" allowfullscreen></iframe>
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
