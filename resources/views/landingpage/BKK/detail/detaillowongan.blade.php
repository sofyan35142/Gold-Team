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
                        <h2>Lowongan Kerja</h2>
                        <ul>
                            <li>
                                <a href="/#">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/#">Lowongan Kerja</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/#">Lowongan Kerja INDOMARET</a>
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
                <div class="col-lg-12">
                    <img class="w-100" src="../assets/img/lowongankerja/lowongan5.jpg" alt="service">
                    <div class="blog-details-post">
                        <div class="blog-post-title">
                            <h3>
                                LOWONGAN KERJA INDOMARET
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
                        <p>Kabar gembira bagi para pencari ker#ja. PT Indomarco Prismatama, beroperasi sebagai Indomaret, adalah jaringan pengecer waralaba di Indonesia. Kembali membuka kesempatan kerja untuk lulusanSMK.</p>

                        <p>Bagi alumni SMK Negeri 1 Sukorejo yang berminat dapat segera mendaftarkan diri   <a href="#">DISINI.</a> Berkas lamaran kerja dikumpulkan di Ruang BKK SMKN 1 Sukorejo paling akhir tanggal 19 Agustus 2022 Pukul 09.00 WIB</p>
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
