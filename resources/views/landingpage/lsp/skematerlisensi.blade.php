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
                        <h2>Skema Terlisensi</h2>
                        <ul>
                            <li>
                                <a href="/">Beranda</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/lsp">LSP</a>
                            </li>

                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Skema Terlisensi
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
                        <h1>{{ $skema->judul }}</h1>
                        {!! $skema->deskripsi !!}



                    </div>


                </div>
                <div class="col-lg-4 main-service-area blog-side-bar">
                    <div class="service-details-post">
                        <h3>Witness Re Lisensi</h3>

                        <br />
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="foto/jurusan/TAV.JPG" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="foto/jurusan/TEI1.JPG" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="foto/jurusan/RPL.JPG" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        {{-- <img src="{{ asset('lsp/' . $skema->foto) }}"
                                            alt="logo lsp"> --}}
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

    {{-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    @include('landingpage.layout.js')    
    
</body>

</html>
