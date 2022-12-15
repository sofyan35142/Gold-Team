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
                        <h2>Visi Dan Misi BKK</h2>
                        <ul>
                            <li>
                                <a href="/">Bursa Kerja Khusus</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Visi Dan Misi BKK</a>
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
                                Visi Dan Misi BKK
                            </h3>
                        </div>
                        {{-- <img class="mb-3 w-100" src="" alt="service"> --}}
                        <h3>Visi :</h3>
                        {!! $datavisimisibkk->visi !!}
                        <h3>Misi :</h3>
                        {!! $datavisimisibkk->misi !!}
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar border shadows mb-40px h-fc py-3">
                    <div class="service-sidebar">
                        <h6>Ruangan BKK</h6>
                        {{-- <img class="imgvisi" src="../assets/img/ruangbkk.png" alt="service"> --}}
                        <img class="imgvisi" src="{{ asset('assets/img/' . $datavisimisibkk->ruanganbkk) }}"
                            alt="service">
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
    <script>
        let a = document.getElement("li");
        a[0].classList.add("mystyle");
        // $(document).ready(function() {
        //     $('.owl-stage-outer, .owl-stage, .owl-item').addClass('h-100')
        //     $('.owl-dots').addClass('owltik')
        // })
    </script>
</body>

</html>
