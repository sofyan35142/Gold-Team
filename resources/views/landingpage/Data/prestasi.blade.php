<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:11 GMT -->

<head>
    @include('landingpage.layout.head')
</head>

<body>

    @include('landingpage.layout.header')


    <div class="blog-title blog-title-bg">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="blog-title-text">
                        <h2>Prestasi</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Prestasi
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-post-top pt-100">
        <div class="container">
            <div class="row pb-65 align-items-right">
                <div class="col-lg-4 col-md-4">
                    <h2>PRESTASI SKETSU</h2>
                </div>
                <div class="col-lg-4 col-md-4 offset-lg-1">
                    <div class="search-bar">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search|">
                            </div>
                        </form>
                        <button>
                            <i class="icofont-search-1"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-blog-post">
        <div class="container">
            <div class="row">
                @foreach ($prestasi as $prestasi)
                <div class="col-lg-4 col-md-6">



                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="/prestasidetail/{{ $prestasi->id }}">
                                <img class="imgg" src="{{ asset('prestasi/' . $prestasi->foto) }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="/prestasidetail/{{ $prestasi->id }}">{{ $prestasi->nama_lomba }}</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">{{ $prestasi->nama_pemenang }}</a>
                                </li>
                            </ul>
                            <p class="overflow">{!! $prestasi->deskripsi !!}</p>
                            <a href="/prestasidetail/{{ $prestasi->id }}" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="/ekstradetail">
                                <img class="imgg" src="../prestasi/voli.jpeg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="/ekstradetail">Volly (YUDHARTA CHAMPIONSHIP)</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">SHOFIATUL FITRIYAH</a>
                                </li>
                            </ul>
                            <p class="overflow">Sketsu kembali menorehkan prestasi di tingkat
                                            Nasional.
                                            Prestasi kali ini sangat membanggakan karena Sketsu berhasil memborong
                                            juara 1, 2 & 3 bidang lomba desain UI pada Irestech Fun Competition yang
                                            diselenggarakan oleh Universitas Brawijaya . Berikut adalah daftar nama
                                            siswa yang berhasi meraih prestasi tersebut Juara 1 diraih oleh ananda
                                            Ruqul.</p>
                            <a href="/ekstradetail" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img">
                            <a href="#">
                                <img class="imgg" src="../prestasi/silat.jpeg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#">Pencak Silat Jatim</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">Salsa Oktaviani Dkk</a>
                                </li>
                            </ul>
                            <p class="overflow">Sketsu kembali menorehkan prestasi di tingkat
                                            Nasional.
                                            Prestasi kali ini sangat membanggakan karena Sketsu berhasil memborong
                                            juara 1, 2 & 3 bidang lomba desain UI pada Irestech Fun Competition yang
                                            diselenggarakan oleh Universitas Brawijaya . Berikut adalah daftar nama
                                            siswa yang berhasi meraih prestasi tersebut Juara 1 diraih oleh ananda
                                            Ruqul.</p>
                            <a href="#" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
            <nav>
                <ul class="pagination  justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="icofont-rounded-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link active" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    @include('landingpage.layout.footer')

    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    @include('landingpage.layout.js')
</body>

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:11 GMT -->

</html>
