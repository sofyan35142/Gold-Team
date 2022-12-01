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
                        <h2>Data DharmaWanita</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Data DharmaWanita
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--
    <div class="section over-hide">
        <div class="container">
            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section text-center py-5 py-md-0">
                        <input class="pricing" type="checkbox" id="pricing" name="pricing" />
                        <label for="pricing"><span class="block-diff">kayaking<span
                                    class="float-right">camping</span></span></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    <div class="pricing-wrap">
                                        <h4 class="mb-5">Kayaking</h4>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="pricing-wrap">
                                        <h4 class="mb-5">Camping</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}




    <div class="team-section team-style-two team-style-three team-members pt-100 pb-70">
        <div class="container">
            <div class="row">
                @foreach ($data as $dharma)
                <div class="col-lg-3 col-md-6">



                    <div class="carddharma">
                        <input type="checkbox" id="{{ $dharma->id }}" class="more">
                        <div class="content">
                            <div class="front">
                                <div class="team-card">
                                    <div class="team-img">
                                        <img class="imgguru" src="{{ asset('dharmawanita/' . $dharma->foto) }}" alt="team member">
                                        <div class="team-social">
                                            <label for="{{ $dharma->id }}" class="btn btn-dharma btn-lg btn-block w-100">Detail</label>
                                        </div>
                                    </div>
                                    <div class="team-text">
                                        <h4>{{ $dharma->nama }}</h4>
                                        <p>{{ $dharma->jabatan }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back">
                                <span style="color: black">
                               <b> NAMA : </b> {{ $dharma->nama }} <br>
                               <b> JABATAN : </b> {{ $dharma->jabatan }} <br>
                               <b> TEMPAT LAHIR : </b> {{ $dharma->tempat_lahir }} <br>
                               <b> TANGGAL LAHIR :</b> {{ $dharma->tgl_lahit }} <br>
                                <b> ALAMAT : </b> {{ $dharma->alamat }}
                                </span>
                                <label for="{{ $dharma->id }}" class="button return" aria-hidden="true">
                                    <i class="fas fa-arrow-left"></i>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
                 @endforeach
            </div>
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
