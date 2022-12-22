<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:11 GMT -->

<head>
    @include('landingpage.layout.head')
</head>

<body>

@include('landingpage.layout.header')


    <div class="service-title service-title-bg bg-3">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="service-title-text">
                        <h2>PRESTASI</h2>
                        <ul>
                            <li>
                                <a href="#">DATA</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                DETAILPRESTASI
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
                                {{ $detailprestasi->nama_lomba }}
                            </h3>
                            <ul>
                                <li>
                                    <i class="icofont-calendar"></i>
                                    {{ $detailprestasi->created_at }}
                                </li>
                                <li>
                                    <i class="icofont-ui-user"></i>
                                    <a href="#">{{ $detailprestasi->nama_pemenang }}</a>
                                </li>
                            </ul>
                        </div>
                        <p>{!! $detailprestasi->deskripsi !!}</p>
                             <img src="{{ asset('prestasi/' . $detailprestasi->foto) }}" alt="service">
                    </div>
                    <div class="page-button">
                        <div class="row">
                            <div class="col-md-3">
                                @if ($min->id == $detailprestasi->id)
                                @else
                                <div class="theme-button">
                                    <a href="{{ URL::to( 'prestasidetail/' . $previous ) }}" class="default-btn">
                                        <i class="icofont-rounded-left"></i>
                                        Previous Post
                                    </a>
                                </div>
                                @endif
                            </div>
                            <div class="col-md-3 offset-md-6">
                                 @if ($max->id == $detailprestasi->id)
                                @else
                                <div class="theme-button">
                                    <a href="{{ URL::to( 'prestasidetail/' . $next ) }}" class="default-btn">
                                        Next Post
                                        <i class="icofont-rounded-right"></i>
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar">
                    <div class="service-sidebar">
                        <div class="service-list">
                            <p>Prestasi Terbaru</p>
                            @foreach ($prestasiside as $prestasi)
                            <div class="sidebar-post-inner">
                                <a href="/prestasidetail/{{ $prestasi->id }}" style="margin-bottom: 15px">
                                    <div class="image-widget-post">
                                        <img class="img-detailblog" src="{{ asset('prestasi/'. $prestasi->foto) }}" alt="">
                                    </div>
                                    <div class="info-widget-post">
                                        <h5>{{ $prestasi->nama_lomba }}</h5>
                                        <small>{{ $prestasi->created_at }}</small>
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
