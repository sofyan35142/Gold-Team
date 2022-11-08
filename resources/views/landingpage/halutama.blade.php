<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from templates.hibootstrap.com/viscous/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:33:31 GMT -->

<!-- Mirrored from previewthemes.com/enzio/home-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 03:25:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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

    <div class="home-section">
        <div class="home-slider-area owl-carousel owl-theme">
            <div class="home-slider-item items-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="home-text">
                                <h1>Your Hygienic Home Our Responsibility</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor ut labore et dolore magna aliqua. Quis
                                    ipsum suspendisse ultrices gravida. Viverra maecenas
                                    accumsan lacus vel facilisis. Quis ipsum suspendisse
                                    ultrices gravida.
                                </p>
                                <div class="theme-button">
                                    <a href="about.html" class="default-btn active-btn">know More</a>
                                    <a href="contact.html" class="default-btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slider-item items-bg2">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="home-text">
                                <h1>We provide High Quality Service</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor ut labore et dolore magna aliqua. Quis
                                    ipsum suspendisse ultrices gravida. Viverra maecenas
                                    accumsan lacus vel facilisis. Quis ipsum suspendisse
                                    ultrices gravida.
                                </p>
                                <div class="theme-button">
                                    <a href="about.html" class="default-btn active-btn">know More</a>
                                    <a href="contact.html" class="default-btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slider-item items-bg3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="home-text">
                                <h1>Our Working Process is Unique</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor ut labore et dolore magna aliqua. Quis
                                    ipsum suspendisse ultrices gravida. Viverra maecenas
                                    accumsan lacus vel facilisis. Quis ipsum suspendisse
                                    ultrices gravida.
                                </p>
                                <div class="theme-button">
                                    <a href="about.html" class="default-btn active-btn">know More</a>
                                    <a href="contact.html" class="default-btn">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="service-section pt-100 pb-70">
        <div class="container">
            <div class="section-head text-center">
                <h2>SMK NEGERI 1 SUKOREJO</h2>
                <p>
                    Jl. Sumbergareng Desa Sukorejo Kecamatan Sukorejo, Kabupaten Pasuruan, Kode Pos 67161
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card">
                        <i class="flaticon-medal"></i>
                        <h3>Guru dan Staf</h3>
                        <p>
                            Biodata Guru dan Staf Karyawan
                        </p>
                        <div class="theme-button">
                            <a href="/guru" class="default-btn">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card active-service">
                        <i class="flaticon-credit-card"></i>
                        <h3>Low Cost Service</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc.
                        </p>
                        <div class="theme-button">
                            <a href="service-details.html" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card">
                        <i class="flaticon-icon-1584892"></i>
                        <h3>Program Keahlian</h3>
                        <p>
                            Pengenalan Kompetensi Keahlian
                        </p>
                        <div class="theme-button">
                            <a href="service-details.html" class="default-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card">
                        <i class="flaticon-spray"></i>
                        <h3>Agenda Sekolah</h3>
                        <p>
                            Kegiatan-Kegiatan Sekolah
                        </p>
                        <div class="theme-button">
                            <a href="service-details.html" class="default-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card">
                        <i class="flaticon-clean-house"></i>
                        <h3>Loker Dari BKK</h3>
                        <p>
                            Lowongan Pekerjaan Dari BKK
                        </p>
                        <div class="theme-button">
                            <a href="service-details.html" class="default-btn">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-card">
                        <i class="flaticon-wiper"></i>
                        <h3>Office Cleaning</h3>
                        <p>
                            $$
                        </p>
                        <div class="theme-button">
                            <a href="service-details.html" class="default-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-shapes">
                <img src="assets/img/service/shapes/1.png" alt="shape" />
                <img src="assets/img/service/shapes/2.png" alt="shape" />
                <img src="assets/img/service/shapes/3.png" alt="shape" />
                <img src="assets/img/service/shapes/4.png" alt="shape" />
                <img src="assets/img/service/shapes/5.png" alt="shape" />
                <img src="assets/img/service/shapes/6.png" alt="shape" />
                <img src="assets/img/service/shapes/7.png" alt="shape" />
                <img src="assets/img/service/shapes/8.png" alt="shape" />
                <img src="assets/img/service/shapes/9.png" alt="shape" />
                <img src="assets/img/service/shapes/10.png" alt="shape" />
            </div>
        </div>
    </section>

    <section class="about-style-two about-style-three pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="about-img">
                        <img src="assets/img/about-two.png" alt="about image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-head">
                            <h2>Sambutan Kepala Sekolah</h2>
                            <p>Selamat datang di Website kami di Sekolah Menengah Kejuruan Telkom Bandung. Website ini
                                kami tujukan untuk seluruh guru, karyawan dan siswa serta masyarakat umum agar dapat
                                mengakses seluruh informasi tentang profil, aktifitas/kegiatan serta fasilitas sekolah
                                secara berkala dan update.

                                Tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada
                                seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang
                                membangun demi kemajuan website ini lebih lanjut.

                                Kami berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar
                                civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi
                                yang erat disegala unsur sesuai dengan motto sekolah kita.

                                𝑺𝑴𝑲 𝑻𝒆𝒍𝒌𝒐𝒎 𝑩𝒂𝒏𝒅𝒖𝒏𝒈 𝑺𝒆𝒌𝒐𝒍𝒂𝒉𝒏𝒚𝒂 𝑺𝒂𝒏𝒈 𝑱𝒖𝒂𝒓𝒂,
                                𝑷𝑹𝑰𝑴𝑨𝑺𝑬𝑹𝑼 𝑺𝒆𝒎𝒖𝒂 𝑷𝒓𝒊𝒎𝒂, 𝑺𝒆𝒎𝒖𝒂 𝑺𝒆𝒓𝒖, 𝑴𝒂𝒌𝒊𝒏 𝑷𝒓𝒊𝒎𝒂
                                𝒅𝒂𝒏 𝑴𝒂𝒌𝒊𝒏 𝑺𝒆𝒓𝒖 𝒅𝒂𝒍𝒂𝒎 𝑲𝒂𝒓𝒂𝒌𝒕𝒆𝒓, 𝑷𝒓𝒆𝒔𝒕𝒂𝒔𝒊 𝒅𝒂𝒏
                                𝑳𝒂𝒚𝒂𝒏𝒂𝒏

                                Pada akhirnya, mari kita bekerja dan berkarya dengan keikhlasan yang tulus demi
                                suksesnya masa depan anak-anak didik kita.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="why-choose-section why-choose-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 why-choose-img"></div>
                <div class="col-lg-5 offset-lg-6 offset-md-0">
                    <div class="why-choose-text">
                        <div class="section-head">
                            <h2>Sambutan Kepala Sekolah</h2>
                            <p style="">
                                Selamat datang di Website kami di Sekolah Menengah Kejuruan Telkom Bandung. Website ini
                                kami tujukan untuk seluruh guru, karyawan dan siswa serta masyarakat umum agar dapat
                                mengakses seluruh informasi tentang profil, aktifitas/kegiatan serta fasilitas sekolah
                                secara berkala dan update.

                                Tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada
                                seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang
                                membangun demi kemajuan website ini lebih lanjut.

                                Kami berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar
                                civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi
                                yang erat disegala unsur sesuai dengan motto sekolah kita.

                                𝑺𝑴𝑲 𝑻𝒆𝒍𝒌𝒐𝒎 𝑩𝒂𝒏𝒅𝒖𝒏𝒈 𝑺𝒆𝒌𝒐𝒍𝒂𝒉𝒏𝒚𝒂 𝑺𝒂𝒏𝒈 𝑱𝒖𝒂𝒓𝒂,
                                𝑷𝑹𝑰𝑴𝑨𝑺𝑬𝑹𝑼 𝑺𝒆𝒎𝒖𝒂 𝑷𝒓𝒊𝒎𝒂, 𝑺𝒆𝒎𝒖𝒂 𝑺𝒆𝒓𝒖, 𝑴𝒂𝒌𝒊𝒏 𝑷𝒓𝒊𝒎𝒂
                                𝒅𝒂𝒏 𝑴𝒂𝒌𝒊𝒏 𝑺𝒆𝒓𝒖 𝒅𝒂𝒍𝒂𝒎 𝑲𝒂𝒓𝒂𝒌𝒕𝒆𝒓, 𝑷𝒓𝒆𝒔𝒕𝒂𝒔𝒊 𝒅𝒂𝒏
                                𝑳𝒂𝒚𝒂𝒏𝒂𝒏

                                Pada akhirnya, mari kita bekerja dan berkarya dengan keikhlasan yang tulus demi
                                suksesnya masa depan anak-anak didik kita.
                            </p>
                        </div>
                    </div>
                    <div class="why-choose-accordian">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Expert Cleaners
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Latest Equipment
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Clean & Fast Service
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore.
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                Budget Oriented
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                        data-bs-parent="#accordionExample">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="why-choose-contact">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Number" />
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Request A Call
                                    </button>
                                </form>
                                <p>Get a free call for service</p>
                            </div>
                        </div>
                </div>
            </div>
            <div class="why-choose-shape">
                <img src="assets/img/why-choose/shape-1.png" alt="shape" />
            </div>
        </div>
    </section> --}}

    <section class="pricing-section pb-70">
        <div class="container">
            {{-- <div class="section-head text-center">
                <h2>Our <span>Pricing Plan</span></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor contratc ut labore et dolore magna aliqua.
                </p>
            </div> --}}
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="price-card-area">
                        <div class="price-head-text">
                            <h4>POs-pos Terbaru</h4>
                        </div>
                        <div class="plan-features">

                            <li>Lowongan Kerja PT.ADM</li>
                            <li>“ALUMNI SHARING SESSION” BERSAMA ALUMNI ALUMNI HEBAT SMK NEGERI 1 SUKOREJO</li>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="price-card-area active-price">
                        <div class="price-head-text">
                            <h4>Kategori</h4>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <a href=""><li>
                                    Fully Satisfaction
                                </li></a>
                                <a href=""><li>
                                    7 Hours
                                </li></a>
                               <a href=""> <li>
                                    2 time in a week
                                </li></a>
                                <a href=""><li>
                                    Full Cleaning
                                </li></a>
                                <a href=""><li>
                                    All Our Equipment
                                </li></a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 col-sm-6 offset-lg-0 offset-sm-3">
                    <div class="price-card-area">
                        <div class="price-head-text">
                            <h4>Potensi Sekitar</h4>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <a href=""><li>
                                    Kecamatan Sukorejo Kab. Pasuruan
                                </li></a>
                                <a href=""><li>
                                    Kaboki-Pionir Ekspor Tas Rajut
                                </li></a>
                                <a href=""><li>
                                    Taman Safari Indonesia 2
                                </li></a>
                                <a href=""><li>
                                    Saygon Waterpark
                                </li></a>
                                <a href=""><li>
                                    Kebon Raya Purwodadi
                                </li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="process-section pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="process-card">
                        <i class="icofont-touch"></i>
                        <h3>Choose Services</h3>
                        <p>
                            ...
                            <img src="../../assets/img/process-pattern-2.png" alt="arrow" />
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="process-card">
                        <i class="icofont-world"></i>
                        <h3>Booking Online</h3>
                        <p>
                            Lorem Ipsum is simply dummied text of the printing and
                            typesetting industry.
                        </p>
                        <img src="../../assets/img/process-pattern-2.png" alt="arrow" />
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
                    <div class="process-card">
                        <i class="icofont-recycle-alt"></i>
                        <h3>Enjoy Cleaning</h3>
                        <p>
                            Lorem Ipsum is simply dummied text of the printing and
                            typesetting industry.
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-4 col-sm-6 offset-sm-3 offset-md-0">
                <div class="process-card">
                    <i class="icofont-recycle-alt"></i>
                    <h3>Enjoy Cleaning</h3>
                    <p>
                        Lorem Ipsum is simply dummied text of the printing and
                        typesetting industry.
                    </p>
                </div>
            </div>
        </div>
    </div>

    {{-- <section class="pricing-section pb-70">
        <div class="container">
            <div class="section-head text-center">
                <h2>Our <span>Pricing Plan</span></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor contratc ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="price-card-area">
                        <div class="price-head-text">
                            <h4>Basic Plan</h4>
                            <h2>$<span>60</span>/month</h2>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Fully Satisfaction
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    5 Hours
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    1 time in a week
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Full Cleaning
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    All Our Equipment
                                </li>
                            </ul>
                        </div>
                        <div class="plan-btn">
                            <a href="#">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="price-card-area active-price">
                        <div class="price-head-text">
                            <h4>Standard Plan</h4>
                            <h2>$<span>99</span>/month</h2>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Fully Satisfaction
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    7 Hours
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    2 time in a week
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Full Cleaning
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    All Our Equipment
                                </li>
                            </ul>
                        </div>
                        <div class="plan-btn">
                            <a href="#">Booking Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 col-sm-6 offset-lg-0 offset-sm-3">
                    <div class="price-card-area">
                        <div class="price-head-text">
                            <h4>Premium Plan</h4>
                            <h2>$<span>159</span>/month</h2>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Fully Satisfaction
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    10 Hours
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    3 time in a week
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    Full Cleaning
                                </li>
                                <li>
                                    <i class="icofont-check-circled"></i>
                                    All Our Equipment
                                </li>
                            </ul>
                        </div>
                        <div class="plan-btn">
                            <a href="#">Booking Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <div class="counter-section pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="offer-text">
                        <h2>Get <span>15% Discount</span> on your first Service</h2>
                        <div class="theme-button">
                            <a href="pricing.html" class="default-btn">Book Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="counter-area">
                        <div class="row">
                            <div class="col-lg-5 col-md-3 col-6 offset-lg-1">
                                <div class="counter-text">
                                    <h2><span class="counter">1</span>K</h2>
                                    <p>Job Done</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-3 col-6">
                                <div class="counter-text">
                                    <h2><span class="counter">989</span></h2>
                                    <p>Happy Clients</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-3 col-6 offset-lg-1">
                                <div class="counter-text">
                                    <h2><span class="counter">45</span></h2>
                                    <p>Experts</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-3 col-6">
                                <div class="counter-text">
                                    <h2><span class="counter">12</span></h2>
                                    <p>Years of Experience</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="counter-shape">
                <img src="../../assets/img/counter/1.png" alt="shape" />
                <img src="../../assets/img/counter/2.png" alt="shape" />
                <img src="../../assets/img/counter/3.png" alt="shape" />
                <img src="../../assets/img/counter/4.png" alt="shape" />
                <img src="../../assets/img/counter/5.png" alt="shape" />
                <img src="../../assets/img/counter/6.png" alt="shape" />
                <img src="../../assets/img/counter/7.png" alt="shape" />
                <img src="../../assets/img/counter/1.png" alt="shape" />
                <img src="../../assets/img/counter/8.png" alt="shape" />
                <img src="../../assets/img/counter/4.png" alt="shape" />
                <img src="../../assets/img/counter/shape-1.png" alt="bubble shape" />
                <img src="../../assets/img/counter/shape-1.png" alt="bubble shape" />
            </div>
        </div>
    </div>

    <section class="team-section pt-100 pb-70">
        <div class="container">
            <div class="section-head text-center">
                <h2>Our <span>Team Members</span></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor contratc ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="../../assets/img/team/1.png" alt="team member" />
                            <div class="team-social">
                                <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                                <a href="#"><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h4>John Smith</h4>
                            <p>Head of Cleaner</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="../../assets/img/team/2.png" alt="team member" />
                            <div class="team-social">
                                <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                                <a href="#"><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h4>Marry</h4>
                            <p>Cleaner</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="../../assets/img/team/3.png" alt="team member" />
                            <div class="team-social">
                                <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                                <a href="#"><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h4>John Smith</h4>
                            <p>Office Cleaner</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img src="../../assets/img/team/4.png" alt="team member" />
                            <div class="team-social">
                                <a href="#"><i class="icofont-facebook"></i></a>
                                <a href="#"><i class="icofont-twitter"></i></a>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                                <a href="#"><i class="icofont-instagram"></i></a>
                            </div>
                        </div>
                        <div class="team-text">
                            <h4>Eve</h4>
                            <p>Assistant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="testimonial-section testimonial-bg ptb-100">
        <div class="testimonial-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 offset-lg-0 col-md-10 offset-md-1 col-sm-10 offset-sm-1">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                <div class="testimonial-image-slider slider-nav text-center">
                                    <div class="sin-testiImage">
                                        <img src="../../assets/img/testimonial/1.png" alt="Client image" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="../../assets/img/testimonial/2.png" alt="Client image" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="../../assets/img/testimonial/1.png" alt="Client image" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="../../assets/img/testimonial/2.png" alt="Client image" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="../../assets/img/testimonial/1.png" alt="Client image" />
                                    </div>
                                    <div class="sin-testiImage">
                                        <img src="../../assets/img/testimonial/2.png" alt="Client image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-text-slider slider-for text-center">
                            <div class="sin-testiText">
                                <h2>Stepheny Mc.man</h2>
                                <span>Co-worker of 3S</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do is ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices . Risus commodo viverra maecenas
                                    accumsan lacus vel facilisis.
                                </p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Jackson</h2>
                                <span>Graphics Designer of 3S</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do is ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices . Risus commodo viverra maecenas
                                    accumsan lacus vel facilisis.
                                </p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Amelia</h2>
                                <span>Web Developer of 3S</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do is ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices . Risus commodo viverra maecenas
                                    accumsan lacus vel facilisis.
                                </p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Stepheny Mc.man</h2>
                                <span>Co-worker of 3S</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do is ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices . Risus commodo viverra maecenas
                                    accumsan lacus vel facilisis.
                                </p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Jahan</h2>
                                <span>Co-worker of 3S</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do is ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices . Risus commodo viverra maecenas
                                    accumsan lacus vel facilisis.
                                </p>
                            </div>
                            <div class="sin-testiText">
                                <h2>Amelia</h2>
                                <span>SEO Expert of 3S</span>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do is ut labore et dolore magna aliqua. Quis ipsum
                                    suspendisse ultrices . Risus commodo viverra maecenas
                                    accumsan lacus vel facilisis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-section pt-100">
        <div class="container">
            <div class="section-head text-center">
                <h2>Latest <span>Blogs</span></h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor contratc ut labore et dolore magna aliqua.
                </p>
            </div>
            <div class="blog-slider owl-carousel owl-theme">
                <div class="blog-area">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="../../assets/img/blog/1.png" alt="blog image" />
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">How to cleanroom yourself</a></h4>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2021
                            </li>
                            <li>
                                <i class="icofont-ui-user"></i>
                                <a href="#">John Doe</a>
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc ut labore.
                        </p>
                        <a href="blog-details.html" class="blog-btn">
                            Read more
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-area">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="../../assets/img/blog/2.png" alt="blog image" />
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">Enjoy the working time</a></h4>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2021
                            </li>
                            <li>
                                <i class="icofont-ui-user"></i>
                                <a href="#">John Doe</a>
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc ut labore.
                        </p>
                        <a href="blog-details.html" class="blog-btn">
                            Read more
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-area">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="../../assets/img/blog/3.png" alt="blog image" />
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4>
                            <a href="blog-details.html">Self cleaning is the best drill</a>
                        </h4>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2021
                            </li>
                            <li>
                                <i class="icofont-ui-user"></i>
                                <a href="#">John Doe</a>
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc ut labore.
                        </p>
                        <a href="blog-details.html" class="blog-btn">
                            Read more
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-area">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="../../assets/img/blog/1.png" alt="blog image" />
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">How to cleanroom yourself</a></h4>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2021
                            </li>
                            <li>
                                <i class="icofont-ui-user"></i>
                                <a href="#">John Doe</a>
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc ut labore.
                        </p>
                        <a href="blog-details.html" class="blog-btn">
                            Read more
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-area">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="../../assets/img/blog/2.png" alt="blog image" />
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="blog-details.html">Enjoy the working time</a></h4>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2021
                            </li>
                            <li>
                                <i class="icofont-ui-user"></i>
                                <a href="#">John Doe</a>
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc ut labore.
                        </p>
                        <a href="blog-details.html" class="blog-btn">
                            Read more
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-area">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="../../assets/img/blog/3.png" alt="blog image" />
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4>
                            <a href="blog-details.html">Self cleaning is the best drill</a>
                        </h4>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2021
                            </li>
                            <li>
                                <i class="icofont-ui-user"></i>
                                <a href="#">John Doe</a>
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc ut labore.
                        </p>
                        <a href="blog-details.html" class="blog-btn">
                            Read more
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-area">
                    <div class="blog-img">
                        <a href="blog-details.html">
                            <img src="../../assets/img/blog/1.png" alt="blog image" />
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="#">How to cleanroom yourself</a></h4>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2021
                            </li>
                            <li>
                                <i class="icofont-ui-user"></i>
                                <a href="#">John Doe</a>
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc ut labore.
                        </p>
                        <a href="blog-details.html" class="blog-btn">
                            Read more
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-area">
                    <div class="blog-img">
                        <a href="#">
                            <img src="../../assets/img/blog/2.png" alt="blog image" />
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="#">Enjoy the working time</a></h4>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2021
                            </li>
                            <li>
                                <i class="icofont-ui-user"></i>
                                <a href="#">John Doe</a>
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc ut labore.
                        </p>
                        <a href="blog-details.html" class="blog-btn">
                            Read more
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                </div>
                <div class="blog-area">
                    <div class="blog-img">
                        <a href="#">
                            <img src="../../assets/img/blog/3.png" alt="blog image" />
                        </a>
                    </div>
                    <div class="blog-text">
                        <h4><a href="#">Self cleaning is the best drill</a></h4>
                        <ul>
                            <li>
                                <i class="icofont-calendar"></i>
                                20 Feb 2021
                            </li>
                            <li>
                                <i class="icofont-ui-user"></i>
                                <a href="#">John Doe</a>
                            </li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor contratc ut labore.
                        </p>
                        <a href="blog-details.html" class="blog-btn">
                            Read more
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="team-section pt-100 pb-70">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.585483431905!2d112.7150166749192!3d-7.727543392290657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d1337b9fbe51%3A0x5f53153c148fedfd!2sSMK%20Negeri%201%20Sukorejo!5e0!3m2!1sid!2sid!4v1667877880917!5m2!1sid!2sid"
            width="1500" height="550" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        {{-- <section class="elementor-element elementor-element-06cef2b elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="06cef2b" data-element_type="section">
						<div class="elementor-container elementor-column-gap-default">
				<div class="elementor-row">
				<div class="elementor-element elementor-element-d7a7cb0 elementor-column elementor-col-100 elementor-top-column" data-id="d7a7cb0" data-element_type="column">
			<div class="elementor-column-wrap  elementor-element-populated">
					<div class="elementor-widget-wrap">
				<div class="elementor-element elementor-element-b09fb73 elementor-aspect-ratio-169 elementor-widget elementor-widget-video" data-id="b09fb73" data-element_type="widget" data-settings="{&quot;aspect_ratio&quot;:&quot;169&quot;}" data-widget_type="video.default">
				<div class="elementor-widget-container">
					<div class="elementor-wrapper elementor-fit-aspect-ratio elementor-open-inline"> --}}
        <iframe class="elementor-video-iframe" allowfullscreen title="vimeo Video Player"
            src="https://player.vimeo.com/video/763637575?autoplay=1&amp;color&amp;autopause=0&amp;loop=1&amp;muted=0&amp;title=1&amp;portrait=1&amp;byline=1#t="></iframe>
        {{-- </section> --}}
    </div>
    <div class="contact-section">
        <div class="container">
            <div class="contact-area">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-img">
                            <img src="assets/img/contact-img.png" alt="contact image" />
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-text">
                            <div class="section-head">
                                <h2>We Love to <span> Hear from You</span></h2>
                                <p>Feel free and share with us. We will get you</p>
                            </div>
                            <div class="contact-form">
                                <form id="contactForm">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" name="name" id="name"
                                                    class="form-control" required data-error="Please enter your name"
                                                    placeholder="Your Name" />
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="email" name="email" id="email"
                                                    class="form-control" required data-error="Please enter your email"
                                                    placeholder="Your Email" />
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
    </div>

    @include('landingpage.layout.footer')

    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/slick.min.js"></script>

    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <script src="assets/js/meanmenu.js"></script>

    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="assets/js/form-validator.min.js"></script>

    <script src="assets/js/contact-form-script.js"></script>

    <script src="assets/js/custom.js"></script>
</body>

<!-- Mirrored from previewthemes.com/enzio/home-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 03:25:34 GMT -->

</html>
