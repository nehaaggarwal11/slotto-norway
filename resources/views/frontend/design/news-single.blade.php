@extends('layouts.frontend')

@section('title','Casino Bonus')
@section('content')
    <section id="single-news-section">
        <div class="container-fluid">
            <div class="news-allscreen-view">
                <div class="row">
                    <div class="col-md-8 offset-md-1">
                        <div class="top-banner"></div>
                        <div class="entry-main">
                            <div class="entry-meta"></div>
                            <div class="entry-header">
                                <h2>Get great
                                    casino bonuses and play Christmas
                                    slots</h2>
                            </div>
                            <div class="entry-content">
                                <p>Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip duis aute irure dolor in reprehenderit.</p>
                                <p>Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip duis aute irure dolor in reprehenderit.</p>
                                <p>Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip duis aute irure dolor in reprehenderit.</p>
                                <p>Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip duis aute irure dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="section-comment">
                            <h2>Comments <span>(3)</span></h2>
                            <ul class="comments-list list-unstyled">
                                <li>
                                    <article class="comment clearfix">
                                        <div class="comment-inner">
                                            <header class="comment-header">
                                                <cite class="comment-author">Alex Leepman</cite>
                                                <time class="comment-datetime" datetime="2019-10-27">January 30, 2019 at
                                                    3:48pm
                                                </time>
                                            </header>
                                            <div class="comment-body">
                                                <p>Voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur
                                                    sint occaecat cupidatat non proident culpa qui officia deserunt
                                                    mollit
                                                    anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <ul class="children list-unstyled">
                                        <li>
                                            <article class="comment clearfix">
                                                <div class="comment-inner">
                                                    <header class="comment-header">
                                                        <cite class="comment-author">Marya Hasman</cite>
                                                        <time class="comment-datetime" datetime="2019-10-27">January 30,
                                                            2019 at 3:48pm
                                                        </time>
                                                    </header>
                                                    <div class="comment-body">
                                                        <p>Voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                            excepteur sint occaecat cupidatat non proident culpa qui
                                                            officia
                                                            deserunt mollit anim id est laborum.</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <article class="comment clearfix">
                                        <div class="comment-inner">
                                            <header class="comment-header">
                                                <cite class="comment-author">William Henry</cite>
                                                <time class="comment-datetime" datetime="2019-10-27">January 30, 2019 at
                                                    3:48pm
                                                </time>
                                            </header>
                                            <div class="comment-body">
                                                <p>Voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur
                                                    sint occaecat cupidatat non proident culpa qui officia deserunt
                                                    mollit
                                                    anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                        <div class="section-reply-form">
                            <h2>Leave a Comment</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Comments</label>
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="checkbox" id="netent">
                                        <label id="accept-label" for="netent">I accept <a href="{{url('terms')}}">terms
                                                &
                                                conditions</a> and <a
                                                href="{{url('privacy')}}">privacy policy</a> </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-comment" value="Submit">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
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

            <div class="news-tablet-view">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="top-banner"></div>
                        <div class="entry-main">
                            <div class="entry-meta"></div>
                            <div class="entry-header">
                                <h2>Get great
                                    casino bonuses and play Christmas
                                    slots</h2>
                            </div>
                            <div class="entry-content">
                                <p>Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip duis aute irure dolor in reprehenderit.</p>
                                <p>Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip duis aute irure dolor in reprehenderit.</p>
                                <p>Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip duis aute irure dolor in reprehenderit.</p>
                                <p>Magna aliqua enim aduas veniam quis nostrud exercitation ullam laboris aliquip. Lorem
                                    ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip duis aute irure dolor in reprehenderit.</p>
                            </div>
                        </div>
                        <div class="section-comment">
                            <h2>Comments <span>(3)</span></h2>
                            <ul class="comments-list list-unstyled">
                                <li>
                                    <article class="comment clearfix">
                                        <div class="comment-inner">
                                            <header class="comment-header">
                                                <cite class="comment-author">Alex Leepman</cite>
                                                <time class="comment-datetime" datetime="2019-10-27">January 30, 2019 at
                                                    3:48pm
                                                </time>
                                            </header>
                                            <div class="comment-body">
                                                <p>Voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur
                                                    sint occaecat cupidatat non proident culpa qui officia deserunt
                                                    mollit
                                                    anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </article>
                                    <ul class="children list-unstyled">
                                        <li>
                                            <article class="comment clearfix">
                                                <div class="comment-inner">
                                                    <header class="comment-header">
                                                        <cite class="comment-author">Marya Hasman</cite>
                                                        <time class="comment-datetime" datetime="2019-10-27">January 30,
                                                            2019 at 3:48pm
                                                        </time>
                                                    </header>
                                                    <div class="comment-body">
                                                        <p>Voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                                            excepteur sint occaecat cupidatat non proident culpa qui
                                                            officia
                                                            deserunt mollit anim id est laborum.</p>
                                                    </div>
                                                </div>
                                            </article>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <article class="comment clearfix">
                                        <div class="comment-inner">
                                            <header class="comment-header">
                                                <cite class="comment-author">William Henry</cite>
                                                <time class="comment-datetime" datetime="2019-10-27">January 30, 2019 at
                                                    3:48pm
                                                </time>
                                            </header>
                                            <div class="comment-body">
                                                <p>Voluptate velit esse cillum dolore eu fugiat nulla pariatur excepteur
                                                    sint occaecat cupidatat non proident culpa qui officia deserunt
                                                    mollit
                                                    anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>
                        <div class="section-reply-form">
                            <h2>Leave a Comment</h2>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Comments</label>
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="checkbox" id="netent">
                                        <label id="accept-label" for="netent">I accept <a href="{{url('terms')}}">terms
                                                & conditions</a> and <a
                                                href="{{url('privacy')}}">privacy policy</a> </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-comment" value="Submit">
                                    </div>

                                </div>
                            </form>
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
    </section>
@endsection
