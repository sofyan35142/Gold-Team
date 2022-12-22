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
                                <a href="/BKK">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Lowongan Kerja
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-blog-post pt-100">
        <div class="container">
            <div class="row">
                @foreach ($data as $lowongan)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-area">
                        <div class="blog-img overimg">
                            <a href="/BKK/detail-lowongan/{{$lowongan->id}}">
                                <img src="{{asset('assets/img/lowongankerja/'. $lowongan->foto)}}" alt="blog image">
                            </a>
                        </div>
                        <div class="blog-text lowongan">
                            <h4 class="elipsisjudul"><a href="/BKK/detail-lowongan/{{$lowongan->id}}">{{$lowongan->judul}}</a></h4>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    {{showdate($lowongan->created_at,'d F Y')}}
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">Admin Sketsu</a>
                                </li>
                            </ul>
                            <section style="height: 100px;
                            overflow: hidden;">
                                {!!$lowongan->deskripsi!!}
                            </section>
                            <a href="/BKK/detail-lowongan/{{$lowongan->id}}" class="blog-btn">
                                Read more
                                <i class="icofont-rounded-right"></i>
                            </a>
                            <small class="text-muted float-right">Status:<span
                                    class="<?php if ($lowongan->status == "masih ada") {
                                        echo("secondspan");
                                    }else {
                                        echo("dangerspan");
                                    } ?> badge">{{$lowongan->status}}</span></small>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{$data->links('vendor.pagination.bootstrap-4')}}
        </div>
    </div>
    @include('landingpage.layout.footer')


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    @include('landingpage.layout.js')
</body>

</html>
