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
                        <h2>Profil Sekolah</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-head text-center mt-5">
        <h2>Profil Sekolah<span>SMKN 3 SUKOREJO</span></h2>
    </div>
    <section class="why-us" style="
    height: 30pc;">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 p-0 h-100">
                    <div class="why-us-img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="why-us-text h-100 owl-carousel owl-theme" id="owl-demo">
                        @foreach ($data as $profil)
                        <div class="h-100 idenwarp">
                            <div class="row h-100">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Nama Sekolah:
                                            </p>
                                            <span class="card-title">{{$profil->nama_sekolah}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Nomor Pokok Sekolah Nasional (NPSN):
                                            </p>
                                            <span class="card-title">{{$profil->npsn}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Desa:
                                            </p>
                                            <span class="card-title">{{$profil->desa}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Kecamatan:
                                            </p>
                                            <span class="card-title">{{$profil->kecamatan}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($data as $profil)
                        <div class="h-100 idenwarp">
                            <div class="row h-100">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Daerah:
                                            </p>
                                            <span class="card-title">{{$profil->daerah}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Provinsi:
                                            </p>
                                            <span class="card-title">{{$profil->provinsi}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Kode Pos:
                                            </p>
                                            <span class="card-title">{{$profil->kode_pos}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Alamat:
                                            </p>
                                            <span class="card-title">{{$profil->alamat}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($data as $profil)
                        <div class="h-100 idenwarp">
                            <div class="row h-100">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                No Telepon:
                                            </p>
                                            <span class="card-title">{{$profil->no_telp}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Email:
                                            </p>
                                            <span class="card-title">{{$profil->email}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Kegiatan Pembelajaran:
                                            </p>
                                            <span class="card-title">{{$profil->kegiatan_pembelajaran}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Waktu Penyelenggaraan:
                                            </p>
                                            <span class="card-title">{{$profil->waktu_penyelenggaraan}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($data as $profil)
                        <div class="h-100 idenwarp">
                            <div class="row h-100">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Jarak ke pusat kecamatan:
                                            </p>
                                            <span class="card-title">{{$profil->jarak_ke_pusat_kecamatan}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Jarak ke pusat daerah:
                                            </p>
                                            <span class="card-title">{{$profil->jarak_ke_pusat_daerah}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Tahun Berdiri:
                                            </p>
                                            <span class="card-title">{{$profil->tahun_berdiri}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Penerbit SK:
                                            </p>
                                            <span class="card-title">{{$profil->penerbit_SK}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($data as $profil)
                        <div class="h-100 idenwarp">
                            <div class="row h-100">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                SK pendirian sekolah:
                                            </p>
                                            <span class="card-title">{{$profil->sk_pendirian_sekolah}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Status Sekolah:
                                            </p>
                                            <span class="card-title">{{$profil->status_sekolah}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @foreach ($data as $profil)
                        <div class="h-100 idenwarp">
                            <div class="row h-100">
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Sumber Listrik:
                                            </p>
                                            <span class="card-title">{{$profil->sumber_listrik}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Akses Internet:
                                            </p>
                                            <span class="card-title">{{$profil->akses_internet}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Kurikulum:
                                            </p>
                                            <span class="card-title">{{$profil->kurikulum}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 d-flex align-items-center">
                                    <div class="basic-card basic-card-light d-flex align-items-center">
                                        <div class="card-content">
                                            <p class="card-text">
                                                Status Bos:
                                            </p>
                                            <span class="card-title">{{$profil->status_bos}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
    </section>
    @include('landingpage.layout.footer')

    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
    @include('landingpage.layout.corejs')
    <script>
        $(document).ready(function() {
            $("#owl-demo").owlCarousel({
                navigation: true,
                items: 1,
                loop: true,
                nav: true,
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
            });
        });
        $(document).ready(function() {
            $('.owl-stage-outer, .owl-stage, .owl-item').addClass('h-100')
            $('.owl-dots').addClass('owltik')
        })
    </script>
</body>

<!-- Mirrored from previewthemes.com/enzio/home-1 by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 03:25:34 GMT -->

</html>
