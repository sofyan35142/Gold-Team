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
                        <h2>Ekstrakurikuler</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Ekstrakurikuler
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
                                 <input name="judul" type="text" class="form-control" placeholder="Name"
                                value="{{ isset($_GET['judul']) ? $_GET['judul'] : '' }}">
                            </div>
                            <button>
                                <i class="icofont-search-1"></i>
                            </button>
                        </form>
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
                            <span class="overflow">{!! $ekstra->deskripsi !!}</span>
                            <a href="/ekstradetail/{{ $ekstra->id }}" class="blog-btn">
                                Selengkapnya
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>

                </div>
                 @endforeach
        </div>
         {{ $dataa->links('vendor.pagination.bootstrap-4') }}
    </div>



    @include('landingpage.layout.footer')

    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    @include('landingpage.layout.js')
</body>

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:11 GMT -->

</html>
