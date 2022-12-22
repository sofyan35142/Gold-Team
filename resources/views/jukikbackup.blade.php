<<<<<<< HEAD
<div class="col-sm-6 col-12">
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between" style="position: relative;">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar">
                                <span class="avatar-initial bg-label-primary rounded-circle"><i
                                        class="bx bx-user fs-4"></i></span>
                            </div>
                            <div class="card-info">
                                <h5 class="card-title mb-0 me-2">{{ $jurusan }}</h5>
                                <small class="text-muted">Jurusan</small>
                            </div>
                        </div>
                        <div id="conversationChart" style="min-height: 40px;">
                            <div id="apexchartstf7svucm"
                                class="apexcharts-canvas apexchartstf7svucm apexcharts-theme-light"
                                style="width: 41px; height: 40px;"><svg id="SvgjsSvg4706" width="41" height="40"
                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG4708" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(10, 5)">
                                        <defs id="SvgjsDefs4707">
                                            <clipPath id="gridRectMasktf7svucm">
                                                <rect id="SvgjsRect4714" width="28" height="33" x="-3.5"
                                                    y="-1.5" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <clipPath id="forecastMasktf7svucm">
                                            </clipPath>
                                            <clipPath id="nonForecastMasktf7svucm">
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMasktf7svucm">
                                                <rect id="SvgjsRect4715" width="25" height="34" x="-2"
                                                    y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                                </rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient4720" x1="0" y1="1"
                                                x2="1" y2="1">
                                                <stop id="SvgjsStop4721" stop-opacity="0"
                                                    stop-color="rgba(173,198,247,0)" offset="0"></stop>
                                                <stop id="SvgjsStop4722" stop-opacity="0.9"
                                                    stop-color="rgba(90,141,238,0.9)" offset="0.3"></stop>
                                                <stop id="SvgjsStop4723" stop-opacity="0.9"
                                                    stop-color="rgba(90,141,238,0.9)" offset="0.7"></stop>
                                                <stop id="SvgjsStop4724" stop-opacity="0"
                                                    stop-color="rgba(173,198,247,0)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine4713" x1="0" y1="0" x2="0"
                                            y2="30" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt"
                                            class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                            height="30" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                            stroke-width="1">
                                        </line>
                                        <g id="SvgjsG4726" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG4727" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, 2.75)"></g>
                                        </g>
                                        <g id="SvgjsG4735" class="apexcharts-grid">
                                            <g id="SvgjsG4736" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine4738" x1="0" y1="0"
                                                    x2="21" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4739" x1="0" y1="7.5"
                                                    x2="21" y2="7.5" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4740" x1="0" y1="15"
                                                    x2="21" y2="15" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4741" x1="0" y1="22.5"
                                                    x2="21" y2="22.5" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4742" x1="0" y1="30"
                                                    x2="21" y2="30" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                            </g>
                                            <g id="SvgjsG4737" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine4744" x1="0" y1="30" x2="21"
                                                y2="30" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine4743" x1="0" y1="1" x2="0"
                                                y2="30" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG4716" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG4717" class="apexcharts-series" seriesName="seriesx1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath4725"
                                                    d="M 0 17.5C 1.47 17.5 2.7300000000000004 5 4.2 5C 5.67 5 6.930000000000001 30 8.4 30C 9.870000000000001 30 11.13 15 12.600000000000001 15C 14.07 15 15.330000000000002 25 16.8 25C 18.27 25 19.53 22.5 21 22.5"
                                                    fill="none" fill-opacity="1"
                                                    stroke="url(#SvgjsLinearGradient4720)" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                    class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMasktf7svucm)"
                                                    pathTo="M 0 17.5C 1.47 17.5 2.7300000000000004 5 4.2 5C 5.67 5 6.930000000000001 30 8.4 30C 9.870000000000001 30 11.13 15 12.600000000000001 15C 14.07 15 15.330000000000002 25 16.8 25C 18.27 25 19.53 22.5 21 22.5"
                                                    pathFrom="M -1 30L -1 30L 4.2 30L 8.4 30L 12.600000000000001 30L 16.8 30L 21 30">
                                                </path>
                                                <g id="SvgjsG4718" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <g id="SvgjsG4719" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine4745" x1="0" y1="0" x2="21"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine4746" x1="0" y1="0" x2="21"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                        </line>
                                        <g id="SvgjsG4747" class="apexcharts-yaxis-annotations">
                                        </g>
                                        <g id="SvgjsG4748" class="apexcharts-xaxis-annotations">
                                        </g>
                                        <g id="SvgjsG4749" class="apexcharts-point-annotations">
                                        </g>
                                    </g>
                                    <rect id="SvgjsRect4712" width="0" height="0" x="0"
                                        y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                    </rect>
                                    <g id="SvgjsG4734" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-18, 0)"></g>
                                    <g id="SvgjsG4709" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 20px;"></div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 178px; height: 43px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between" style="position: relative;">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar">
                                <span class="avatar-initial bg-label-primary rounded-circle"><i
                                        class="bx bx-user fs-4"></i></span>
                            </div>
                            <div class="card-info">
                                <h5 class="card-title mb-0 me-2">$38,566</h5>
                                <small class="text-muted">Conversion</small>
                            </div>
                        </div>
                        <div id="conversationChart" style="min-height: 40px;">
                            <div id="apexchartstf7svucm"
                                class="apexcharts-canvas apexchartstf7svucm apexcharts-theme-light"
                                style="width: 41px; height: 40px;"><svg id="SvgjsSvg4706" width="41"
                                    height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG4708" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(10, 5)">
                                        <defs id="SvgjsDefs4707">
                                            <clipPath id="gridRectMasktf7svucm">
                                                <rect id="SvgjsRect4714" width="28" height="33"
                                                    x="-3.5" y="-1.5" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMasktf7svucm">
                                            </clipPath>
                                            <clipPath id="nonForecastMasktf7svucm">
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMasktf7svucm">
                                                <rect id="SvgjsRect4715" width="25" height="34"
                                                    x="-2" y="-2" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient4720" x1="0"
                                                y1="1" x2="1" y2="1">
                                                <stop id="SvgjsStop4721" stop-opacity="0"
                                                    stop-color="rgba(173,198,247,0)" offset="0"></stop>
                                                <stop id="SvgjsStop4722" stop-opacity="0.9"
                                                    stop-color="rgba(90,141,238,0.9)" offset="0.3"></stop>
                                                <stop id="SvgjsStop4723" stop-opacity="0.9"
                                                    stop-color="rgba(90,141,238,0.9)" offset="0.7"></stop>
                                                <stop id="SvgjsStop4724" stop-opacity="0"
                                                    stop-color="rgba(173,198,247,0)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine4713" x1="0" y1="0" x2="0"
                                            y2="30" stroke="#b6b6b6" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                            y="0" width="1" height="30" fill="#b1b9c4"
                                            filter="none" fill-opacity="0.9" stroke-width="1">
                                        </line>
                                        <g id="SvgjsG4726" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG4727" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, 2.75)"></g>
                                        </g>
                                        <g id="SvgjsG4735" class="apexcharts-grid">
                                            <g id="SvgjsG4736" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine4738" x1="0" y1="0"
                                                    x2="21" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4739" x1="0" y1="7.5"
                                                    x2="21" y2="7.5" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4740" x1="0" y1="15"
                                                    x2="21" y2="15" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4741" x1="0" y1="22.5"
                                                    x2="21" y2="22.5" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4742" x1="0" y1="30"
                                                    x2="21" y2="30" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                            </g>
                                            <g id="SvgjsG4737" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine4744" x1="0" y1="30" x2="21"
                                                y2="30" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine4743" x1="0" y1="1" x2="0"
                                                y2="30" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG4716" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG4717" class="apexcharts-series" seriesName="seriesx1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath4725"
                                                    d="M 0 17.5C 1.47 17.5 2.7300000000000004 5 4.2 5C 5.67 5 6.930000000000001 30 8.4 30C 9.870000000000001 30 11.13 15 12.600000000000001 15C 14.07 15 15.330000000000002 25 16.8 25C 18.27 25 19.53 22.5 21 22.5"
                                                    fill="none" fill-opacity="1"
                                                    stroke="url(#SvgjsLinearGradient4720)" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                    class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMasktf7svucm)"
                                                    pathTo="M 0 17.5C 1.47 17.5 2.7300000000000004 5 4.2 5C 5.67 5 6.930000000000001 30 8.4 30C 9.870000000000001 30 11.13 15 12.600000000000001 15C 14.07 15 15.330000000000002 25 16.8 25C 18.27 25 19.53 22.5 21 22.5"
                                                    pathFrom="M -1 30L -1 30L 4.2 30L 8.4 30L 12.600000000000001 30L 16.8 30L 21 30">
                                                </path>
                                                <g id="SvgjsG4718" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <g id="SvgjsG4719" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine4745" x1="0" y1="0" x2="21"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine4746" x1="0" y1="0" x2="21"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                        </line>
                                        <g id="SvgjsG4747" class="apexcharts-yaxis-annotations">
                                        </g>
                                        <g id="SvgjsG4748" class="apexcharts-xaxis-annotations">
                                        </g>
                                        <g id="SvgjsG4749" class="apexcharts-point-annotations">
                                        </g>
                                    </g>
                                    <rect id="SvgjsRect4712" width="0" height="0" x="0"
                                        y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                    </rect>
                                    <g id="SvgjsG4734" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-18, 0)"></g>
                                    <g id="SvgjsG4709" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 20px;"></div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 178px; height: 43px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between" style="position: relative;">
                        <div class="d-flex align-items-center gap-3">
                            <div class="avatar">
                                <span class="avatar-initial bg-label-warning rounded-circle"><i
                                        class="bx bx-dollar fs-4"></i></span>
                            </div>
                            <div class="card-info">
                                <h5 class="card-title mb-0 me-2">$53,659</h5>
                                <small class="text-muted">Income</small>
                            </div>
                        </div>
                        <div id="incomeChart" style="min-height: 40px;">
                            <div id="apexcharts5e03dtc6"
                                class="apexcharts-canvas apexcharts5e03dtc6 apexcharts-theme-light"
                                style="width: 42px; height: 40px;"><svg id="SvgjsSvg4750" width="42"
                                    height="40" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                    style="background: transparent;">
                                    <g id="SvgjsG4752" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(10, 10)">
                                        <defs id="SvgjsDefs4751">
                                            <clipPath id="gridRectMask5e03dtc6">
                                                <rect id="SvgjsRect4758" width="29" height="33"
                                                    x="-3.5" y="-1.5" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask5e03dtc6">
                                            </clipPath>
                                            <clipPath id="nonForecastMask5e03dtc6">
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMask5e03dtc6">
                                                <rect id="SvgjsRect4759" width="26" height="34"
                                                    x="-2" y="-2" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient4764" x1="0"
                                                y1="1" x2="1" y2="1">
                                                <stop id="SvgjsStop4765" stop-opacity="0"
                                                    stop-color="rgba(254,214,160,0)" offset="0"></stop>
                                                <stop id="SvgjsStop4766" stop-opacity="0.9"
                                                    stop-color="rgba(253,172,65,0.9)" offset="0.3"></stop>
                                                <stop id="SvgjsStop4767" stop-opacity="0.9"
                                                    stop-color="rgba(253,172,65,0.9)" offset="0.7"></stop>
                                                <stop id="SvgjsStop4768" stop-opacity="0"
                                                    stop-color="rgba(254,214,160,0)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <line id="SvgjsLine4757" x1="0" y1="0" x2="0"
                                            y2="30" stroke="#b6b6b6" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0"
                                            y="0" width="1" height="30" fill="#b1b9c4"
                                            filter="none" fill-opacity="0.9" stroke-width="1">
                                        </line>
                                        <g id="SvgjsG4770" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG4771" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, 2.75)"></g>
                                        </g>
                                        <g id="SvgjsG4779" class="apexcharts-grid">
                                            <g id="SvgjsG4780" class="apexcharts-gridlines-horizontal"
                                                style="display: none;">
                                                <line id="SvgjsLine4782" x1="0" y1="0"
                                                    x2="22" y2="0" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4783" x1="0" y1="4.285714285714286"
                                                    x2="22" y2="4.285714285714286" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4784" x1="0" y1="8.571428571428571"
                                                    x2="22" y2="8.571428571428571" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4785" x1="0" y1="12.857142857142858"
                                                    x2="22" y2="12.857142857142858" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4786" x1="0" y1="17.142857142857142"
                                                    x2="22" y2="17.142857142857142" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4787" x1="0" y1="21.428571428571427"
                                                    x2="22" y2="21.428571428571427" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4788" x1="0" y1="25.71428571428571"
                                                    x2="22" y2="25.71428571428571" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                                <line id="SvgjsLine4789" x1="0" y1="29.999999999999996"
                                                    x2="22" y2="29.999999999999996" stroke="#e0e0e0"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-gridline">
                                                </line>
                                            </g>
                                            <g id="SvgjsG4781" class="apexcharts-gridlines-vertical"
                                                style="display: none;"></g>
                                            <line id="SvgjsLine4791" x1="0" y1="30" x2="22"
                                                y2="30" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                            <line id="SvgjsLine4790" x1="0" y1="1" x2="0"
                                                y2="30" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG4760" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG4761" class="apexcharts-series" seriesName="seriesx1"
                                                data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath4769"
                                                    d="M 0 25.71428571428571C 1.54 25.71428571428571 2.8600000000000003 12.857142857142858 4.4 12.857142857142858C 5.94 12.857142857142858 7.260000000000001 26.57142857142857 8.8 26.57142857142857C 10.34 26.57142857142857 11.66 4.285714285714285 13.200000000000001 4.285714285714285C 14.740000000000002 4.285714285714285 16.060000000000002 25.71428571428571 17.6 25.71428571428571C 19.14 25.71428571428571 20.46 15 22 15"
                                                    fill="none" fill-opacity="1"
                                                    stroke="url(#SvgjsLinearGradient4764)" stroke-opacity="1"
                                                    stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                    class="apexcharts-line" index="0"
                                                    clip-path="url(#gridRectMask5e03dtc6)"
                                                    pathTo="M 0 25.71428571428571C 1.54 25.71428571428571 2.8600000000000003 12.857142857142858 4.4 12.857142857142858C 5.94 12.857142857142858 7.260000000000001 26.57142857142857 8.8 26.57142857142857C 10.34 26.57142857142857 11.66 4.285714285714285 13.200000000000001 4.285714285714285C 14.740000000000002 4.285714285714285 16.060000000000002 25.71428571428571 17.6 25.71428571428571C 19.14 25.71428571428571 20.46 15 22 15"
                                                    pathFrom="M -1 42.857142857142854L -1 42.857142857142854L 4.4 42.857142857142854L 8.8 42.857142857142854L 13.200000000000001 42.857142857142854L 17.6 42.857142857142854L 22 42.857142857142854">
                                                </path>
                                                <g id="SvgjsG4762" class="apexcharts-series-markers-wrap"
                                                    data:realIndex="0"></g>
                                            </g>
                                            <g id="SvgjsG4763" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine4792" x1="0" y1="0" x2="22"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine4793" x1="0" y1="0" x2="22"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden">
                                        </line>
                                        <g id="SvgjsG4794" class="apexcharts-yaxis-annotations">
                                        </g>
                                        <g id="SvgjsG4795" class="apexcharts-xaxis-annotations">
                                        </g>
                                        <g id="SvgjsG4796" class="apexcharts-point-annotations">
                                        </g>
                                    </g>
                                    <rect id="SvgjsRect4756" width="0" height="0" x="0"
                                        y="0" rx="0" ry="0" opacity="1"
                                        stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                    </rect>
                                    <g id="SvgjsG4778" class="apexcharts-yaxis" rel="0"
                                        transform="translate(-18, 0)"></g>
                                    <g id="SvgjsG4753" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 20px;"></div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 178px; height: 43px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
=======
>>>>>>> 39d0754306eb23f1f9cbeaabf30565b1393d30a1
