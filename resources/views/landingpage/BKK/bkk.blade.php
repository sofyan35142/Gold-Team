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
                        <h2>Bursa Kerja Khusus</h2>
                        <ul>
                            <li>
                                <a href="/BKK">Bursa Kerja Khusus</a>
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
                    <div class="service-details-post">
                        <div class="blog-details-post bkk-konten-container">
                            <div class="blog-post-title">
                                <h3>
                                    {{$data->judul}}
                                </h3>
                            </div>
                            <h5 class="text-center">{{$data->sub_judul1}}</h5>
                            <img class="img-logo rounded mx-auto d-block" src="{{ asset('foto/' . $data->foto1) }}" alt="service">
                            {{-- $data bkk --}}
                            {!! $data->deskripsi !!}
                            {{-- end data bkk --}}
                            <h5 class="text-center">{{$data->sub_judul2}}</h5>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <img class="w-100" src="{{ asset('foto/' . $data->foto2) }}" alt="service">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <img class="w-100" src="{{ asset('foto/' . $data->foto3) }}" alt="service">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <img class="w-100" src="{{ asset('foto/' . $data->foto4) }}" alt="service">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <img class="w-100" src="{{ asset('foto/' . $data->foto5) }}" alt="service">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar">
                    <div class="service-details-post">
                        <h4 class="h4-css">{{$data->judul}}</h4>
                        <img src="{{ asset('foto/' . $data->foto6) }}" alt="logo lsp">
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
