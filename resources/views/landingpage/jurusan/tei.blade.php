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
                        <h2>Teknik Elektronika Industri</h2>
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
                                Teknik Elektronika Industri
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
                    <img src="foto/jurusan/TEI1.JPG" alt="service">
                    <div class="service-details-post">
                        <h3>Teknik Elektronika Industri <span class="tkrfont"> (TEI)</span></h3>
                        <p>Teknik Elektronik Industri (TEI) adalah bidang yang fokus mempelajari tentang komponen
                            listrik serta berbagai macam peralatan semi konduktor. Teknik Elektronika Industri
                            digolongkan ke dalam bagian teknik listrik atau teknik elektro. Ada beberapa hal yang
                            dipelajari oleh kompetensi Teknik Elektronika Industri, yaitu mulai dari elektronika umum
                            (rekayasa elektronika), mikrokontroller, mikroprocessor, pneumatic, PLC, programming
                            berbasis komputer, dan lain sebagainya terkait perangkat industri yang memiliki hubungan
                            atau bekerja dengan sistem elektronik. Selain itu, peluang kerja lulusan Teknik Elektronika
                            Industri SMKN 1 Sukorejo bisa dikatakan sangat luas, mengingat ketrampilan yang diajarkan
                            juga kompleks. Secara umum, output lulusan kompetensi TEI SMKN 1 Sukorejo rata-rata sangat
                            mudah mencari pekerjaan. Tentu jenis pekerjaan terkait dengan elektronika industri pada
                            posisi teknisi elektronika industri, instrumentasi, atau teknisi kontrol.</p>
                    </div>
                    <div class="service-details-post">

                        <h3>Ketua Kompetensi Keahlian <span class="tkrfont"> (KaKomLi)</span></h3>
                        <div class="d-flex flex-row">
                            <div class="p-2"><img class="img-guru"
                                    src="https://smkn1sukorejo.sch.id/wp-content/uploads/2022/06/Foto-Sofan-kuning-Sofan-Dedi.jpg" />
                            </div>
                            <div class="p-2"><b>SOFAN DEDI PRINYATO, S.Pd., Gr</b>
                                <br />
                                <p>NIP: 19890506 202221 1 009
                                    <br />
                                    Tempat/Tgl Lahir: Sidoarjo, 06 Mei 1989
                                    <br />
                                    Status: PPPK
                                    <br />
                                    Gol. Ruang: IX
                                </p>
                            </div>
                        </div>
                    </div>
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
                                <h4 class="h4-css">Modul Produktif TEI</h4>
                                <p><a href="/modulproduktiftei">Lihat selengkapnya</a></p>
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
