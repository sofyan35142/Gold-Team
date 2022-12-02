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
                <div class="col-lg-12">
                    {{-- <img src="foto/jurusan/TKR.JPG" alt="service"> --}}
                    
                        <h3 class="text-center mb-5 text-black">Buku Pedoman Reparasi Bengkel TKR</h3>
                        <div class="row justify-content-center">
                            @foreach ($data as $reparasi)
                                <div class="col-lg-4 col-md-6">
                                    <div class="team-section team-style-two team-style-three team-members pt-1000">
                                        <div class="team-card">
                                            <div class="team-img">
                                                <div class="row">
                                                    <div class="container">
                                                        <img src="{{ asset('foto/' . $reparasi->foto) }}"
                                                            alt="team member">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="team-text">
                                                <h4 class="h4-css">{{$reparasi->namabuku}}</h4>
                                                <p><a href="{{$reparasi->link}}">Lihat selengkapnya</a></p>
                                            </div>
                                        </div>
                                    </div>
                            
                                </div>
                            @endforeach
                        
                        {{-- <div class="col-lg-4 col-md-6">
                            <div class="team-section team-style-two team-style-three team-members pt-1000">
                                <div class="team-card">
                                    <div class="team-img">
                                        <div class="row">
                                            <div class="container">
                                                <img src="https://3.bp.blogspot.com/-dlkRB2pfZXs/V8U-w7xCFCI/AAAAAAAABjQ/O6ywuHewtpg7oJOEexbvcyrgA_gImHyAQCLcB/s1600/modul.jpg"
                                                    alt="team member">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-text">
                                        <h4 class="h4-css">Modul Produktif TAV</h4>
                                        <p><a href="/modulproduktiftav">Lihat selengkapnya</a></p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
