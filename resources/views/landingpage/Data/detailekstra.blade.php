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
                        <h2>EKSTRAKURIKULER</h2>
                        <ul>
                            <li>
                                <a href="#">Data</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Detail EKSTRAKURIKULER
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
                    <img src="{{ asset('fotoekstra/' . $detailekstra->foto) }}" alt="service">
                    <div class="service-details-post detail">
                        <h3>{{ $detailekstra->judul }}</h3>
                        <p>{!! $detailekstra->deskripsi !!}</p>
                    </div>
                    <div class="service-details-post">
                        <h3>Pembina</h3>
                        <div class="d-flex flex-row">
                            <div class="p-2"><img class="img-detailguru"
                                    src="{{ asset('fotoekstra/' . $detailekstra->foto_pembina) }}" />
                            <b>{{ $detailekstra->nama }}</b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 main-service-area blog-side-bar border shadows mb-40px py-3" style="height: 63pc;overflow:auto">
                    <div class="service-sidebar h-fc">
                        <center><h3><b>Foto Kegiatan</b></h3></center> <br>
                        {{-- <img class="imgvisi mb-2 hovchange" data-imageb="../foto/header.JPG" src="../foto/header.JPG" alt="service"> --}}
                        <div class="border side-sejarah" style="height: 254px;
                        margin-bottom: 0.5rem;">
                        </div>
                        @foreach ($foto as $fotok)
                        <img class="imgvisi mb-2" src="{{asset("foto_kegiatan/" . $fotok)}}" alt="service">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
                {{-- <div class="col-lg-4 main-service-area blog-side-bar"> --}}
                    {{-- <div class="team-section team-style-two team-style-three team-members pt-1000">
                       <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img class="img-detailekstra" src="{{ asset('foto_kegiatan/' . $fotok) }}"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="team-section team-style-two team-style-three team-members pt-1000">
                        <div class="service-sidebar">
                       <center> <b>Foto Kegiatan</b></center> <br>
                        <div class="team-card">
                            <div class="team-img">
                                <div class="row">
                                    <div class="container">
                                        <img  src="{{ asset('foto_kegiatan/' . $fotok) }}"
                                            alt="team member">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="team-section team-style-two team-style-three team-members pt-1000">
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
                    </div> --}}
                {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>





    @include('landingpage.layout.footer')


    <div class="top-btn">
        <i class="icofont-scroll-long-up"></i>
    </div>
@include('landingpage.layout.js')
</body>

</html>
