<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014'], Tue, 08 Nov 2022 02:34:11 GMT -->

<head>
    @include('landingpage.layout.head')
    {{-- <style>
        td{
            border: 1px solid black !important;
        }
        th{
            border: 1px solid black !important;
        }
    </style> --}}
</head>

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




    <div class="blog-title blog-title-bg bg-2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    {{-- <div class="blog-title-text">
                        <h2>Blog Details</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="blog.html">Blogs</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Blog Details
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>


    <div class="blog-details-area blog-details-page-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    {{-- <img src="assets/img/blog/7.png" alt="service"> --}}
                    <div class="blog-details-post">
                        <div class="blog-post-title">
                            <h3>
                                Data Prestasi
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
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <img class="card-img-top" src="../walas/hadi.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title" height="49px">IT SOFTWARE </h5>
                                        <div class="blog-post-title">
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
                                        <p class="card-text overflow ">Mokleters kembali menorehkan prestasi di tingkat
                                            Nasional.
                                            Prestasi kali ini sangat membanggakan karena mokleters berhasil memborong
                                            juara 1, 2 & 3 bidang lomba desain UI pada Irestech Fun Competition yang
                                            diselenggarakan oleh Universitas Brawijaya . Berikut adalah daftar nama
                                            siswa yang berhasi meraih prestasi tersebut Juara 1 diraih oleh ananda
                                            Ruqul...
                                        </p>
                                        <a href="blog-details.html" class="btn btn-primary">
                                            Read more
                                            <i class="icofont-rounded-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <img class="card-img-top" src="../walas/hadi.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">LKBB/PASKIBRA SMAN 1 KRAKSAAN</h5>
                                        <div class="blog-post-title">
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
                                        <p class="card-text overflow">Moklet kembali berprestasi!! Kali ini prestasi
                                            telah
                                            terukir di lomba yang sangat bergengsi untuk siswa siswi SMK yaitu Lomba
                                            Kompetensi Siswa Tingkat Jawa Timur. Dan gak tanggung - tanggung SMK Telkom
                                            Malang berhasil menjadi juara 1 di 3 bidang lomba sekaligus dan artinya kita
                                            akan lanjut ke tingkat nasional. Moklet goes to Nasional mewakili Jawa
                                            Timur. ...</p>
                                        <a href="#" class="btn btn-primary">Read More</a>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-button">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="theme-button">
                                    <a href="#" class="default-btn">
                                        <i class="icofont-rounded-left"></i>
                                        Previous Post
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3 offset-md-6">
                                <div class="theme-button">
                                    <a href="#" class="default-btn">
                                        Next Post
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar">
                    <div class="service-sidebar">
                        <form class="search-form">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button type="submit" class="btn btn-primary">
                                    <i class="icofont-search-1"></i>
                                </button>
                            </div>
                        </form>
                        <div class="service-list">
                            <p class="sidetitle">Instansi Terkait</p>
                            <ul>
                                <li class="hcard overflow-auto">
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Cabang Dinas Pendidikan Wilayah Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kementerian Pendidikan & Kebudayaan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Direktorat PSMK
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Dinas Pendidikan Jatim
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Pemerintah Kabupaten Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Dinas Ketenagakerjaan Kabupaten Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Sistem Informasi Inovasi Sekolah
                                    </a>
                                </li>
                            </ul>
                            <p class="sidetitle">Potensi Sekitar</p>
                            <ul>
                                <li class="hcard overflow-auto">
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kecamatan Sukorejo Kab.Pasuruan
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kaboki-Pionir Ekspor Tas Rajut
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Taman Safari Indonesia 2
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Saygon Waterpark
                                    </a>
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        Kebon Raya Purwodadi
                                    </a>
                                </li>
                            </ul>
                            <p class="sidetitle">Kategori</p>
                            <ul>
                                <li class="hcard overflow-auto border-0">
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Agenda Sekolah
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Artikel Guru
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Informasi Sekolah
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Kegiatan BKK
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Kegiatan Sekolah
                                    </a>
                                    <a class="colorori mb-2 effecthover-s" href="#">
                                        <i class="icofont-ui-folder iknrounded"></i>
                                        Lowongan Kerja
                                    </a>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="tags">
                            <p>Most Popular Tags</p>
                            <a href="#">Enjoy</a>
                            <a href="#">Clean</a>
                            <a href="#">Hygienic</a>
                            <a href="#">Time</a>
                            <a href="#">Brush</a>
                            <a href="#">Wash</a>
                            <a href="#">Call</a>
                        </div> --}}
                        <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/_3QdWBLnRlo?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"
                                title="YouTube video" allowfullscreen></iframe>
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

    @include('landingpage.layout.js')
</body>
{{-- <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script> --}}

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:12 GMT -->

</html>
