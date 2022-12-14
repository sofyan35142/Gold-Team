<!DOCTYPE html>
<html lang="zxx">
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
            @foreach ($slider as $foto)
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('slider/' . $foto->foto1) }}" alt="First slide"
                            style="height: 40pc;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('slider/' . $foto->foto2) }}" alt="Second slide"
                            style="height: 40pc;">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('slider/' . $foto->foto3) }}" alt="Third slide"
                            style="height: 40pc;">
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
            @endforeach
        </div>
    </div>
    <section>
        <div class="container reveal">
            <h2>Kenapa Harus Sketsu...?</h2>
            <center>
                <p>Alasan kenapa kalian semua harus bergabung dengan SMK NEGERI 1 SUKOREJO</p>
            </center> <br>
            <div class="text-container">

                <div>
                    <div class="icon-block">

                        <div class=" bg-color-2 icon-block-img m-0 text-warning">
                            <i class="fas fa-school"></i>
                        </div>

                        <div class="icon-block-info mr-3">

                            <h3>Lingkungan Nyaman</h3>
                            <p>
                                Berada dilingkungan Aman, Nyaman, dan Kondusif.
                            </p>

                        </div>
                    </div>

                </div>
                <div>
            <div class="text-container">

                <div>
                    <div class="icon-block">

                        <div class=" bg-color-2 icon-block-img m-0 text-warning">
                            <i class="fas fa-school"></i>
                        </div>

                        <div class="icon-block-info mr-3">

                            <h3>Lingkungan Nyaman</h3>
                            <p>
                                Berada dilingkungan Aman, Nyaman, dan Kondusif.
                            </p>

                        </div>
                    </div>

                </div>
                <div>
                    <div class="icon-block ">

                        <div class="bg-color-1 icon-block-img m-0 text-info">
                            <i class="fa-solid fa-laptop"></i>
                        </div>

                        <div class="icon-block-info me-3">

                            <h3>Fasilitas Lengkap</h3>
                            <p>
                                Menunjang Pembelajaran Dengan Kualitas Terbaik.
                            </p>


                        </div>
                    </div>
                </div>
                <div>
                    <div class="icon-block">

                        <div class=" bg-color-7 icon-block-img m-0 text-info">
                            <i class="fa-solid fa-chalkboard-user"></i>
                        </div>

                        <div class="icon-block-info mr-3">

                            <h3>Pengajar Kompeten</h3>
                            <p>
                                Guru yang up-to-date dengan perkembangan industri.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        <div class="container reveal">
        {{-- <div class="container-fluid"> --}}
            @foreach ($datakepsek as $kepsek)
                <div class="row align-items-center">
                    <div class="col-lg-6 p-0">
                        <div class="about-img">
                            <div class="img-box5">
                                <div class="img-blog"><img class="fotokepsek"
                                        src="{{ asset('kepsek/' . $kepsek->foto) }}"alt="about"
                                        style="height: 28pc;"> <br>
                                    <center><b>{{ $kepsek->nama }}</b></center>
                                </div>
                                {{-- <div class="shape"><img src="fotoblog/1.png"alt="shape"></div> --}}
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <div class="section-head">
                                <h2>Sambutan Kepala Sekolah</h2>
                                <p>{!! $kepsek->sambutan !!}</p>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </section>


    <div class="service-style-three pt-100 pb-70">
        <div class="container">
            @foreach ($video as $profil)
                <div class="row align-items-center">
                    <div class="col-lg-6 p-0">
                        <div class="about-img">
                            <img src="{{ asset('videoprofil/' . $profil->foto) }}" alt="about image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-text">
                            <div class="section-head">
                                <span><b>Bro, Nonton!</b></span>
                                <br>
                                <h3>{{ $profil->judul }}</h3>
                                <br>
                                <p>{!! $profil->deskripsi !!}</p>
                            </div>
                            <div class="theme-button text-left play-video">
                                <a href="#" class="btn btn-danger"><i class="fa-sharp fa-solid fa-play"></i>
                                    PLAY </a>
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
            @endforeach
        </div>
    </div>
    <div class="counter-style-two pt-100 pb-70">
        @foreach ($total as $siswa)
            <div class="container reveal">
                <h2 class="text-center">{{ $siswa->judul }}</h2>
                <div class="row">
                    <div class="col-md-3 col-5">
                        <div class="counter-text">
                            <h2><span class="counter">{{ $siswa->laki_laki }}</h2>
                            <p>Laki-Laki</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-7">
                        <div class="counter-text">
                            <h2><span class="counter">{{ $siswa->perempuan }}</span></h2>
                            <p>Perempuan</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-5">
                        <div class="counter-text">
                            <h2><span class="counter">{{ $siswa->total_siswa }}</span></h2>
                            <p>Total Siswa</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-7">
                        <div class="counter-text">
                            <h2><span class="counter">{{ $siswa->guru }}</span></h2>
                            <p>Guru</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>




    <section class="blog-section pt-100">
        <div class="container">
            <div class="section-head text-center">
                <h2>Berita & Blog Terbaru</h2>
                {{-- <button><a href="/blogbanyak">Blog</a></button> --}}
            </div>


            <div class="blog-slider owl-carousel owl-theme">
                @foreach ($data as $blog)
                    <div class="blog-area yosopelipsis">

                        <div class="blog-img">
                            <a href="#">
                                <img class="img-blog" src="{{ asset('blog/' . $blog->foto) }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#" class="overflow1">{{ $blog->judul }}</a></h4>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-calendar-days"></i>
                                    {{ $blog->created_at }}
                                </li>
                                <li>
                                    <i class="fa-solid fa-tags"></i>
                                    <a href="#">{{ $blog->idblog->kategori }}</a>
                                </li>
                            </ul>
                            <p class="overflow">{!! $blog->deskripsi !!}</p>
                            <a href="/blogdetail/{{ $blog->id }}" class="blog-btn">
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
            <div class="container reveal">
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
        }, 1000);
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
            }, 1000);
        });
    </script>
    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);
    </script>
</body>
{{-- push --}}
