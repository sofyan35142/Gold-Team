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
                        <h2>Buku Pedoman Reparasi Bengkel TKR</h2>
                        <ul>
                            <li>
                                <a href="/">Beranda</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Jurusan</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/tkr">Teknik Kendaraan Ringan</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Buku Pedoman Reparasi Bengkel TKR
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
                <div class="col-lg-8">
                    {{-- <img src="foto/jurusan/TKR.JPG" alt="service"> --}}
                    <div class="service-details-post">
                        <h3>Buku Pedoman Reparasi Bengkel TKR</h3>

                        <div class="table table-bordered">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td style="color: rgb(23, 3, 80); font-size: 20px;"><b>Nama Buku Pedoman</b>
                                        </td>
                                        <td style="color: rgb(23, 3, 80); font-size: 20px;"><b>Aksi</b></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="color: black;">New Step 1 Toyota</td>
                                        <td style="color: black;"><a
                                                href="https://smkn1sukorejo.sch.id/wp-content/uploads/2020/08/New-Step-1-Toyota.pdf"><img
                                                    class="img-key"
                                                    src="https://smkn1sukorejo.sch.id/wp-content/uploads/2020/08/54110747-stock-vector-manual-book-user-manual-icon-owner-s-manual-flat-vector-illustration-information-icon-with-a-spanner.jpg"
                                                    width="10px" /> Download</a></td>
                                    </tr>
                                    <tr>
                                        <td style="color: black;">Toyota Seri 5-K</td>
                                        <td style="color: black;"><a
                                                href="https://smkn1sukorejo.sch.id/wp-content/uploads/2020/08/Toyota-Seri-5-K.pdf"><img
                                                    class="img-key"
                                                    src="https://smkn1sukorejo.sch.id/wp-content/uploads/2020/08/54110747-stock-vector-manual-book-user-manual-icon-owner-s-manual-flat-vector-illustration-information-icon-with-a-spanner.jpg"
                                                    width="75px" /> Download</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                    </div>
                    {{-- <div class="page-button">
<div class="row">
<div class="col-md-3 col-sm-6">
<div class="theme-button">
<a href="#" class="default-btn">
<i class="icofont-rounded-left"></i>
Previous
</a>
</div>
</div>
<div class="col-md-3 col-sm-6 offset-md-6">
<div class="theme-button">
<a href="#" class="default-btn">
Next
<i class="icofont-rounded-right"></i>
</a>
</div>
</div> --}}
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
                    <p>Categories</p>
                    <ul>
                        <li>
                            <a href="#">
                                Toilet Cleaning
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Stay Hygienic
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                News
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Cleaning Floor
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Cleaning Kitchen
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Wash Home
                                <i class="icofont-rounded-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="ratio ratio-16x9">
                            <iframe
                                src="https://www.youtube.com/embed/cxtGfQh188A?feature=oembed&amp;start&amp;end&amp;wmode=opaque&amp;loop=0&amp;controls=1&amp;mute=0&amp;rel=0&amp;modestbranding=0"
                                title="YouTube video" allowfullscreen></iframe>
                        </div> --}}
                <div class="discount-shapes">

                </div>
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

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../assets/js/jquery.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/owl.carousel.min.js"></script>

    <script src="../assets/js/slick.min.js"></script>

    <script src="../assets/js/jquery.magnific-popup.min.js"></script>

    <script src="../assets/js/meanmenu.js"></script>

    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="../assets/js/form-validator.min.js"></script>

    <script src="../assets/js/contact-form-script.js"></script>

    <script src="../assets/js/custom.js"></script>
</body>

</html>
