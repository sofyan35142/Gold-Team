<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:11 GMT -->

<head>
    @include('landingpage.layout.head')
</head>

<body>

    @include('landingpage.layout.header')


    <div class="blog-title blog-title-bg">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="blog-title-text">
                        <h2>Ekstrakurikuler</h2>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <i class="icofont-rounded-double-right"></i>
                                Ekstrakurikuler
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-post-top pt-100">
        <div class="container">
            <div class="row pb-65 align-items-center">
                <div class="col-lg-4 col-md-4">
                    <h2>Berita <span>Sketsu</span></h2>
                </div>

                <div class="col-lg-3 col-md-4">
                    <form>
                        <div class="categories text-end">
                            <div class="dropdown">
                                <select class="btn btn-secondary dropdown-toggle" name="kategori"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    {{-- Categories --}}
                                    <option value="">Semua</option>
                                    <i class="icofont-caret-down"></i>
                                    @foreach ($kategori as $k)
                                        <option class="dropdown-item" value="{{ $k->id }}">{{ $k->kategori }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4 col-md-4 offset-lg-1">
                    <div class="search-bar">
                        <div class="input-group">
                            <input name="judul" type="text" class="form-control" placeholder="Name"
                                value="{{ isset($_GET['judul']) ? $_GET['judul'] : '' }}">
                        </div>
                        <button>
                            <i class="icofont-search-1"></i>
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        {{-- <form class="form-inline my-2 my-lg-0">
            <div class="col-xl-6">
                <label class="mr-3 mb-0 d-none d-md-block">Kategori:
                    <select class="form-control" name="kategori">
                        <option value="">Semua</option>
                        @foreach ($kategori as $k)
                            <option value="{{ $k->id }}">{{ $k->kategori }}</option>
                        @endforeach
                    </select>
                </label>
            </div>
            <div class="col-xl-6">
                <input name="judul" type="text" class="form-control" placeholder="Name"
                    value="{{ isset($_GET['judul']) ? $_GET['judul'] : '' }}">
            </div>
            <button class="btn btn-primary" type="submit"
                style="border-radius: 50%; padding: 7px 11px; position: absolute; right: 0; top: 0;">
                <i class="flaticon-search"></i>
            </button>
            <button type="submit">
                <i class="icofont-search-1"></i>
            </button>
        </form> --}}

        <div class="main-blog-post">
            <div class="container">
                <div class="row">
                    @foreach ($dataa as $blog)
                        <div class="col-lg-4 col-md-6">


                            <div class="blog-area">


                                <div class="blog-img">
                                    <a href="#">
                                        <img class="imgg" src="{{ asset('blog/' . $blog->foto) }}" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-text yosopelipsis">
                                    <h4><a href="#">{{ $blog->judul }}</a></h4>
                                    <ul>
                                        <li>
                                            <i class="icofont-calendar"></i>
                                            {{ $blog->created_at }}
                                        </li>
                                        <li>
                                            <i class="icofont-ui-user"></i>
                                            <a href="#">{{ $blog->idblog->kategori }}</a>
                                        </li>
                                    </ul>
                                    <span class="overflow">{!! $blog->deskripsi !!}</span>
                                    <a href="/blogdetail/{{ $blog->id }}" class="blog-btn">
                                        Selengkapnya
                                        <i class="icofont-rounded-right"></i>
                                    </a>
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
        {{-- <script>
            window.onload = function() {
                crear_select();
            }

            function isMobileDevice() {
                return (typeof window.orientation !== "undefined") || (navigator.userAgent.indexOf('IEMobile') !== -1);
            };


            var li = new Array();

            function crear_select() {
                var div_cont_select = document.querySelectorAll("[data-mate-select='active']");
                var select_ = '';
                for (var e = 0; e < div_cont_select.length; e++) {
                    div_cont_select[e].setAttribute('data-indx-select', e);
                    div_cont_select[e].setAttribute('data-selec-open', 'false');
                    var ul_cont = document.querySelectorAll("[data-indx-select='" + e + "'] > .cont_list_select_mate > ul");
                    select_ = document.querySelectorAll("[data-indx-select='" + e + "'] >select")[0];
                    if (isMobileDevice()) {
                        select_.addEventListener('change', function() {
                            _select_option(select_.selectedIndex, e);
                        });
                    }
                    var select_optiones = select_.options;
                    document.querySelectorAll("[data-indx-select='" + e + "']  > .selecionado_opcion ")[0].setAttribute(
                        'data-n-select', e);
                    document.querySelectorAll("[data-indx-select='" + e + "']  > .icon_select_mate ")[0].setAttribute(
                        'data-n-select', e);
                    for (var i = 0; i < select_optiones.length; i++) {
                        li[i] = document.createElement('li');
                        if (select_optiones[i].selected == true || select_.value == select_optiones[i].innerHTML) {
                            li[i].className = 'active';
                            document.querySelector("[data-indx-select='" + e + "']  > .selecionado_opcion ").innerHTML =
                                select_optiones[i].innerHTML;
                        };
                        li[i].setAttribute('data-index', i);
                        li[i].setAttribute('data-selec-index', e);
                        // funcion click al selecionar
                        li[i].addEventListener('click', function() {
                            _select_option(this.getAttribute('data-index'), this.getAttribute('data-selec-index'));
                        });

                        li[i].innerHTML = select_optiones[i].innerHTML;
                        ul_cont[0].appendChild(li[i]);

                    }; // Fin For select_optiones
                }; // fin for divs_cont_select
            } // Fin Function



            var cont_slc = 0;

            function open_select(idx) {
                var idx1 = idx.getAttribute('data-n-select');
                var ul_cont_li = document.querySelectorAll("[data-indx-select='" + idx1 + "'] .cont_select_int > li");
                var hg = 0;
                var slect_open = document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].getAttribute(
                    'data-selec-open');
                var slect_element_open = document.querySelectorAll("[data-indx-select='" + idx1 + "'] select")[0];
                if (isMobileDevice()) {
                    if (window.document.createEvent) { // All
                        var evt = window.document.createEvent("MouseEvents");
                        evt.initMouseEvent("mousedown", false, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0,
                            null);
                        slect_element_open.dispatchEvent(evt);
                    } else if (slect_element_open.fireEvent) { // IE
                        slect_element_open.fireEvent("onmousedown");
                    } else {
                        slect_element_open.click();
                    }
                } else {


                    for (var i = 0; i < ul_cont_li.length; i++) {
                        hg += ul_cont_li[i].offsetHeight;
                    };
                    if (slect_open == 'false') {
                        document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].setAttribute('data-selec-open',
                            'true');
                        document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .cont_list_select_mate > ul")[0].style
                            .height = hg + "px";
                        document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .icon_select_mate")[0].style.transform =
                            'rotate(180deg)';
                    } else {
                        document.querySelectorAll("[data-indx-select='" + idx1 + "']")[0].setAttribute('data-selec-open',
                            'false');
                        document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .icon_select_mate")[0].style.transform =
                            'rotate(0deg)';
                        document.querySelectorAll("[data-indx-select='" + idx1 + "'] > .cont_list_select_mate > ul")[0].style
                            .height = "0px";
                    }
                }

            } // fin function open_select

            function salir_select(indx) {
                var select_ = document.querySelectorAll("[data-indx-select='" + indx + "'] > select")[0];
                document.querySelectorAll("[data-indx-select='" + indx + "'] > .cont_list_select_mate > ul")[0].style.height =
                    "0px";
                document.querySelector("[data-indx-select='" + indx + "'] > .icon_select_mate").style.transform =
                    'rotate(0deg)';
                document.querySelectorAll("[data-indx-select='" + indx + "']")[0].setAttribute('data-selec-open', 'false');
            }


            function _select_option(indx, selc) {
                if (isMobileDevice()) {
                    selc = selc - 1;
                }
                var select_ = document.querySelectorAll("[data-indx-select='" + selc + "'] > select")[0];

                var li_s = document.querySelectorAll("[data-indx-select='" + selc + "'] .cont_select_int > li");
                var p_act = document.querySelectorAll("[data-indx-select='" + selc + "'] > .selecionado_opcion")[0].innerHTML =
                    li_s[indx].innerHTML;
                var select_optiones = document.querySelectorAll("[data-indx-select='" + selc + "'] > select > option");
                for (var i = 0; i < li_s.length; i++) {
                    if (li_s[i].className == 'active') {
                        li_s[i].className = '';
                    };
                    li_s[indx].className = 'active';

                };
                select_optiones[indx].selected = true;
                select_.selectedIndex = indx;
                select_.onchange();
                salir_select(selc);
            }
        </script> --}}
</body>

<!-- Mirrored from templates.hibootstrap.com/viscous/default/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 02:34:11 GMT -->

</html>
