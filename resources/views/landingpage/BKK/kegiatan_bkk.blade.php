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
                                <a href="/BKK">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Kegiatan BKK
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
