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
                        <h2>Lowongan Kerja</h2>
                        <ul>
                            <li>
                                <a href="/#">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/#">Lowongan Kerja</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/#">Lowongan Kerja INDOMARET</a>
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
                    <img class="w-100" src="{{ asset('assets/img/lowongankerja/' . $data->foto) }}" alt="service">
                    <div class="blog-details-post">
                        <div class="blog-post-title">
                            <h3>
                                {{ $data->judul }}
                            </h3>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    20 Feb 2021
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">Admin Sketsu</a>
                                </li>
                            </ul>
                        </div>
                        {!! $data->deskripsi !!}
                    </div>
                </div>
                {{-- sideright --}}
                <div class="col-lg-4 main-service-area blog-side-bar border shadows mb-40px h-fc py-3">
                    <div class="service-sidebar">
                        <label>Lowongan Kerja Terbaru</label>
                        <div class="sidebar-post-inner mt-2">
                        @foreach ($lowongan as $data)
                        <a style="margin-bottom: 15px">
                            <div class="image-widget-post">
                                <img class="img-detailblog" src="{{asset("assets/img/lowongankerja/" . $data->foto)}}"
                                    alt="">
                            </div>
                            <div class="info-widget-post">
                                <h5>{{$data->judul}}</h5>
                                <small>{{showdate($data->created_at, 'l, d F Y')}}</small>
                            </div>
                        </a>
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
    @include('landingpage.layout.js')
</body>

</html>
