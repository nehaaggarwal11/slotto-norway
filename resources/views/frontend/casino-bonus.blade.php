@extends('layouts.frontend')

@section('title','Casino Bonus')
@section('meta_tags')
    <title>{{ $data->seo_title }}</title>
    <meta content="{{ $data->seo_keyword }}" name="keywords">
    <meta content="{{ $data->seo_description }}" name="description">
@endsection
@section('content')

    <section id="casino-bonuse">
        <div id="background-wrap">
            <div class="x1">
                <div class="cloud"></div>
            </div>
            <div class="x2">
                <div class="cloud"></div>
            </div>
            <div class="x3">
                <div class="cloud"></div>
            </div>
            <div class="x4">
                <div class="cloud"></div>
            </div>
            <div class="x5">
                <div class="cloud"></div>
            </div>
            <div class="bird-container bird-container--one">
                <div class="bird bird--one"></div>
            </div>

            <div class="bird-container bird-container--two">
                <div class="bird bird--two"></div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ @$data->casino_heading }}</h1>
                    <p>{{ @$data->casino_text }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <div class="banner-heading">
                        @php($tmc1_heading_icon_image = \App\StaticPage::getMediaField('casino-bonus', 'tmc1_heading_icon_image'))
                        <img src="{{ @$tmc1_heading_icon_image->url }}" class="img-responsive" alt="{{ @$data->tmc1_heading_icon_image_alt_text }}" width="30">
                        <h4>{{ $data->tmc1_heading_title }}</h4>
                    </div>
                    @php($tmc1_bg_image = \App\StaticPage::getMediaField('casino-bonus', 'tmc1_bg_image'))
                    <div class="top-banner" style="background-image: url('{{ $tmc1_bg_image->url }}')" aria-label="{{ @$data->tmc1_bg_image_alt_text }}">
                        <div class="first-casino-banner position-absolute">
                            <div class="first-casino-banner-img">
                                <div class="first-casino-banner-logo">
                                    <img src="{{ @$tmc_casinos[0]->transparent_logo_image->url }}" alt="{{ @$tmc_casinos[0]->transparent_logo_image_alt_text }}">
                                    <a href="{{ @$tmc_casinos[0]->route }}" class="read-review">Les anmeldelse</a>
                                </div>
                            </div>
                            <div class="casino-bonus">
                                <span class="bonus-amount">{{ @$data->tmc1_info_text }}</span>
                            </div>
                            <div class="review-casino-btn">
                                <button class="btn-primary claim-btn mx-auto d-block" onclick="window.location.href = '{{ @$tmc_casinos[0]->link }}'">Hent bonus</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="banner-heading">
                        @php($tmc2_heading_icon_image = \App\StaticPage::getMediaField('casino-bonus', 'tmc2_heading_icon_image'))
                        <img src="{{ @$tmc2_heading_icon_image->url }}" class="img-responsive" alt="{{ @$data->tmc2_heading_icon_image_alt_text }}" width="30">
                        <h4>{{ @$data->tmc2_heading_title }}</h4>
                    </div>
                    @php($tmc2_bg_image = \App\StaticPage::getMediaField('casino-bonus', 'tmc2_bg_image'))
                    <div class="top-banner" style="background-image: url('{{ @$tmc2_bg_image->url }}')" aria-label="{{ @$data->tmc2_bg_image_alt_text }}">
                        <div class="second-casino-banner position-absolute">
                            <div class="second-casino-banner-img">
                                <div class="second-casino-banner-logo">
                                    <img src="{{ @$tmc_casinos[1]->transparent_logo_image->url }}" alt="{{ @$tmc_casinos[1]->transparent_logo_image_alt_text }}">
                                    <a href="{{ @$tmc_casinos[1]->route }}" class="read-review">Les anmeldelse</a>
                                </div>
                            </div>
                            <div class="casino-bonus">
                                <span class="bonus-amount">{{ @$data->tmc2_info_text }}</span>
                            </div>
                            <div class="review-casino-btn">
                                <button class="btn-primary claim-btn mx-auto d-block" onclick="window.location.href = '{{ @$tmc_casinos[1]->link }}'">Hent bonus</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-30 d-none d-lg-block">
                <div class="col-md-12">
                    @include('partials.casino-table', compact('casinos'))
                </div>
            </div>
            <div class="row rating-mobile mt-4 d-block d-lg-none d-xl-none">
                <div class="col-md-12">
                    @include('partials.casino-table-mobile', compact('casinos'))
                    <button class="btn btn-primary view-btn mx-auto d-block">Se Alle
                    </button>
                </div>
            </div>
        </div>
    </section>
    {{--<div class="boat-animation">
        <img src="{{ asset('asset/frontend/img/gif/boat-casino.gif')}}" alt="">
    </div>--}}
    <div class="sud" style="background:#42bdf4;">
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
             style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
             viewBox="0 0 17707.28 1306.81"
        >

        <style type="text/css">
            .fil0 {fill: #2aa5d2}
        </style>
            <g id="Layer_x0020_1" class="DarkWaves">
                <metadata id="CorelCorpID_0Corel-Layer"/>
                <path class="fil0"
                      d="M-0 1306.81l0 -173.57c1233.44,-172.03 1430.2,-1385.58 2778.37,-642.92 1250.96,689.11 1935.19,-429.67 3799.13,195.75 829.44,278.31 1417.97,-1059.44 2750.55,-314.21 1767.11,988.23 2075.82,-1133.74 3279.04,-59.49 624.04,557.16 1053.24,504.54 1741.86,17.8 374.17,-264.48 894.65,-178.97 1302.59,21.6 714.26,351.18 930.6,-659.4 2028.15,249.9 6.49,5.37 15.91,12.18 27.59,20.06l0 685.09 -17707.28 0z"/>
            </g>


            <style type="text/css">
                .fil1 { fill: #0b014b }
            </style>
            <g id="Layer_x0020_1" class="LightWaves">
                <metadata id="CorelCorpID_0Corel-Layer"/>
                <path class="fil1"
                      d="M-0 1574.72l0 -895.97c252.71,-152.71 410.18,-143.73 669.66,-66.77 841.29,249.51 1710.41,212.85 2542.17,-171.75 968.19,-447.68 1521.42,198.03 2307.1,292.58 542.22,65.25 1184.59,-559.25 1909.56,-453.32 844.34,123.38 1172.56,746.52 2518.05,38.67 419.63,-220.76 1428.37,426.4 2113.95,426.4 1288.53,0 972.52,-842.07 2703.32,-141.96 1267.48,512.69 2325.09,-1006.19 2943.47,-496.37l0 1468.5 -17707.28 0z"/>
            </g>
    </svg>

    </div>

    <section id="casino-bonus-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <div class="documentaion-shap-img">
                        <img class="d-shap-img-1 casino-jelly-img wow fadeInLeft animated"
                             data-wow-duration="1.5s" id="leftglobe"
                             src="{{ asset('asset/frontend/img/fishes/jelly.gif')}}" alt="rosa manet som beveger øyne og tentakler"
                             style="visibility: visible; animation-duration: 1.5s; animation-name: bounce;">
                    </div>
                </div>

                <div class="col-md-8">
                    <h2>{{ $data->free_bonus_heading }}</h2>
                    {!! $data->free_bonus_text !!}
                    {!! $data->casino_bonus_penge_text_less !!}
                    <div id="more-deposit-bonuse">
                        {!! $data->casino_bonus_penge_text_more !!}
                    </div>
                    <a id="noDeposit" href="javascript:void(0);">Les
                        Mer</a>

                    {!! $data->casino_bonus_nettcasino_text_less !!}
                    <div id="deposit-bonuse">
                        {!! $data->casino_bonus_nettcasino_text_more !!}
                    </div>
                    <a id="deposit-read-more"
                    href="javascript:void(0);">Les Mer</a>
                    {!! $data->casino_bonus_wagering_text !!}
                </div>
                <div class="col-md-2">
                    <div class="documentaion-shap-img">
                        <img class="d-shap-img-2 casino-crab-img wow fadeInLeft animated"
                             data-wow-duration="1.5s"
                             src="{{ asset('asset/frontend/img/fishes/crab.gif')}}" alt="krabbe"
                             style="visibility: visible; animation-duration: 1.5s; animation-name: bounce;">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

