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
                        <p>Program keahlian yang mempelajasi pemprosesan bahan mentah menjadi berupa barang setengah
                            jadi ataupun barang jadi (produk) seperti : minyak bumi dan gas bumi, gas bio, detergen,
                            cairan anti kuman, planstik, kertas, kecantikan, obat-obatan, makanan instan, dll. Lulusan
                            Teknik Kimia Industri berpeluang kerja antara lain : Di Industri Kimia (Sebagai Analisis
                            Laboratorium dan Operator Peralatan Industri Kimia); Industri Pangan (Indofood, Unilever,
                            Makanan Instan dll); Industri Kesehatan dan Kecantikan : (Industri Obat-obatan, detergen,
                            sabun, pasta gigi, dll); Pertambangan : Pertamina, Pabrik Pengolahan Oli, dan Gas; Industri
                            Selter Industri Pupuk dan Peptisida, Dll.</p>
                        <p><b>VISI DAN MISI</b></p>

                        <p><b>Visi</b>
                            <br />Terwujudnya tamatan yang berimtaq kepada Tuhan Yang Maha Esa. Berbudi Pekerti Luhur,
                            Mandiri, Berdaya saing tinggi, berperilaku profesional dan berwawasan lingkungan dalam
                            menyongsong era globalisasi

                        </p>
                        <p><b>Misi</b>
                            <br />1. Menyiapkan tenaga kerja terampil berkualitas dan profesional sesuai dengan standart
                            kompetensi industri
                            <br />2. Membekali peserta didik dengan pengetahuan, ketrampilan dan atitude agar kompeten
                            dan mampu secara mandiri baik di dunia industri maupun di jenjang pendidikan yang lebih
                            tinggi
                            <br />3. Menghasilkan tamatan yang memiliki kemampuan yang berkualitas dan mampu bersaing di
                            dunia kerja maupun mampu bekerja mandiri
                        </p>


                    </div>
                    <div class="service-details-post">

                        <h3>Ketua Kompetensi Keahlian <span class="tkrfont"> (KaKomLi)</span></h3>
                        <div class="d-flex flex-row">
                            <div class="p-2"><img class="img-guru"
                                    src="https://smkn1sukorejo.sch.id/wp-content/uploads/2022/06/20211223_063732-hanny-mualifah-scaled.jpg" />
                            </div>
                            <div class="p-2"><b>HANIK MUALLIFAH, S.T</b>
                                <br />
                                <p>NIP: 19750619 200904 2 001
                                    <br />
                                    Tempat/Tgl Lahir: Madiun, 19 Juni 1975
                                    <br />
                                    Status: PNS
                                    <br />
                                    Gol. Ruang: III/c
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- -------------------- side bar sekolah -------------------- --}}
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
                                <h4 class="h4-css">Modul Produktif TKI</h4>
                                <p><a href="/modulproduktiftki">Lihat selengkapnya</a></p>
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
                                                required data-error="Please enter your email"
                                                placeholder="Your Email">
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
