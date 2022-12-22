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
                        <h2>Sejarah Singkat</h2>
                        <ul>
                            <li>
                                <a href="/">Profil</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Sejarah Singkat</a>
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
                                {{$data->judul}}
                            </h3>
                        </div>
                        {!! $data->isi_artikel !!}
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar border shadows mb-40px py-3" style="height: 63pc;overflow:auto">
                    <h3 class="text-center">Gedung Sekolah</h3>
                    <div class="service-sidebar h-fc">
                        <img class="imgvisi mb-2 hovchange" data-imageb="../foto/header.JPG" src="../foto/header.JPG" alt="service">
                        <div class="border side-sejarah" style="height: 254px;
                        margin-bottom: 0.5rem;">
                            <h1>h</h1>
                        </div>
                        @foreach ($fotoside as $foto )
                        <img class="imgvisi mb-2" src="{{asset("assets/img/side sejarah/" . $foto)}}" alt="service">
                        @endforeach
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
