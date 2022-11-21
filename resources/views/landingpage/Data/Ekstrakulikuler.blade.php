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
                        <h2>Our Blogs</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Blogs
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
                    <h2>EKSTRAKURIKULER SKETSU</h2>
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
                 @foreach ($data as $ekstra)
                <div class="col-lg-4 col-md-6">


                    <div class="blog-area">


                        <div class="blog-img">
                            <a href="#">
                                <img class="imgg" src="{{ asset('fotoekstra/' . $ekstra->foto) }}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text yosopelipsis" >
                            <h4><a href="#">{{ $ekstra->judul }}</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">{{ $ekstra->nama }}</a>
                                </li>
                            </ul>
                            {!! $ekstra->deskripsi !!}
                            <a href="#" class="blog-btn">
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
                                <img class="imgg" src="../ekstra/paskib.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="/ekstradetail">PASKIBRA</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">M. Chaiyi</a>
                                </li>
                            </ul>
                            <p class="overflow">PASKIBRA atau Pasukan Pengibar Bendera merupakan pasukan yang memiliki
                                tugas utama untuk mengibarkan bendera namun PASKIBRA hanya dalam tingkatan sekolah atau
                                berbentuk sebuah ekstrakurikuler sekolah sedangkan PASKIBRAKA merupakan Pasukan Pengibar
                                duplikat Bendera Pusaka biasanya PASKIBRAKA digunakan pada saat upacara peringatan
                                proklamasi Kemerdekaan Indonesia.</p>
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
                                <img class="imgg" src="../ekstra/pmr.jpg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#">PMR</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">Dewi Indriyani</a>
                                </li>
                            </ul>
                            <p class="overflow">Palang Merah Remaja atau PMR adalah suatu organisasi binaan dari Palang
                                Merah Indonesia yang berpusat di sekolah-sekolah ataupun kelompok-kelompok masyarakat
                                (sanggar, kelompok belajar, dll.) yang bertujuan membangun dan mengembangkan karakter
                                Kepalangmerahan agar siap menjadi Relawan PMI pada masa depan.</p>
                            <a href="#" class="blog-btn">
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
                                <img class="imgg" src="../ekstra/banjar.jpeg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#">Al Banjari</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">M. Zuhal Munzif</a>
                                </li>
                            </ul>
                            <p class="overflow"> Al-Banjari adalah pelopor pengajaran Hukum Islam di Kalimantan Selatan.
                                Sekembalinya ke kampung halaman dari Mekkah, hal pertama yang dikerjakannya ialah
                                membuka tempat pengajian (semacam pesantren) bernama Dalam Pagar, yang kemudian
                                lama-kelamaan menjadi sebuah kampung yang ramai tempat menuntut ilmu agama Islam.</p>
                            <a href="#" class="blog-btn">
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
                                <img class="imgg" src="../ekstra/silat.jpeg" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#">Pencak Silat</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">Andre Omega</a>
                                </li>
                            </ul>
                            <p class="overflow"> Pencak silat atau dikenal silat adalah suatu seni bela diri tradisional
                                Indonesia yang memperhatikan seni keindahan gerakan dalam setiap jurusnya. Tiap-tiap
                                daerah di Indonesia mempunyai aliran pencak silat yang khas.

                                Seni bela diri ini telah diakui oleh UNESCO sebagai warisan budaya Nusantara. Meski
                                demikian, pencak silat juga dapat dijumpai di berbagai negara Asia, seperti di Malaysia,
                                Brunei, Filipina, Singapura, hingga Thailand bagian selatan</p>
                            <a href="#" class="blog-btn">
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
                                <img class="imgg" src="../ekstra/voli.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="#">Bola Volly</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">Handoko</a>
                                </li>
                            </ul>
                            <p class="overflow">Permainan bola voli termasuk salah satu contoh dari cabang olahraga
                                bola besar. Bisa dikatakan, permainan ini masuk ke dalam kategori pertandingan karena
                                melibatkan dua tim yang saling berhadapan untuk mendapatkan hasil pertandingan.

                                Cara memainkan bola voli adalah dengan memukul bola agar melewati bagian atas net yang
                                ada di tengah lapangan. Agar mendapatkan skor, para pemain dalam satu tim harus
                                mengarahkan bola ke area lawan, sehingga bola terjatuh di daerah pertahanan lawan.</p>
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
