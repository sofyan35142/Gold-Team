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
                        <h2>Visi Dan Misi BKK</h2>
                        <ul>
                            <li>
                                <a href="/">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Visi Dan Misi BKK</a>
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
                <div class="col-lg-12">
                    {{-- <img src="foto/jurusan/RPL.JPG" alt="service"> --}}
                    <div class="service-details-post">
                        <div class="blog-post-title">
                            <h3>
                                Visi Dan Misi BKK
                            </h3>
                        </div>
                        <img class="mb-3 w-100" src="../assets/img/ruangbkk.png" alt="service">
                        <h3>Visi :</h3>
                        <ul>
                            <li class="listitemzak">Terwujudnya Tingkat Keterserapan Tamatan Yang Tinggi Baik Di Dunia
                                Industri Maupun Wirausaha.</li>
                        </ul>
                        <h3>Misi :</h3>
                        <ul>
                            <li class="listitemzak"><i class="icofont-rounded-right"></i>Mengadakan pelatihan softskill,
                                kesiapan kerja, dan enterpreneur serta finansial literasi baik dari pihak internal
                                maupun eksternal</li>
                            <li class="listitemzak"><i class="icofont-rounded-right"></i>Melakukan kerjasama yang
                                intensif dengan manajemen sekolah, BK, dan alumni.</li>
                            <li class="listitemzak"><i class="icofont-rounded-right"></i>Menjalin kerjasama yang baik
                                dengan IDUKA dan UMKM.</li>
                            <li class="listitemzak"><i class="icofont-rounded-right"></i>Melakukan maping rencana
                                peserta didik dan tracer study.</li>
                            <li class="listitemzak"><i class="icofont-rounded-right"></i>Menyediakan berbagai informasi
                                peluang kerja dan wirausaha melalui platform digital.</li>
                            <li class="listitemzak"><i class="icofont-rounded-right"></i>Menjalin komunikasi yang baik
                                dengan Dinas Tenaga Kerja, Dinas Perindustrian, BLK dan APINDO.</li>
                        </ul>
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
