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
                        <h2>Paskibra SMKN 1 sukorejo</h2>
                        <ul>
                            <li>
                                <a href="/">Beranda</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                <a href="/jurusan">Data</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Ekstra
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Detailekstra
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-details-area main-service-area pt-100 services-details-page">
        <div class="container">
            @foreach ($detailekstra as $data)


            <div class="row">
                <div class="col-lg-8">
                    <img src="{{ asset('fotoekstra/' . $data->foto) }}" alt="service">
                    <div class="service-details-post">
                        <h3>{{ $data->judul }}</h3>
                        <p>{!! $data->deskripsi !!}</p>

                    </div>
                    <div class="service-details-post">

                        <h3>Pembina</h3>
                        <div class="d-flex flex-row">
                            <div class="p-2"><img class="img-guru"
                                    src="{{ asset('fotoekstra/' . $data->foto_pembina) }}" style="height: 10pc" />
                            <b>{{ $data->nama }}</b>
                            </div>
                        </div>
                    </div>
@endforeach
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar">
                     @foreach($detailekstra as $foto)
                    <div class="team-section team-style-two team-style-three team-members pt-1000">
                        <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img class="img-detailekstra" src="{{ asset('foto_kegiatan/' . $foto->foto_kegiatan) }}"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-section team-style-two team-style-three team-members pt-1000">
                        <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img  src="../ekstra/detailpaskib2.jpeg"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-section team-style-two team-style-three team-members pt-1000">
                        <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img  src="../ekstra/detailpaskib3.jpeg"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="team-section team-style-two team-style-three team-members pt-1000">
                        <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img  src="../ekstra/detailpaskib4.jpeg"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>





    @include('landingpage.layout.footer')


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
@include('landingpage.layout.js')
</body>

</html>
