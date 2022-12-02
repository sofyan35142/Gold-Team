<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from templates.hibootstrap.com/viscous/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:33:31 GMT -->

<!-- Mirrored from previewthemes.com/enzio/home-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 03:25:34 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
                        <h2>Sekolah Adiwiyata</h2>
                        <ul>
                            <li>
                                <a href="/">Profil</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Sekolah Adiwiyata</a>
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
                    <div class="blog-details-post">
                        <div class="blog-post-title">
                            <h3>
                                {{$adiwiyata->judul}}
                            </h3>
                        </div>
                        <img src="{{asset('/assets/img/' . $adiwiyata->foto_adiwiyata)}}" alt="service">
                        {!! $adiwiyata->deskripsi !!}
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar scrollblg">
                    <div class="blog-area p-10px">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="../assets/img/blog/1.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">How to cleanroom yourself</a></h4>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc
                                ut labore et dolore magna aliqua, sed do eiusmod.</p>
                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-area p-10px">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="../assets/img/blog/1.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">How to cleanroom yourself</a></h4>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc
                                ut labore et dolore magna aliqua, sed do eiusmod.</p>
                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-area p-10px">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="../assets/img/blog/1.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">How to cleanroom yourself</a></h4>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc
                                ut labore et dolore magna aliqua, sed do eiusmod.</p>
                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="blog-area p-10px">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="../assets/img/blog/1.png" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text">
                            <h4><a href="blog-details.html">How to cleanroom yourself</a></h4>
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
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor contratc
                                ut labore et dolore magna aliqua, sed do eiusmod.</p>
                            <a href="blog-details.html" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
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

<!-- Mirrored from previewthemes.com/enzio/home-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 03:25:34 GMT -->

</html>
