@extends('layouts.frontend')

@section('title','Casino Bonus')
@section('meta_tags')
    <title>{{ $data->seo_title }}</title>
    <meta content="{{ $data->seo_keyword }}" name="keywords">
    <meta content="{{ $data->seo_description }}" name="description">
@endsection
@section('content')
    <section id="new-casino">
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
                    <h2 class="new-casino-mainheading">{{ $data->heading }}</h2>
                    <p class="new-casino-subheading">{{ $data->sub_heading }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="casino-rating-headings">
                        <h1 class="new-top-casino-heading"><img
                                src="{{asset('asset/frontend/img/rating/star.png')}}"
                                alt="to stjerner i gull med en liten og en stor stjerne"><span>Topp 3 Casino</span><img
                                src="{{asset('asset/frontend/img/rating/star2.png')}}"
                                alt="to stjerner i gull med en stor og en liten stjerne"></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($top3_casinos as $casino)
                    <div class="col-sm-12 col-md-4 mb-2">
                        <div class="game_table">
                            <div class="pricing_head text-white bg_light_blue">
                            <img src="{{ @$casino->image->url }}" alt="{{ $casino->image_alt_text }}" class="play-img">
                            </div>
                            <ul class="game_features">
                                {!! $casino->content !!}
                            </ul>
                            <a class="game_btn btn_lightblue" href="{{ $casino->link }}" rel="nofollow">Besøk Casino</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-30">
                <div class="col-md-12">
                    <div class="new-casino-detail">
                        {!! $data->new_casino_text_less !!}
                        <div id="new-casino-more-section">
                            {!! $data->new_casino_text_more !!}
                        </div>
                        <a id="new-casino-read-more" href="javascript:void(0);">Les
                            Mer</a>
                    </div>
                </div>
            </div>

            <div class="row mt-30 d-none d-lg-block">
                <div class="col-md-12">
                    @include('partials.casino-table', compact('casinos'))
                </div>
            </div>
            <div class="row rating-mobile d-block d-lg-none d-xl-none">
                <div class="col-md-12">
                    <div class="rating-headings">
                        <h2 class="top-casino-heading"><img
                                src="{{asset('asset/frontend/img/rating/star.png')}}"
                                alt="to stjerner i gull med en liten og en stor stjerne"><span>NYE CASINO</span><img
                                src="{{asset('asset/frontend/img/rating/star2.png')}}"
                                alt="to stjerner i gull med en stor og en liten stjerne"></h2>
                    </div>
                    @include('partials.casino-table-mobile', compact('casinos'))
                    <button class="btn btn-primary view-btn mx-auto d-block">Se Alle
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div class="sud" style="background:#42bdf4;">
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
             style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
             viewBox="0 0 17707.28 1306.81"
        >
        <style type="text/css">
            .fil0 { fill: #2aa5d2 }
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
    <section id="new-casino-content">
        <div class="container-fluid">
            <div class="row mt-30">
                <div class="col-md-2">
                    <div class="documentaion-shap-img">
                        <img class="d-shap-img-1 casino-jelly-img wow fadeInLeft animated"
                             data-wow-duration="1.5s" id="leftglobe"
                             src="{{ asset('asset/frontend/img/fishes/jelly-octopus.gif')}}" alt="rød blekksprut som beveger seg"
                             style="visibility: visible; animation-duration: 1.5s; animation-name: bounce;width:150px;">
                    </div>
                </div>
                <div class="col-md-8">
                    {!! $data->new_online_casino_text !!}
                </div>
                <div class="col-md-2">
                    <div class="documentaion-shap-img">
                        <img class="casino-tortoise-img wow fadeInLeft animated"
                             data-wow-duration="1.5s"
                             src="{{ asset('asset/frontend/img/fishes/tortoise.gif')}}" alt="skillpadde i bevegelse"
                             style="visibility: visible; animation-duration: 1.5s; animation-name: bounce;">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
