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
    <div class="service-title service-title-bg bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="service-title-text">
                        <h2>Struktur Organisasi</h2>
                        <ul>
                            <li>
                                <a href="/">Profil</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Struktur Organisasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-details-area blog-details-page-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-post">
                        <div class="blog-post-title text-center mb-5">
                            <h3>
                                STRUKTUR ORGANISASI
                            </h3>
                            <h4>{{ $data->judul }}</h4>
                            <h7>{{$data->tahun_ajaran}}</h7>
                        </div>
                        <img src="{{ asset('assets/img/' . $data->foto_struktur)}}" alt="service">
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar border shadows mb-40px">
                <h3 class="mt-3">Anggota Organisasi</h3>
                    <div class="row">
                        @foreach ($dataside as $side)
                        <div class="col-lg-6 mt-3">
                            <div class="img-overlay">
                                <img class="h-12pc w-100" src="{{asset('assets/img/so/' . $side->foto_struktur)}}" alt="Avatar" class="img-overlay-image">
                                <div class="overlay">
                                    <div class="text">{{$side->nama}}</div>
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

<!-- Mirrored from previewthemes.com/enzio/home-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 03:25:34 GMT -->

</html>
