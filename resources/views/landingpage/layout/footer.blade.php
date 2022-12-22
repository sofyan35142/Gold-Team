
<div class="logo-slider mb-4 mt-4">
    <center><h1><b>KERJASAMA</b></h1></center>
    <div class="logo-slide-track">
        @foreach ($sponsor as $kerjasama)
        <div class="slideyosop">
            <img height="100px" width="100px" src="{{ asset('sponsor/' . $kerjasama->foto) }}"
            alt="" />
        </div>
        @endforeach
    </div>
</div>

<footer class="footer-area footer-style-two pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <div class="logo">
                        <a href="index.html">
                            <img src="https://127.0.0.1:8000/foto/footer.png" alt="logo">
                        </a>
                    </div>
                    {{-- <p>Lorem ipsum dolor sit amet, tur adipiscing elit, sed do eiusmod tempor contratc.</p> --}}
                    <div class="email">
                        <form class="newsletter-form" data-bs-toggle="validator">
                            <input type="email" class="form-control" placeholder="Enter Your Email" name="EMAIL"
                                required autocomplete="off">
                            <button class="default-btn electronics-btn" type="submit">
                                <i class="icofont-location-arrow"></i>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget pl-40">
                    <h3>Menu</h3>
                    <ul>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="/">Beranda</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="/profil">Tentang Kami</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="/jurusan">Profil Jurusan </a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSexD6fbqWjwBFmWGlba5YDwJvEUa5G1YURe5h58jqNfPWmeuw/viewform">Layanan Orang Tua </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget pl-40">
                    <h3>Kategori</h3>
                    <ul>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="/data/ekstraa">Ekstrakurikuler</a>
                        </li>

                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="/BKK/kegiatan-bkk">Kegiatan BKK</a>
                        </li>

                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="/BKK/lowongan-kerja">Lowongan Kerja</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="/alumni/testimoni">Testimoni Alumni</a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-widget">
                    <h3>Temukan Kami</h3>
                    {{-- <p class="find-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed</p> --}}
                    <ul class="find-us">
                        <li>
                            <i class="icofont-location-pin"></i>
                            Jl. Sumbergareng, Krajan, Sukorejo, Kec. Sukorejo, Pasuruan, Jawa Timur 67161
                        </li>
                        <li>
                            <i class="icofont-phone"></i>
                            <a href="tel:+88 0123 456 789">
                                (0343) 7727315
                            </a>
                        </li>
                        <li>
                            <i class="icofont-ui-message"></i>
                            <a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#30595e565f70465943535f45431e535f5d">
                                <span class="__cf_email__"
                                    data-cfemail="a7cec9c1c8e7d1ced4c4c8d2d489c4c8ca">smknsukorejo@yahoo.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-footer">
        <div class="container">
            <div class="row  align-items-center">
                <div class="col-lg-6">
                    <div class="footer-social">
                        <ul>
                            @foreach ($sosmed as $sos)
                             <li>
                                <a href="{{$sos->link}}"><i class="{{$sos->script_logo}}"></i></a>
                            </li>
                            @endforeach

                            {{-- <li>
                                <a href="#"><i class="icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                            </li> --}}
                            {{-- <li>
                                <a href="https://instagram.com/sketsu_bisa?igshid=YmMyMTA2M2Y="><i
                                        class="icofont-instagram"></i></a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="copyright-text text-end">
                        <p>&copy;2022 SMK Negeri 1 Sukorejo. By Good Team</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div style="display: none !important" class="elfsight-app-f3a706da-b581-4af7-9b10-e84b26128d4e"></div>
</footer>
