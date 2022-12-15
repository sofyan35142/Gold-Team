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
                        <h2>Kegiatan BKK</h2>
                        <ul>
                            <li>
                                <a href="/#">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/#">Kegiatan BKK</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a class="text-elipsiszak" href="/#">WORKSHOP TRACER STUDY DAN PROGRAM KESIAPAN KERJA BEKERJA SAMA DENGAN
                                    DINAS TENAGA KERJA KABUPATEN PASURUAN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="recent-style-two blog-details-area blog-details-page-area pt-100">
        <div class="container">
            <div class="row">
                <div class="blog-details-post">
                    <div class="blog-post-title">
                        <h3>
                            {{$data->judul}}
                        </h3>
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
                    </div>
                    <div class="row">
                        @foreach (json_decode($data->foto) as $foto)
                        <div class="col-lg-6 col-md-6">
                            <div class="recent-items">
                                <div class="recent-img">
                                    <img src="{{ asset("assets/img/detailbkk/" . $foto)}}" alt="project image"
                                        height="466">
                                    <div class="recent-hover">
                                        <div class="d-table">
                                            <div class="d-table-cell">
                                                <a href="{{ asset("assets/img/detailbkk/" . $foto)}}" class="popup-gallery">
                                                    <i class="icofont-eye-alt"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('landingpage.layout.footer')


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    @include('landingpage.layout.js')
</body>

</html>
