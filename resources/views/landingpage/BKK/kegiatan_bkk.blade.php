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
                                <a href="/">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Kegiatan BKK</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-blog-post pt-100">
        <div class="container">
            <h2>Kegiatan BKK</h2>
            <div class="row">
                @foreach ($kegiatan as $data)
                <?php $foto = json_decode($data->foto); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-area">
                            <div class="blog-img">
                                <a href="/BKK/detail-kegiatan-bkk">
                                    {{-- <img src="../assets/img/workshop.jpg" alt="blog image"> --}}
                                    <img src="{{ asset("assets/img/detailbkk/" . $foto[0] ) }}" alt="blog image">
                                </a>
                            </div>
                            <div class="blog-text">
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
                                <h4><a class="elipsiszak" href="/BKK/detail-kegiatan-bkk">{{$data->judul}}</a></h4>
                                <a href="/BKK/detail-kegiatan-bkk/{{$data->id}}" class="blog-btn">
                                    Read more
                                    <i class="icofont-rounded-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="/BKK/detail-kegiatan-bkk">
                                <img src="../assets/img/kegiatanbkk2.jpg" alt="blog image">
                            </a>
                        </div>

                        <div class="blog-text">
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
                            <h4><a class="elipsiszak" href="/BKK/detail-kegiatan-bkk">Implementasi Link and Match SMK
                                    Pusat Keunggulan – SMKN 1 Sukorejo</a></h4>
                            <a href="/BKK/detail-kegiatan-bkk" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="/BKK/detail-kegiatan-bkk">
                                <img src="../assets/img/kegiatanbkk3.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
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
                            <h4><a class="elipsiszak" href="/BKK/detail-kegiatan-bkk">Sosialisasi Penyesuaian Budaya
                                    Kerja dari PT. Astra Daihatsu</a></h4>
                            <a href="/BKK/detail-kegiatan-bkk" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="/BKK/detail-kegiatan-bkk">
                                <img src="../assets/img/kegiatanbkk4.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
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
                            <h4><a class="elipsiszak" href="/BKK/detail-kegiatan-bkk">Guru Tamu Kimia Industri dari PT.
                                    Mandiri Investama Sejati</a></h4>
                            <a href="/BKK/detail-kegiatan-bkk" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="/BKK/detail-kegiatan-bkk">
                                <img src="../assets/img/kegiatan-bkk/kegiatanbkk5.jpg" alt="blog image">
                            </a>
                        </div>

                        <div class="blog-text">
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
                            <h4><a href="/BKK/detail-kegiatan-bkk">Strategi Menembus Dunia Kerja di Era Industri 4.0 –
                                    Bersama PT. Yanmar</a></h4>
                            <a href="/BKK/detail-kegiatan-bkk" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="/BKK/detail-kegiatan-bkk">
                                <img src="../assets/img/kegiatan-bkk/kegiatanbkk6.jpg" alt="blog image">
                            </a>
                        </div>

                        <div class="blog-text">
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
                            <h4><a href="/BKK/detail-kegiatan-bkk">Strategi Menembus Dunia Kerja di Era Industri 4.0 –
                                    Bersama PT. Panverta</a></h4>
                            <a href="/BKK/detail-kegiatan-bkk" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{ $kegiatan->links('vendor.pagination.bootstrap-4') }}
        </div>
    </div>
    @include('landingpage.layout.footer')


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    @include('landingpage.layout.js')
</body>

</html>
