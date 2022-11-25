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
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="guru/asnah.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="guru/rudi.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="guru/hadi.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    {{-- <div class="home-section">
        <div class="home-slider-area owl-carousel owl-theme">
            <div class="home-slider-item items-bg1">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="home-text">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="home-slider-item items-bg3">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#mainBanner" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mainBanner" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div> --}}

    <div class="service-style-three pt-100 pb-70">
        <div class="container">
            <div class="section-head text-center">
                <h2>SMK NEGERI 1 SUKOREJO</h2>
                <p>Jl. Sumbergareng Desa Sukorejo Kecamatan Sukorejo, Kabupaten Pasuruan, Kode Pos 67161</p>
            </div>
            <div class="service-slider owl-carousel owl-theme">
                <div class="service-item">
                    <i class="flaticon-spray"></i>
                    <h3>Guru Dan Staf</h3>
                    <p>Biodata Guru Dan Karyawan</p>
                    <div class="theme-button">
                        <a href="/guruu" class="default-btn">Read More</a>
                    </div>
                    <div class="service-shape">
                        <img src="assets/img/service/shapes/service-pattern-6.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-7.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-8.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-9.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-10.png" alt="shape">
                    </div>
                </div>
                <div class="service-item">
                    <i class="flaticon-clean-house"></i>
                    <h3>Program Keahlian</h3>
                    <p>Pengenalan Kompetensi Keahlian</p>
                    <div class="theme-button">
                        <a href="/jurusan" class="default-btn">Read More</a>
                    </div>
                    <div class="service-shape">
                        <img src="assets/img/service/shapes/service-pattern-6.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-7.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-8.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-9.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-10.png" alt="shape">
                    </div>
                </div>
                <div class="service-item">
                    <i class="flaticon-wiper"></i>
                    <h3>Agenda Sekolah</h3>
                    <p>Kegiatan-kegiatan Sekolah.</p>
                    <div class="theme-button">
                        <a href="service-details.html" class="default-btn">Read More</a>
                    </div>
                    <div class="service-shape">
                        <img src="assets/img/service/shapes/service-pattern-6.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-7.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-8.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-9.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-10.png" alt="shape">
                    </div>
                </div>
                <div class="service-item">
                    <i class="flaticon-spray"></i>
                    <h3>Loker dari BKK</h3>
                    <p>Lowongan Pekerjaan dari BKK.</p>
                    <div class="theme-button">
                        <a href="service-details.html" class="default-btn">Read More</a>
                    </div>
                    <div class="service-shape">
                        <img src="assets/img/service/shapes/service-pattern-6.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-7.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-8.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-9.png" alt="shape">
                        <img src="assets/img/service/shapes/service-pattern-10.png" alt="shape">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-style-two about-style-three pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="about-img">
                        <center><img src="../guru/rudi.png" class="imgkep" alt="about image"></center>
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


    <div class="service-style-three pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 p-0">
                    <div class="about-img">
                        <img src="../guru/video.svg" alt="about image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-head">
                            <span><b>Bro, Nonton!</b></span>
                            <br>
                            <h3> Video Profil Sketsu</h3>
                            <br>
                            <p>Video srofil sekolah memperkenalkan kepada kalian hal-hal berkaitan dengan Kejurusan,
                                lingkungan sekolah , fasilitas umum sekolah, fasilitas pembelajaran (kelas,lab,dll),
                                ruang belajar, kegiatan siswa, dan masih banyak lagi. <br>

                                Biar kalian tidak penasaran apa saja yang ada di dalam SMK NEGERI 1 SUKOREJO, segera
                                tonton video profilnya. Jangan Sampai Tidak Ditonton Nanti Menyesal.</p>
                        </div>
                        <div class="theme-button text-left play-video">
                            <a href="#" class="btn btn-danger"><i class="fa-sharp fa-solid fa-play"></i>
                                BISA DIPLAY </a>
                        </div>
                        <div class="video-popup modalyosop">
                            <div class="modal-contentyosop">
                                <span class="close-modal">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 36 36">
                                        <path
                                            d="M28.5 9.6l-2.1-2.1-8.4 8.4-8.4-8.4-2.1 2.1 8.4 8.4-8.4 8.4 2.1 2.1 8.4-8.4 8.4 8.4 2.1-2.1-8.4-8.4z"
                                            style="fill: #FFF;" />
                                    </svg>
                                </span>
                                <div class="video-container">
                                    <!-- Enter the video ID into the data-id attribute -->
                                    <div id="player" data-id="DGIXT7ce3vQ"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>' <div class="counter-style-two pt-100 pb-70">
        <div class="container">
            <h2 class="text-center">Siswa Kami Lebih dari 1000+</h2>
            <div class="row">
                <div class="col-md-3 col-5">
                    <div class="counter-text">
                        <h2><span class="counter">1</span>K</h2>
                        <p>Laki-Laki</p>
                    </div>
                </div>
                <div class="col-md-3 col-7">
                    <div class="counter-text">
                        <h2><span class="counter">989</span>+</h2>
                        <p>Perempuan</p>
                    </div>
                </div>
                <div class="col-md-3 col-5">
                    <div class="counter-text">
                        <h2><span class="counter">45</span>+</h2>
                        <p>Total Siswa</p>
                    </div>
                </div>
                <div class="col-md-3 col-7">
                    <div class="counter-text">
                        <h2><span class="counter">12</span>+</h2>
                        <p>Guru</p>
                    </div>
                </div>
            </div>
            {{-- <div class="counter-shape">
                <img src="assets/img/counter/1.png" alt="shape">
                <img src="assets/img/counter/2.png" alt="shape">
                <img src="assets/img/counter/3.png" alt="shape">
                <img src="assets/img/counter/4.png" alt="shape">
                <img src="assets/img/counter/5.png" alt="shape">
                <img src="assets/img/counter/6.png" alt="shape">
                <img src="assets/img/counter/7.png" alt="shape">
                <img src="assets/img/counter/1.png" alt="shape">
                <img src="assets/img/counter/8.png" alt="shape">
                <img src="assets/img/counter/4.png" alt="shape">
            </div> --}}
        </div>
    </div>




    <section class="blog-section pt-100">
        <div class="container">
            <div class="section-head text-center">
                <h2>Berita & Blog Terbaru</h2>
            </div>
            <div class="blog-slider owl-carousel owl-theme">
                @foreach ($data as $blog)
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="#">
                                <img class="img-blog" src="{{ asset('blog/' . $blog->foto) }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#" class="overflow1">{{ $blog->judul }}</a></h4>
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
                            <p class="overflow">{!! $blog->deskripsi !!}</p>
                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
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
                                    @foreach ($dataa as $alumni)
                                        <div class="sin-testiImage">
                                            <img class="img-blog" src="{{ asset('fotoalumni/' . $alumni->foto) }}"
                                                alt="blog image">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-text-slider slider-for text-center">
                            @foreach ($dataa as $alumni)
                                <div class="sin-testiText">
                                    <h2>{{ $alumni->nama }}</h2>
                                    <span>{{ $alumni->pekerjaan }}</span>
                                    <p style="word-break: break-all;">{!! $alumni->deskripsi !!}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-section pt-100 pb-70">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.585483431905!2d112.7150166749192!3d-7.727543392290657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d1337b9fbe51%3A0x5f53153c148fedfd!2sSMK%20Negeri%201%20Sukorejo!5e0!3m2!1sid!2sid!4v1667877880917!5m2!1sid!2sid"
            width="1450" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    @include('landingpage.layout.footer')
    @include('landingpage.layout.js')
    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    <script>
        // Hide all item in .carousel-item initially
        $(".carousel-item *").addClass("d-none");

        // Animate the first slide
        setTimeout(function() {
            $(".carousel-item.active *")
                .removeClass("d-none")
                .addClass("animated");
        }, 200);

        // Animate after the slider changes
        $("#mainBanner").on("slid.bs.carousel", function(e) {
            // Add .d-none to previous shown slide
            $(".carousel-item *").addClass("d-none");

            // Element for new slide
            var c = e["relatedTarget"];

            // After 0.7 sec slide changes, then make the animation for new slide
            setTimeout(function() {
                $(c)
                    .find("*")
                    .removeClass("d-none")
                    .addClass("animated");
                console.log("c");
            }, 200);
        });
    </script>
</body>
