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
                        <h2>Struktur Organisasi BKK</h2>
                        <ul>
                            <li>
                                <a href="/">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Struktur Organisasi BKK</a>
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
                    {{-- <img src="foto/jurusan/RPL.JPG" alt="service"> --}}
                    <div class="service-details-post listitemzak">
                        <div class="blog-post-title">
                            <h3>
                                Struktur Organisasi Bursa Kerja Khusus
                            </h3>
                        </div>
                        <img class="mb-3" src="{{asset("assets/img/" . $data->foto_struktur)}}" alt="service">
                        {!! $data->isi_artikel !!}
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar border shadows mb-40px">
                    <div class="row">
                        <?php $id = 0 ?>
                        @foreach ($foto as $img)
                        <div class="col-sm-6 wrz-50 mt-3">
                            <div class="img-overlay">
                                {{-- <img class="h-12pc w-100" src="../assets/img/so/rudi.jpg" alt="Avatar" --}}
                                <img class="h-12pc w-100" src="{{asset("assets/img/so/" . $img )}}" alt="Avatar"
                                    class="img-overlay-image">
                                <div class="overlay">
                                    <div class="text">{{$nama[$id++]}}</div>
                                </div>
                            </div>
                        </div>
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

</html>
