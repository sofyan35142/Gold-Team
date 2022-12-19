
<div class="logo-slider mb-4">
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
                            <img src="../foto/footer.png" alt="logo">
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
                    <h3>Pos-pos Terbaru</h3>
                    <ul>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="service-details.html">Peringatan Hari Guru</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="service-details.html">Branchmarking</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="service-details.html">Penemuan Lanjutan </a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="service-details.html">Penandatanganan MOU </a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="service-details.html">Lowongan Kerja BTPN</a>
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
                            <a href="index.html">Agenda Sekolah</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="about.html">Informasi Sekolah</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="blog.html">Kegiatan BKK</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="team.html">Kegiatan Sekolah</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="testimonial.html">Lowongan Kerja</a>
                        </li>
                        <li>
                            <i class="icofont-simple-right"></i>
                            <a href="testimonial.html">Artikel Guru</a>
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
                            <li>
                                <a href="https://www.facebook.com/pages/Smkn-1-Sukorejo/1644253285790355"><i
                                        class="icofont-facebook"></i></a>
                            </li>
                            {{-- <li>
                                <a href="#"><i class="icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                            </li> --}}
                            <li>
                                <a href="https://instagram.com/sketsu_bisa?igshid=YmMyMTA2M2Y="><i
                                        class="icofont-instagram"></i></a>
                            </li>
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
</footer>
