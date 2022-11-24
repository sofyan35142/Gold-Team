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
                                <a href="/">Bursa Kerja Khusus</a>
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
                                    Bursa Kerja Khusus
                                </h3>
                            </div>
                            <h5 class="text-center">Motto Dan Logo<br> Bursa Kerja Khusus</h5>
                            <img class="img-logo rounded mx-auto d-block" src="../assets/img/bkk/logobkk.png" alt="service">
                            {{-- $data bkk --}}
                            <strong>MAKNA LOGO :</strong>
                            <ol>
                                <li>Gambar gigi roda berwarna biru melambangkan hubungan kerjasama antara BKK dengan
                                    IDUKA, Management sekolah, alumni dan instansi terkait yang penuh energi, kuat dan
                                    semangat</li>
                                <li>
                                    Gambar siswa meraih bintang melambangkan upaya BKK dalam mewujudkan mimpi Penerus
                                    Negeri yang berbudi luhur dan bertakwa kepada Tuhan Yang Maha Esa
                                </li>
                                <li>
                                    Gambar bola dunia berwarna orange melambangkan bahwa lulusan memiliki daya saing
                                    tinggi di era revolusi industri 4.0
                                </li>
                            </ol>
                            {{-- end data bkk --}}
                            <h5 class="text-center">Gedung dan Ruang Kerja<br>Tim Bursa Kerja Khusus (BKK)</h5>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <img class="w-100" src="../assets/img/bkk/gedungbkk1.png" alt="service">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <img class="w-100" src="../assets/img/bkk/gedungbkk2.png" alt="service">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <img class="w-100" src="../assets/img/bkk/gedungbkk3.png" alt="service">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar">
                    <div class="service-details-post">
                        <img src="../assets/img/bkk/bkk.jpg" alt="logo lsp">
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
