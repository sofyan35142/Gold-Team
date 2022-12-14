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
                        <h2>Perusahaan Mitra</h2>
                        <ul>
                            <li>
                                <a href="/BKK">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Perusahaan Mitra
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pricing-section pt-100 pb-70 main-blog-post">
        <div class="container">
            <div class="section-head m-0 mw-100 mb-3">
                <h2 class="text-start">Perusaaan <span>Mitra</span></h2>
                <p>Saran dan masukan dari IDUKA sangat kami perlukan dalam upaya peningkatan kinerja Tim BKK dan
                    kompetensi Lulusan, maka dari itu besar harapan kami agar para IDUKA bersedia mengisi link dibawah
                    ini sebagai bahan evaluasi kami.</p>
                <p><a href="https://docs.google.com/forms/d/e/1FAIpQLSdRLKbuD0fu1X-D8wLRITYM0cbjuv7cKDmxc3IgI7dWolthdg/viewform"
                        class="btn btn-primary">
                        Link Kepuasan Pelanggan
                    </a></p>
            </div>
            <div class="row mb-3">
                <h3 class="text-center">DAFTAR MOU NAMA PERUSAHAAN MITRA
                    SMKN 1 SUKOREJO</h3>
                @forelse ($data as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="price-card-area">
                            <div class="price-head-text">
                                <h5 class="text-white">{{ $row->dudi }}</h5>
                            </div>
                            <div class="plan-features pl-1">
                                <ul>
                                    <li>
                                        Alamat : {{ $row->alamat }}
                                    </li>
                                    <li>
                                        Nomor : {{ $row->nomor }}
                                    </li>
                                    <li>
                                        Masa Berlaku (tahun) : {{ $row->masa_berlaku }} tahun
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
            <div class="row mb-3">
                <h3 class="text-center">DAFTAR MOU NAMA UMKM PASANGAN
                    SMKN 1 SUKOREJO</h3>
                @foreach ($data2 as $row)
                    <div class="col-lg-4 col-md-6">
                        <div class="price-card-area">
                            <div class="price-head-text">
                                <h5 class="text-white">{{ $row->nama_umkm }}</h5>
                            </div>
                            <div class="plan-features pl-1">
                                <ul>
                                    <li>
                                        Bidang UMKM : {{ $row->bidang }}
                                    </li>
                                    <li class="h-40">
                                        Alamat : {{ $row->alamat }}
                                    </li>
                                    <li>
                                        Pemilik : {{ $row->pemilik }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $data->links('vendor.pagination.bimbingan') }}
            <div class="service-details-post shadow cardkbkk">
                <h3>Ketua BKK</h3>
                <div class="d-flex flex-row">
                    <div class="p-2"><img class="img-guru"
                            src="https://smkn1sukorejo.sch.id/wp-content/uploads/2022/06/IMG_20200726_194531-Widya-Syabil.jpg">
                    </div>
                    <div class="p-2"><b>SITI JUWARIAH,S.Pd</b>
                        <p>NIP: 19681231 200801 2 082
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('landingpage.layout.footer')


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    @include('landingpage.layout.js')
</body>

</html>
