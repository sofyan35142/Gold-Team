<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:11 GMT -->

<head>
    @include('landingpage.layout.head')
</head>

<body>

    @include('landingpage.layout.header')


    <div class="blog-title blog-title-bg bg-2">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="blog-title-text">
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
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-details-area blog-details-page-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @foreach ($data as $blog)


                    <div class="blog-details-post">
                        <div class="blog-post-title">
                            <h3>
                                {{ $blog->judul }}
                            </h3>

                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">{{ $blog->idblog->kategori }}</a>
                                </li>
                            </ul>

                            <img class="img-detail" src="{{ asset('blog/' . $blog->foto) }}" alt="service">
                        </div>
                        <p>{{ $blog->deskripsi }}</p>
                        <center>
                            <h3>Gallery</h3>
                        </center>
                        <div class="d-flex flex-row">
                            <div class="p-2"> <img src="../blog/detail2.png" alt=""> </div>
                            <div class="p-2"> <img src="../blog/detail3.png" alt=""> </div>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="p-2"> <img src="../blog/detail4.png" alt=""> </div>
                            <div class="p-2"> <img src="../blog/detail5.png" alt=""> </div>
                        </div>
                    </div>
                    @endforeach
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



                        <div class="service-list">

                            <p class="sidetitle">Kategori Berita</p>

                            <ul>

                                <li class="hcard overflow-auto">
                                     @foreach ($kategoriblog as $kategori)
                                    <a class="colorori mb-2" href="#">
                                        <i class="icofont-rounded-right iknrounded"></i>
                                        {{ $kategori->kategori }}
                                    </a>
                                     @endforeach
                                </li>
                            </ul>
                        </div>
                        <div class="service-list">
                            <p>Blog Terbaru</p>
                            @foreach( $blogside as $blogside)

                            <div class="sidebar-post-inner">
                                <a style="margin-bottom: 15px">
                                    <div class="image-widget-post">
                                        <img class="" src="{{ asset('blog/' . $blogside->foto) }}" alt="">
                                    </div>
                                    <div class="info-widget-post">
                                        <h5>{{ $blogside->judul }}</h5>
                                        <small>04 November 2022</small>
                                    </div>
                                </a>
                            </div>
                            @endforeach
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
</body>
@include('landingpage.layout.js')

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:12 GMT -->

</html>
