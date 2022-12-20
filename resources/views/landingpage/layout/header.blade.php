<div class="header-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
                <div class="header-widget">
                    <ul>
                        <li>
                            <i class="icofont-clock-time"></i>
                            Sen - Sab : 06:45 - 12:00
                        </li>
                        <li>
                            <i class="icofont-location-pin"></i>
                            Jl. Sumbergareng, Krajan, Sukorejo.
                        </li>
                        <li>
                            <i class="icofont-phone"></i>
                            <a href="tel:+880123456789"> (0343) 7727315 </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="header-social text-end">
                    <ul>
                         @foreach ($sosmed as $sos)
                             <li>
                                <a href="{{$sos->link}}"><i class="{{$sos->script_logo}}"></i></a>
                            </li>   
                         @endforeach
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-area">
    <div class="mobile-nav">
        <a href="index.html" class="logo">
            <img src="http://127.0.0.1:8000/assets/img/logo.png" class="main-logo" alt="logo" />
            <img src="http://127.0.0.1:8000/assets/img/logo-2.png" class="white-logo" alt="logo" />
        </a>
    </div>
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html">
                    <img src="http://127.0.0.1:8000/foto/header1.png"
                        class="main-logo" alt="logo" />
                    <img src="http://127.0.0.1:8000/assets/img/logo-2.png" class="white-logo" alt="logo" />
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="/profil" class="nav-link dropdown-toggle">
                                Profil
                                <i class="icofont-rounded-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/profil/visimisi" class="nav-link active">Visi Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/profil/strukturorganisasi" class="nav-link">Struktur Organisasi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/profil/sejarahsingkat" class="nav-link">Sejarah Singkat</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/profil/sekolahadiwiyata" class="nav-link">Sekolah Adiwiyata</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/profil/sekolahrujukan" class="nav-link">Sekolah Rujukan</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/jurusan" class="nav-link dropdown-toggle">
                                Jurusan
                                <i class="icofont-rounded-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/detailjurusan/1" class="nav-link">Teknik Kendaraan Ringan (TKR) </a>

                                    <ul class="dropdown-menu dropside">
                                        <li class="nav-item"><a
                                                href="/detailmodul/1">Modul
                                                Produktif TKR</a></li>
                                        <li class="nav-item"><a
                                                href="/reparasibengkel">Buku
                                                Pedoman Reparasi Bengkel TKR</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/detailjurusan/2" class="nav-link">Teknik Elektronika Industri (TEI)</a>
                                    <ul class="dropdown-menu dropside">
                                        <li class="nav-item"><a
                                                href="/detailmodul/2">Modul
                                                Produktif TEI</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/detailjurusan/3" class="nav-link">Rekayasa Perangkat Lunak (RPL)</a>
                                    <ul class="dropdown-menu dropside">
                                        <li class="nav-item"><a
                                                href="/detailmodul/3">Modul
                                                Produktif RPL</a></li>
                                        <li class="nav-item"><a
                                                href="/artikelilmiah">Artikel
                                                Ilmiah</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/detailjurusan/4" class="nav-link">Teknik Kimia Industri (TKI)</a>
                                    <ul class="dropdown-menu dropside">
                                        <li class="nav-item"><a
                                                href="/detailmodul/4">Modul
                                                Produktif TKI</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="/detailjurusan/5" class="nav-link">Teknik Audio Video (TAV)</a>
                                    <ul class="dropdown-menu dropside">
                                        <li class="nav-item"><a
                                                href="/detailmodul/5">Modul
                                                Produktif TAV</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Data
                                <i class="icofont-rounded-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/guruu" class="nav-link">DATA GURU & KARYAWAN</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/data/dharmaa" class="nav-link">DHARMA WANITA PERSATUAN</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/data/datawalas" class="nav-link">DATA SISWA</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/data/ekstraa" class="nav-link">EKSTRAKURIKULER</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/data/prestasi" class="nav-link">PRESTASI</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Bursa Kerja Khusus
                                <i class="icofont-rounded-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/BKK/visimisi-bkk" class="nav-link">Visi dan Misi BKK</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/BKK/strukturorganisasi-bkk" class="nav-link">Struktur Organisai BKK</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/BKK/kegiatan-bkk" class="nav-link">Kegiatan BKK</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/BKK/kewirausahaan-bkk" class="nav-link">Kewirausahaan Sketsu</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/BKK/lowongan-kerja" class="nav-link">Lowongan Kerja</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/BKK/bimbingan-karir" class="nav-link">Bimbingan Karir</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/BKK/perusahaan-mitra" class="nav-link">Perusahaan Karir</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/llsp" class="nav-link dropdown-toggle">
                                LSP
                                <i class="icofont-rounded-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/visimisilsp" class="nav-link">Visi Dan Misi LSP</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/skematerlisensi" class="nav-link">Skema Terlisensi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/tempatujikom" class="nav-link">Tempat Uji Kompetensi</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/jmlpemegangsertifikat" class="nav-link">Jumlah Pemegang Sertifikat</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link dropdown-toggle">
                                Alumni
                                <i class="icofont-rounded-right"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/alumni/testimoni" class="nav-link">Testimoni Alumni</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/alumni/profilealumni" class="nav-link">Profil Alumni</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    {{-- <div class="navbar-button">
                        <a href="testimonial.html">Get Quote</a>
                    </div> --}}
                </div>
            </nav>
        </div>
    </div>
</div>
