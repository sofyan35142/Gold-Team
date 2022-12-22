<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/viscous/default/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:12 GMT -->

<head>

    @include('landingpage.layout.head')
</head>

<body>

    @include('landingpage.layout.header')



    <div class="team-title team-title-bg">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="team-title-text">
                        <h2>Data Guru & Karyawan</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Data Guru
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-section team-style-two team-style-three team-members pt-100 pb-70">
        <div class="container">
            <div class="row">
                @foreach ($data as $guru)


                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img class="imgguru" src="{{ asset('guru/' . $guru->foto) }}" alt="team member">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img class="imgguru" src="{{ asset('guru/' . $guru->foto) }}" alt="team member">
                                    </div>
                                    <div class="back" style="color: black;">
                                        NIP : {{ $guru->nip }} <br>
                                        TEMPAT LAHIR : {{ $guru->tempat_lahir }} <br>
                                        TANGGAL LAHIR : {{ $guru->tgl_lahir }} <br>
                                        TMT AWAL : {{ $guru->tmt_awal }} <br>
                                        STATUS : {{ $guru->status }} <br>
                                       GOL. RUANGAN : {{ $guru->gol_ruangan }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-text">
                            <h4>{{ $guru->nama }}</h4>
                            <p>{{ $guru->jabatan }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            <nav>
                <ul class="pagination  justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                            <i class="icofont-rounded-left"></i>
                        </a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item" aria-current="page">
                        <a class="page-link active" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <i class="icofont-rounded-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    @include('landingpage.layout.footer')


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>

    @include('landingpage.layout.js')

</body>

<!-- Mirrored from templates.hibootstrap.com/viscous/default/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:13 GMT -->

</html>
