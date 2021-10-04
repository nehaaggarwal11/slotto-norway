@extends('layouts.frontend')

@section('title','Casino Bonus')
@section('content')
    <section id="games-new-section">
        <div class="game-top-banner">
            <div class="game-banner-content position-absolute">
                <h1>Spilleautomater</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
        </div>
        <div class="games-section-content">
            <div class="container-fluid">

                <div class="game-screen-view">
                    <div class="row mt-30 mb-60">
                        <div class="offset-md-3 col-md-3">
                            <div class="top-widget space50">
                                <form>
                                    <div class="search-bar">
                                        <input type="text" placeholder="Search..." id="search-text">
                                        <div class="search"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30">
                        <div class="col-md-2 offset-md-1 filter-screen">
                            <div class="filter">
                                <div class="vertical-filters">
                                    <span>Filter</span>
                                    <a href="#" class="float-right reset-filter">Reset Filter</a>
                                </div>                               
                                <div class="vertical-filters-filters provider-container">
                                    <a data-toggle="collapse" href="#providerCollapse" aria-expanded="false"
                                       aria-controls="myCollapseExample">
                                    <span class="vertical-filters-header">Provider <i
                                            class="fa fa-chevron-down"></i></span>
                                    </a>
                                    <ul class="brand-list collapse" id="providerCollapse">
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="netent">
                                                <label for="netent">Netent</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="betsoft">
                                                <label for="betsoft">Betsoft</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="micro">
                                                <label for="micro">Microgaming</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="play">
                                                <label for="play">Play n go</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="quickspin">
                                                <label for="quickspin">Quick Spin</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="ygg">
                                                <label for="ygg">Yggdrasil</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="redtiger">
                                                <label for="redtiger">Red Tiger</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="pragmatic">
                                                <label for="pragmatic">Pragmatic Play</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="genii">
                                                <label for="genii">Genii</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="nolimit">
                                                <label for="nolimit">Nolimit City</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="thunder">
                                                <label for="thunder">Thunderkick</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="isoftbet">
                                                <label for="isoftbet">iSoftBet</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="pushgaming">
                                                <label for="pushgaming">Push Gaming</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="relaxgaming">
                                                <label for="relaxgaming">Relax Gaming</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="bigtime">
                                                <label for="bigtime">Big Time Gaming</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="pgsoft">
                                                <label for="pgsoft">Pg Soft</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="ganpati">
                                                <label for="ganpati">Ganpati</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="greenjade">
                                                <label for="greenjade">Green Jade</label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="vertical-filters-filters provider-container">
                                    <span class="vertical-filters-header">RTP</span>
                                    <ul class="brand-list">
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="highlow">High
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="lowhigh">Medium
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="lowhigh">Low
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="vertical-filters-filters provider-container mb-3">
                                    <span class="vertical-filters-header">Volatilitet</span>
                                    <ul class="brand-list">
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="highlow">High
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="lowhigh">Medium
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="lowhigh">Low
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="py-3 px-3">
                                    <a href="#" class="btn btn-block btn-danger">Filter</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 offset-md-1 filter-mobile mb-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal" id="filter-model"
                                    data-target="#filterModal">
                                Filters
                            </button>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-6 col-md-3 mb-4">
                                    <div class="content">
                                        <a href="{{url('single-game')}}">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4">
                                    <div class="content">
                                        <a href="{{url('single-game')}}">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4">
                                    <div class="content">
                                        <a href="{{url('single-game')}}">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 mb-4 ">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 pull-md-1">
                            <div class="popular-casino">
                                <h6>Popular Casino 2019</h6>
                                <ul class="casino-list">
                                    <li>
                                        <a href="" class="casino-widget">
                                            <div class="casino-top casino-inner">
                                                <img src="{{('../asset/frontend/img/logo/10-bet.jpg')}}"
                                                     alt="" class="casino-img">
                                                10Bet Casino
                                            </div>
                                            <div class="casino-bottom casino-inner">
                                                <svg class="casino-widget___svg" width="32"
                                                     height="32"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill-rule="evenodd" clip-rule="evenodd">
                                                    <path
                                                        d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                        fill="#fff">
                                                    </path>
                                                </svg>
                                                100% up to C$100 Bonus
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="casino-widget">
                                            <div class="casino-top casino-inner">
                                                <img src="{{('../asset/frontend/img/logo/21com.jpg')}}"
                                                     alt="" class="casino-img">
                                                21.com Casino
                                            </div>
                                            <div class="casino-bottom casino-inner">
                                                <svg class="casino-widget___svg" width="32"
                                                     height="32"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill-rule="evenodd" clip-rule="evenodd">
                                                    <path
                                                        d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                        fill="#fff">
                                                    </path>
                                                </svg>
                                                122% up to C$300 Bonus + 210 Free Spins
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="casino-widget">
                                            <div class="casino-top casino-inner">
                                                <img src="{{('../asset/frontend/img/logo/22bet.jpg')}}"
                                                     alt="" class="casino-img">
                                                22Bet Casino
                                            </div>
                                            <div class="casino-bottom casino-inner">
                                                <svg class="casino-widget___svg" width="32"
                                                     height="32"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill-rule="evenodd" clip-rule="evenodd">
                                                    <path
                                                        d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                        fill="#fff">
                                                    </path>
                                                </svg>
                                                122% up to C$300 Bonus
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="modal" id="filterModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    {{--                                            <h4 class="modal-title">Filters</h4>--}}
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="filter">
                                        <div class="vertical-filters">
                                            <span>FILTERS</span>
                                            <a href="#" class="float-right reset-filter">Reset Filter</a>
                                        </div>
                                        <div class="vertical-filters-filters provider-container">
                                            <a data-toggle="collapse" href="#providerCollapse" aria-expanded="false"
                                               aria-controls="myCollapseExample">
                                    <span class="vertical-filters-header">Provider <i
                                            class="fa fa-chevron-down"></i></span>
                                            </a>
                                            <ul class="brand-list collapse" id="providerCollapse">
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="netent">
                                                        <label for="netent">Netent</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="betsoft">
                                                        <label for="betsoft">Betsoft</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="micro">
                                                        <label for="micro">Microgaming</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="play">
                                                        <label for="play">Play n go</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="quickspin">
                                                        <label for="quickspin">Quick Spin</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="ygg">
                                                        <label for="ygg">Yggdrasil</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="redtiger">
                                                        <label for="redtiger">Red Tiger</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="pragmatic">
                                                        <label for="pragmatic">Pragmatic Play</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="genii">
                                                        <label for="genii">Genii</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="nolimit">
                                                        <label for="nolimit">Nolimit City</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="thunder">
                                                        <label for="thunder">Thunderkick</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="isoftbet">
                                                        <label for="isoftbet">iSoftBet</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="pushgaming">
                                                        <label for="pushgaming">Push Gaming</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="relaxgaming">
                                                        <label for="relaxgaming">Relax Gaming</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="bigtime">
                                                        <label for="bigtime">Big Time Gaming</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="pgsoft">
                                                        <label for="pgsoft">Pg Soft</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="ganpati">
                                                        <label for="ganpati">Ganpati</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="greenjade">
                                                        <label for="greenjade">Green Jade</label>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="vertical-filters-filters provider-container">
                                            <span class="vertical-filters-header">RTP</span>
                                            <ul class="brand-list">
                                                <li>
                                                    <label class="form-check-label rtp-label">
                                                        <input name="status" type="radio" class="form-check-input"
                                                               value="highlow">High
                                                        <div class="common-radioIndicator"></div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="form-check-label rtp-label">
                                                        <input name="status" type="radio" class="form-check-input"
                                                               value="lowhigh">Medium
                                                        <div class="common-radioIndicator"></div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="form-check-label rtp-label">
                                                        <input name="status" type="radio" class="form-check-input"
                                                               value="lowhigh">Low
                                                        <div class="common-radioIndicator"></div>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="vertical-filters-filters provider-container mb-3">
                                            <span class="vertical-filters-header">Volatility</span>
                                            <ul class="brand-list">
                                                <li>
                                                    <label class="form-check-label rtp-label">
                                                        <input name="status" type="radio" class="form-check-input"
                                                               value="highlow">High
                                                        <div class="common-radioIndicator"></div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="form-check-label rtp-label">
                                                        <input name="status" type="radio" class="form-check-input"
                                                               value="lowhigh">Medium
                                                        <div class="common-radioIndicator"></div>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="form-check-label rtp-label">
                                                        <input name="status" type="radio" class="form-check-input"
                                                               value="lowhigh">Low
                                                        <div class="common-radioIndicator"></div>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                         <div class="py-3 px-3">
                                    <a href="#" class="btn btn-block btn-danger">Filter</a>
                                </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="game-tablet-view">
                    <div class="row mt-30 mb-60">
                        <div class="col-md-9 offset-md-3">
                            <div class="top-widget space50">
                                <form>
                                    <div class="search-bar">
                                        <input type="text" placeholder="Search..." id="search-text">
                                        <div class="search"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30">
                        <div class="col-md-3 offset-md-1">
                            <div class="filter">
                                <div class="vertical-filters">
                                    <span>FILTERS</span>
                                </div>
                                <div class="vertical-filters-filters provider-container">
                                    <a data-toggle="collapse" href="#providerCollapse" aria-expanded="false"
                                       aria-controls="myCollapseExample">
                                    <span class="vertical-filters-header">Provider <i
                                            class="fa fa-chevron-down"></i></span>
                                    </a>
                                    <ul class="brand-list collapse" id="providerCollapse">
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="netent">
                                                <label for="netent">Netent</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="betsoft">
                                                <label for="betsoft">Betsoft</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="micro">
                                                <label for="micro">Microgaming</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="play">
                                                <label for="play">Play n go</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="quickspin">
                                                <label for="quickspin">Quick Spin</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="ygg">
                                                <label for="ygg">Yggdrasil</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="redtiger">
                                                <label for="redtiger">Red Tiger</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="pragmatic">
                                                <label for="pragmatic">Pragmatic Play</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="genii">
                                                <label for="genii">Genii</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="nolimit">
                                                <label for="nolimit">Nolimit City</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="thunder">
                                                <label for="thunder">Thunderkick</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="isoftbet">
                                                <label for="isoftbet">iSoftBet</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="pushgaming">
                                                <label for="pushgaming">Push Gaming</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="relaxgaming">
                                                <label for="relaxgaming">Relax Gaming</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="bigtime">
                                                <label for="bigtime">Big Time Gaming</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="pgsoft">
                                                <label for="pgsoft">Pg Soft</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="ganpati">
                                                <label for="ganpati">Ganpati</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-group">
                                                <input type="checkbox" id="greenjade">
                                                <label for="greenjade">Green Jade</label>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                                <div class="vertical-filters-filters provider-container">
                                    <span class="vertical-filters-header">RTP</span>
                                    <ul class="brand-list">
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="highlow">High
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="lowhigh">Medium
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="lowhigh">Low
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                                <div class="vertical-filters-filters provider-container">
                                    <span class="vertical-filters-header">Volatility</span>
                                    <ul class="brand-list">
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="highlow">High
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="lowhigh">Medium
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="form-check-label rtp-label">
                                                <input name="status" type="radio" class="form-check-input"
                                                       value="lowhigh">Low
                                                <div class="common-radioIndicator"></div>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="{{url('single-game')}}">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="{{url('single-game')}}">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="{{url('single-game')}}">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-30">
                                    <div class="content">
                                        <a href="#" target="_blank">
                                            <div class="content-overlay"></div>
                                            <img class="content-image"
                                                 src="{{ asset('asset/frontend/img/games/quest.jpeg')}}">
                                            <div class="content-details fadeIn-top">
                                                <h5>Play demo</h5>
                                                <p>Read review</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-30">
                        <div class="col-md-10 offset-md-1">
                            <div class="popular-casino">
                                <h6>Popular Casino 2019</h6>
                                <ul class="casino-list">
                                    <li>
                                        <a href="" class="casino-widget">
                                            <div class="casino-top casino-inner">
                                                <img src="{{('../asset/frontend/img/logo/10-bet.jpg')}}"
                                                     alt="" class="casino-img">
                                                10Bet Casino
                                            </div>
                                            <div class="casino-bottom casino-inner">
                                                <svg class="casino-widget___svg" width="32"
                                                     height="32"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill-rule="evenodd" clip-rule="evenodd">
                                                    <path
                                                        d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                        fill="#fff">
                                                    </path>
                                                </svg>
                                                100% up to C$100 Bonus
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="casino-widget">
                                            <div class="casino-top casino-inner">
                                                <img src="{{('../asset/frontend/img/logo/21com.jpg')}}"
                                                     alt="" class="casino-img">
                                                21.com Casino
                                            </div>
                                            <div class="casino-bottom casino-inner">
                                                <svg class="casino-widget___svg" width="32"
                                                     height="32"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill-rule="evenodd" clip-rule="evenodd">
                                                    <path
                                                        d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                        fill="#fff">
                                                    </path>
                                                </svg>
                                                122% up to C$300 Bonus + 210 Free Spins
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="" class="casino-widget">
                                            <div class="casino-top casino-inner">
                                                <img src="{{('../asset/frontend/img/logo/22bet.jpg')}}"
                                                     alt="" class="casino-img">
                                                22Bet Casino
                                            </div>
                                            <div class="casino-bottom casino-inner">
                                                <svg class="casino-widget___svg" width="32"
                                                     height="32"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     fill-rule="evenodd" clip-rule="evenodd">
                                                    <path
                                                        d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                        fill="#fff">
                                                    </path>
                                                </svg>
                                                122% up to C$300 Bonus
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

