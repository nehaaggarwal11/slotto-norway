@extends('layouts.frontend')

@section('title','Home Page')
@section('meta_tags')
    <title>{{ $home_content->seo_title }}</title>
    <meta content="{{ $home_content->seo_keyword }}" name="keywords">
    <meta content="{{ $home_content->seo_description }}" name="description">
@endsection
@section('content')
    <style>
        section#slider-section {
            position: relative;
            padding-top: 0;
            overflow: hidden;
            transform: unset;
            display: list-item;
            margin-bottom: -5px
        }

        div#carouselContentMobile {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
        }

        div#carouselContentMobile {
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            position: absolute;
            left: unset;
            right: unset;
        }

        video#myVideo-desktop, video#myVideo-mobile, #carouselContent, #carouselContentMobile {
            display: none;
        }

        video {
            position: relative;
            top: unset;
            transform: unset;
            left: unset;
        }

        .nj-hp-slider-box {
            display: block;
            position: absolute;
            height: 100%;
            width: 100%;
            top: -25px;
        }
        .nj-hp-slider-box .carousel{ width: 100%; }

        .main-nav .drop-down > ul {
            right: 0;
            left: unset;
        }

        .slot-machine-sec .container-fluid {
            position: relative
        }

        @media only screen and (max-width: 767px) {
            video#myVideo-mobile, #carouselContentMobile {
                display: block;
            }
            video#myVideo-desktop {
                display: none;
            }
            .mobile-pirate, .mobile-submarine
            {
                display: block;
            }
            .screen-pirate,.screen-submarine
            {
                display: none;
            }
        }

        @media only screen and (min-width: 768px) {
            video#myVideo-desktop , #carouselContent{
                display: block;
            }

            .mobile-pirate, .mobile-submarine
            {
                display: none;
            }
            .screen-pirate,.screen-submarine
            {
                display: block;
            }
            #carouselContent {
                position: absolute;
                top: 50%;
                left: unset;
                right: unset;
                transform: translateY(-50%);
            }
        }
        .swal2-container {z-index: 10000;}
    </style>
    <div id="preloader" aria-label="sjørøver vifter med det norske flagget"></div>
    @if(session('success'))
            <div class="alert alert-success mt-4" role="alert">
                {{ session('success') }}
            </div>
    @endif
    <section id="slider-section">
        <video title="Casino banner med skattekiste, papegøye og spilleautomater" autoplay muted loop id="myVideo-desktop">
            <source src="{{ asset('asset/frontend/img/banners/casino-scenes.mp4')}}"
                    type="video/mp4">
        </video>
        <video title="banner for mobil med papegøye og spilleautomater" autoplay muted loop id="myVideo-mobile">
            <source src="{{ asset('asset/frontend/img/banners/casino-mobile.mp4')}}"
                    type="video/mp4">
        </video>
        <div class="nj-hp-slider-box">
            <div id="carouselContent" class="carousel slide" data-ride="carousel" data-interval="5000">
                <div class="carousel-inner" role="listbox">
                    @foreach($slider_casinos as $casino_num => $casino)
                        <div class="carousel-item {{ $casino_num == 0 ? 'active':'' }} text-center">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <div class="slider-content">
                                        <h2>{{ $casino->home_page_slider_title }}</h2>
                                        <p>{{ $casino->info }}</p>
                                        <button class="casino-btn" onclick="window.location.href = '{{ $casino->link }}'">Besøk Casino</button>
                                    </div>
                                </div>
                                <div class="col-md-1 pull-md-2">
                                    <div class="slider-image">
                                        <img src="{{ @$casino->transparent_logo_image->url }}"
                                         alt="{{ $casino->transparent_logo_image_alt_text }}" class="logo-icon-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselContent"
                   role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"
                      aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselContent"
                   role="button" data-slide="next">
                <span class="carousel-control-next-icon"
                      aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div id="carouselContentMobile" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                @foreach($slider_casinos as $casino_num => $casino)
                    <div class="carousel-item {{ $casino_num == 0 ? 'active':'' }} text-center">
                        <div class="content-left">
                            <h2>{{ $casino->home_page_slider_title }}</h2>
                            <p>{{ $casino->info }}</p>
                            <button class="casino-btn" onclick="window.location.href = '{{ $casino->link }}'">Besøk Casino</button>
                        </div>
                        <div class="content-right">
                            <img src="{{ @$casino->transparent_logo_image->url }}"
                                 alt="{{ $casino->transparent_logo_image_alt_text }}" class="img-responsive logo-icon-img">
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselContent"
                   role="button" data-slide="prev">
                <span class="carousel-control-prev-icon"
                      aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselContent"
                   role="button" data-slide="next">
                <span class="carousel-control-next-icon"
                      aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <section id="rating-section" aria-label="vann">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 offset-md-6 slottomat-table-tab">
                    <div class="casino-toggle">
                        <div class="wrap">
                            <input type="radio" id="casino" class="casino" name="radio">
                            <label for="casino">Casino</label>

                            <input type="radio" id="sport" class="sport" name="radio">
                            <label for="sport">Sport</label>

                            <div class="bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none d-lg-none d-xl-block">
            <div class="waterfall-loop"></div>
            <div class="container-fluid">
                <div id="ripple-img"></div>
                <div class="row">
                    <div class="col-md-8 offset-md-3">
                        
                        <div id="tabsJustifiedContent" class="tab-content">
                        
                            <div id="casino-tab" class="casino-tab">
                                <div class="rating-headings">
                                    <h1 class="top-casino-heading"><img
                                            src="{{asset('asset/frontend/img/rating/star.png')}}"
                                            alt="to stjerner i gull med en liten og en stor stjerne"><span>Topp 10 Casino</span><img
                                            src="{{asset('asset/frontend/img/rating/star2.png')}}"
                                            alt="to stjerner i gull med en stor og en liten stjerne"></h1>
                                </div>
                                @include('partials.casino-table', compact('casinos'))
                                <button class="btn btn-primary view-btn mx-auto d-block" onclick="window.location.href='{{ route('frontend.casino-bonus') }}'">Se Alle</button>
                            </div>
                            <div id="sport-casino-tab" class="sport-casino-tab">
                                <div class="rating-headings">
                                    <h1 class="top-casino-heading"><img
                                            src="{{asset('asset/frontend/img/rating/star.png')}}"
                                            alt="to stjerner i gull med en liten og en stor stjerne"><span>Topp 10 Beste Betting Sider</span><img
                                            src="{{asset('asset/frontend/img/rating/star2.png')}}"
                                            alt="to stjerner i gull med en stor og en liten stjerne"></h1>
                                </div>
                                @include('partials.sport-table', compact('sports'))
                                <button class="btn btn-primary view-btn mx-auto d-block" onclick="window.location.href='{{ route('frontend.betting') }}'">Se Alle</button>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="rating-section-mobile">
        <div class="d-block d-lg-block d-xl-none">
            <div class="container-fluid">
                <div id="ripple-img"></div>
                <div class="row rating-mobile">
                    <div class="col-md-12">
                        <div id="tabsJustifiedContent" class="tab-content">
                            <div id="casino-tab" class="casino-tab">
                                <div class="rating-headings">
                                    <h2 class="top-casino-heading">
                                        <img src="{{asset('asset/frontend/img/rating/star.png')}}" alt="to stjerner i gull med en liten og en stor stjerne">
                                        <span>Topp 10 Casino</span>
                                        <img src="{{asset('asset/frontend/img/rating/star2.png')}}" alt="to stjerner i gull med en stor og en liten stjerne">
                                    </h2>
                                </div>
                                @include('partials.casino-table-mobile', compact('casinos'))
                                <button class="btn btn-primary view-btn mx-auto d-block" onclick="window.location.href='{{ route('frontend.casino-bonus') }}'">Se Alle
                                </button>
                            </div>
                            
                            <div id="sport-casino-tab" class="sport-casino-tab">
                                <div class="rating-headings">
                                    <h2 class="top-casino-heading">
                                        <img src="{{asset('asset/frontend/img/rating/star.png')}}" alt="to stjerner i gull med en liten og en stor stjerne">
                                        <span>Topp 10 Beste Betting Sider</span>
                                        <img src="{{asset('asset/frontend/img/rating/star2.png')}}" alt="to stjerner i gull med en stor og en liten stjerne">
                                    </h2>
                                </div>
                                @include('partials.sport-table-mobile', compact('sports'))
                                <button class="btn btn-primary view-btn mx-auto d-block" onclick="window.location.href='{{ route('frontend.betting') }}'">Se Alle
                                </button>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="about-div" aria-label="brun bakgrunn">
        <section id="about-section">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('asset/frontend/img/gif/boat.gif')}}" class="water-ripple-img" alt="båt i bevegelse med tre store røde seil med syv tall på">
                    </div>
                    <div class="col-md-7">
                        <div class="about-col">
                            <h3>{{ $home_content->welcome_heading }}</h3>
                            {!! $home_content->welcome_text_less !!}
                            <span id="more">
                                {!! $home_content->welcome_text_more !!}
                            </span>
                                <a id="myBtn" href="javascript:void(0);">Les Mer</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="sud" style="background:#2a5db8;">
        <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1"
             style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
             viewBox="0 0 17707.28 1306.81"
        >
        <style type="text/css">
            .fil0 {
                fill: #0849a7;
            }
        </style>
            <g id="Layer_x0020_1" class="DarkWaves">
                <metadata id="CorelCorpID_0Corel-Layer"/>
                <path class="fil0"
                      d="M-0 1306.81l0 -173.57c1233.44,-172.03 1430.2,-1385.58 2778.37,-642.92 1250.96,689.11 1935.19,-429.67 3799.13,195.75 829.44,278.31 1417.97,-1059.44 2750.55,-314.21 1767.11,988.23 2075.82,-1133.74 3279.04,-59.49 624.04,557.16 1053.24,504.54 1741.86,17.8 374.17,-264.48 894.65,-178.97 1302.59,21.6 714.26,351.18 930.6,-659.4 2028.15,249.9 6.49,5.37 15.91,12.18 27.59,20.06l0 685.09 -17707.28 0z"/>
            </g>
            <style type="text/css">
                .fil1 {
                    fill: #0b014b
                }
            </style>
            <g id="Layer_x0020_1" class="LightWaves">
                <metadata id="CorelCorpID_0Corel-Layer"/>
                <path class="fil1"
                      d="M-0 1574.72l0 -895.97c252.71,-152.71 410.18,-143.73 669.66,-66.77 841.29,249.51 1710.41,212.85 2542.17,-171.75 968.19,-447.68 1521.42,198.03 2307.1,292.58 542.22,65.25 1184.59,-559.25 1909.56,-453.32 844.34,123.38 1172.56,746.52 2518.05,38.67 419.63,-220.76 1428.37,426.4 2113.95,426.4 1288.53,0 972.52,-842.07 2703.32,-141.96 1267.48,512.69 2325.09,-1006.19 2943.47,-496.37l0 1468.5 -17707.28 0z"/>
            </g>
    </svg>

    </div>

    <section class="slot-machine-sec">
        <div class="container-fluid">
            <div id="particle"></div>
            <div class="row">
                <div class="col-md-2 mobile-pirate">
                    <img src="{{ asset('asset/frontend/img/gif/diving.gif')}}"
                         alt="sjørøver med dykkemaske som svømmer og holder i en sekk med gullmynter" class="diving-mobile">
                </div>
                <div class="col-lg-8 mx-auto">
                    <div class="section-title-item">
                        <h2 class="section-title">{{ $home_content->important_facts_heading }}
                        </h2>

                    </div>
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-8 col-md-8 offset-md-2 wow fadeInUp"
                     data-wow-duration="1.5s"
                     style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                    <div class="slot-machine-detail">
                        {!! $home_content->important_facts_text_less !!}
                        <div id="slot-machine-more-section">
                            {!! $home_content->important_facts_text_more !!}
                        </div>
                        <a id="slot-machine-read-more"
                           href="javascript:void(0);">Les Mer</a>
                    </div>
                </div> <!-- Col End -->
                <div class="col-md-2 screen-pirate">
                    <img src="{{ asset('asset/frontend/img/gif/diving.gif')}}"
                         alt="sjørøver med dykkemaske som svømmer og holder i en sekk med gullmynter" class="diving pirate">
                </div>
            </div> <!-- Row End -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 offset-md-2 mx-auto">
                    <div class="row">
                        @foreach($games ?? [] as $game)
                        <div class="col-6 col-md-3 mb-4">
                            <div class="content">
                                <a href="{{ $game->route }}">
                                    <div class="content-overlay"></div>
                                    @if($game)
                                    <img class="content-image"
                                        src="{{ $game->logo ? $game->logo->getUrl('thumb') : asset('asset/frontend/img/logo/game.png') }}" alt="{{ $game->logo_alt_text }}">
                                    @endif
                                    <div class="content-details fadeIn-top">
                                        <h5>Spill demo</h5>
                                        <p>Les anmeldelse</p> 
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <button
            class="btn btn-primary more-casino-btn mx-auto d-block" onclick="window.location.href='{{ route('frontend.'.$home_content->important_facts_btn_link ) }}'">{{ $home_content->important_facts_btn_text }}
            </button>
        </div>
        <div class="documentaion-shap-img">
            <img class="d-shap-img-1 wow fadeInLeft animated octopus-one-img"
                 data-wow-duration="1.5s" id="leftglobe"
                 src="{{ asset('asset/frontend/img/fishes/octopus.gif')}}" alt="blå blekksprut sett bakfra og beveger tentakler"
                 style="visibility: visible; animation-duration: 1.5s; animation-name: bounce;">
        </div>

    </section> <!-- slot machine section end -->
    <!-- wagering section start -->
    
    <!-- Sport casino section start -->
    <section class="sport-casino-sec section-padding" style="">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 mobile-submarine">
                    <img src="{{ asset('asset/frontend/img/gif/basket-ball.gif')}}"
                         class="basket-ball-mobile-img" alt="submarine">
                </div>
                <div class="col-lg-8 mx-auto">
                    <div class="section-title-item">
                        <h2 class="section-title">{{ $home_content->best_betting_heading }} </h2>
                    </div>
                </div>
            </div><!-- row end -->

            <div class="row">
                <div class="col-lg-6 col-md-6 screen-submarine">
                    <img src="{{ asset('asset/frontend/img/gif/basket-ball.gif')}}"
                         class="diving basket-ball-img" alt="rosa stripete fisk med store øyne">
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.5s"
                     style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                    <div class="sport-casino-detail">
                        {!! $home_content->sports_text_less !!}

                        <div id="sport-casino-more-section">
                            {!! $home_content->sports_text_more !!}
                        </div>
                        <a id="sport-casino-read-more" href="javascript:void(0);">Les
                            Mer</a>
                    </div>
                    <button class="btn btn-primary more-casino-btn" onclick="window.location.href='{{ url($home_content->sports_btn_link) }}'">{{ $home_content->sports_btn_text }}</button>
                </div> <!-- Col End -->
                
            </div> <!-- Row End -->
            

        </div><!-- container fluid end -->

    </section>
    <!-- sport casino section end -->

    <!-- new casino section start -->
    <section class="new-casino-sec section-padding" aria-label="fjell">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <img src="{{ asset('asset/frontend/img/fishes/orange-fish.png')}}"
                         class="orange-fish" width="100" alt="oransje koi fisk som smiler ">
                    <div class="section-title-item">
                        {{-- <h2 class="section-title">Nye online Casino
                        </h2> --}}
                        
                         @php($new_online_casino_image = \App\StaticPage::getMediaField('home', 'new_online_casino_image'))     
                        <img src="{{ @$new_online_casino_image->url }}" class="mx-auto d-block nye-img" alt="{{ $home_content->new_casino_image_alt_text }}">
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-12 col-md-12 wow fadeInUp"
                     data-wow-duration="1.5s"
                     style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                    <div class="new-casino-detail">
                        {!! $home_content->new_online_casinos_text_less !!}
                        <div id="new-casino-more-section">
                            {!! $home_content->new_online_casinos_text_more !!}
                        </div>
                        <a id="new-casino-read-more" href="javascript:void(0);">Les
                            Mer</a>
                    </div>
                </div> <!-- Col End -->
            </div> <!-- Row End -->
            <div class="row">
                @foreach($top3_casinos as $casino)
                    <div class="col-sm-12 col-md-4 mb-3">
                        <div class="game_table wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0s; animation-name: fadeInUp;">
                            <div class="pricing_head text-white bg_light_blue">
                                <img src="{{ @$casino->image->url }}"
                                    alt="{{ $casino->image_alt_text }}" class="play-img">
                            </div>
                            <ul class="game_features">
                                {!! $casino->content !!}
                            </ul>
                            <a class="game_btn btn_lightblue" href="{{ $casino->link }}" rel="nofollow">Besøk Casino</a>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
        <button class="btn btn-primary more-casino-btn mx-auto d-block" onclick="window.location.href='{{url($home_content->new_online_casino_btn_link)}}'">{{ $home_content->new_online_casino_btn_text }}
        </button>
    </section> <!-- new casino section end -->

    <!-- find casino section start -->
    <section class="find-casino-sec section-padding" style="">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 mobile-submarine">
                    <img src="{{ asset('asset/frontend/img/gif/submarine.gif')}}"
                         class="diving-submarine" alt="submarine">
                </div>
                <div class="col-lg-8 mx-auto">
                    <img src="{{ asset('asset/frontend/img/fishes/pink-fish.png')}}"
                         class="fish d-none d-lg-block d-xl-block" width="130" alt="rosa stripete fisk med store øyne">
                    <div class="section-title-item">
                    <h2 class="section-title">{{ $home_content->find_favourite_casinos_heading }}</h2>
                    </div>
                </div>
            </div><!-- row end -->

            <div class="row">
                <div class="col-lg-6 col-md-6 screen-submarine">
                    <img src="{{ asset('asset/frontend/img/gif/submarine.gif')}}"
                         class="diving" alt="rosa stripete fisk med store øyne">
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.5s"
                     style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                    <div class="find-casino-detail">
                        {!! $home_content->find_favourite_casinos_text_less !!}

                        <div id="find-casino-more-section">
                            {!! $home_content->find_favourite_casinos_text_more !!}
                        </div>
                        <a id="find-casino-read-more" href="javascript:void(0);">Les
                            Mer</a>
                    </div>
                </div> <!-- Col End -->
            </div> <!-- Row End -->

        </div><!-- container fluid end -->

    </section> <!-- find casino section end -->

    <!-- mobile casino section start -->
    <section class="mobile-casino-sec">
        <div class="container">
            <div class="row">
            <div class="col-md-2 mobile-pirate">
                    <img src="{{ asset('asset/frontend/img/gif/typing-on-mobile.gif')}}"
                         class="typing-mobile-imgs mx-auto d-block" alt="sjørøver med mobiltelefon som søker på google etter beste mobil casino">
                </div>
                <div class="col-lg-8 mx-auto">
                    <div class="section-title-item">
                        <h2 class="hvordan-title section-title">{{ $home_content->find_mobile_casino_heading }}</h2>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-duration="1.5s"
                     style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                    <div class="mobile-casino-detail">
                        {!! $home_content->find_mobile_casino_text_less !!}
                        <div id="mobile-casino-more-section">
                            {!! $home_content->find_mobile_casino_text_more !!}
                        </div>
                        <a id="mobile-casino-read-more"
                           href="javascript:void(0)">Les Mer</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mx-auto wow fadeInUp screen-submarine"
                     data-wow-duration="1.5s"
                     style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                    <img src="{{ asset('asset/frontend/img/gif/typing-on-mobile.gif')}}"
                         class="typing-mobile-img" alt="sjørøver med mobiltelefon som søker på google etter beste mobil casino">
                </div>
            </div><!-- row end -->
        </div><!-- container end -->

    </section> <!-- mobile casino section end -->





    <!-- Blog section start -->
    <section class="blog-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title-item">
                        <h2 class="section-title">{{ $home_content->blog_heading }}
                        </h2>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row justify-content-center mt-30">
                @foreach($blog ?? [] as $news)
                <div class="col-md-4">
                    <div class="single-blog blog-2 mt-30">
                        <div class="blog-image">
                            <a href="{{ $news->route }}"><img
                                src="{{ @$news->logo_img->url }}"
                                alt="{{ $news->logo_img_alt_text }}"></a>
                        </div>
                        <div class="blog-content">
                            <h4 class="news-blog-title"><a href="{{ $news->route }}">{{ $news->name }}</a></h4>
                            <p>{{ Str::limit($news->small_description, 80) }}</p>
                            <a class="btn read-blog-btn mx-auto d-block"
                               href="{{ $news->route }}">Les Blogg</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="btn btn-primary more-blogs-btn"
                   href="{{ route('frontend.'.$home_content->blog_btn_link) }}">{{ $home_content->blog_btn_text }}</a>
        </div><!-- container end -->


    </section> <!-- Blog section end -->

    <!-- Faq section start -->
    <section class="faq-sec section-padding" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="section-title-item">
                        <h2 class="section-title">{{ $home_content->faq_heading }}</h2>
                    </div>
                </div>
            </div><!-- row end -->
            <div class="row mt-30">
                <div class="col-lg-12 col-md-12 wow fadeInUp"
                     data-wow-duration="1.5s"
                     style="visibility: visible; animation-duration: 1.5s; animation-name: fadeInUp;">
                    <div class="faq-detail">
                        {!! $home_content->faq_text !!}
                     </div> <!-- Col End -->
                </div> <!-- Row End -->
                <div class="col-md-12">
                    <div class="faq-accordion">
                        <div class="panel-group" id="accordion" role="tablist"
                             aria-multiselectable="true">
                             @foreach($faq_questions as $faq)
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab"
                                     id="heading{{ $faq->id }}">
                                    <h4 class="panel-title">
                                        <a class="collapsed"
                                           data-toggle="collapse"
                                           data-parent="#accordion"
                                           href="#collapse{{ $faq->id }}"
                                           aria-expanded="false"
                                           aria-controls="collapse{{ $faq->id }}">{{ $faq->question }}
                                        </a>
                                    </h4>

                                </div>
                                <div id="collapse{{ $faq->id }}"
                                     class="panel-collapse collapse"
                                     role="tabpanel"
                                     aria-labelledby="heading{{ $faq->id }}">
                                    <div class="panel-body">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <a class="btn btn-primary mx-auto d-block faq-more-btn"
                   href="{{ route('frontend.'.$home_content->faq_btn_link) }}">{{ $home_content->faq_btn_text }}</a>

            </div>
            <div class="documentaion-shap-img">
            <img class="d-shap-img-2 wow fadeInRight animated octopus-two-img"
                 data-wow-duration="1.5s"
                 src="{{ asset('asset/frontend/img/fishes/octopus2.gif')}}" alt="gul blekksprut som beveger seg og smiler mens den holder et sverd"
                 style="visibility: visible; animation-duration: 1.5s; animation-name: bounce;">

        </div>
        </div>
    </section> <!-- Faq section end -->
    <div id="newsletterModal" class="modal fade">
        <div class="modal-dialog modal-newsletter">
            <div class="modal-content" aria-label="skattekiste-spilleautomat">
                <form class="subscribeForm" action="{{ route('frontend.subscribers.subscribe') }}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h4>{{ $newsletter->heading}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {!! $newsletter->newsletter_description !!}
                        <div class="row">
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email" placeholder="E-postadresse" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="checkbox" id="agree_newsletter_modal" name="agree" value="yes" required>
                            <label for="agree_newsletter_modal">
                                Jeg aksepterer
                                <a href="{{ route('frontend.page.terms') }}">vilkår </a> og
                                <a href="{{ route('frontend.page.privacy-policy') }}">betingelser</a>
                            </label>
                        </div>
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Abonner</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
