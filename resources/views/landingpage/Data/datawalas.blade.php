<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/viscous/default/team.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:12 GMT -->

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
                        <h2>Data Walas</h2>
                        <ul>
                            <li>
                                <a href="/data/datawalas">Data</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Walas
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
                @foreach ($data as $walas)
                <div class="col-lg-3 col-md-6">
                    <div class="team-card">
                        <div class="team-img">
                            <img class="imgguru" src="{{ asset('walas/' . $walas->foto) }}" alt="team member">
                            <div class="card">
                                <div class="content">
                                    <div class="front">
                                        <img class="imgguru" src="{{ asset('walas/' . $walas->foto) }}" alt="team member">
                                    </div>
                                    <div class="back" style="color: black;">
                                        Nama : {{ $walas->nama_walas }} <br>
                                        Kelas : {{ $walas->kelas }} <br>
                                        Laki-Laki : {{ $walas->laki_laki }} <br>
                                        Perempuan : {{ $walas->perempuan }} <br>
                                        Jumlah Siswa : {{ $walas->jumlah }} <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-text">
                            <h4>{{ $walas->nama_walas }}</h4>
                            <p>{{ $walas->kelas }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{ $dataa->links('vendor.pagination.bootstrap-4') }}
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
