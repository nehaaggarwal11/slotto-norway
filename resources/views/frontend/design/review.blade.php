@extends('layouts.frontend')

@section('title','Review Page')
@section('content')
    <section id="review-section">
        <div class="container-fluid">
            <div class="review-allscreen-view">
                <div class="row">
                    <div class="col-md-8 offset-md-1">
                        <div class="top-banner">
                            <div class="casino-content position-absolute">
                                <h1>Dream Vegas Casino</h1>
                                <div class="casino-rating">
                                    <div class="casino-star-rating">
                                <span><i
                                        class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                    </div>
                                    <span class="star-status">
                                8/10
                            </span>
                                </div>
                                <div class="casino-bonus">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <span class="bonus-amount">Up to C$7,000 Bonus</span>
                                    <span class="spins-amount">+ 120 Free Spins</span>
                                </div>
                                <div class="review-casino-btn">
                                    <button class="btn btn-primary play-btn mx-auto d-block">Play Now</button>
                                </div>
                            </div>
                            <div class="casino-logo position-absolute">
                                <img src="{{('../asset/frontend/img/logo/dreamvegas.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab"
                               href="#nav-overview"><i class="fa fa-eye"
                                                       aria-hidden="true"></i> Overview</a>
                            <a class="nav-item nav-link" data-toggle="tab"
                               href="#nav-details"><i class="fa fa-bars"
                                                      aria-hidden="true"></i> Details</a>
                            {{--<a class="nav-item nav-link" data-toggle="tab"
                                href="#nav-reviews" aria-controls="nav-profile"><i
                                    class="fa fa-comments-o" aria-hidden="true"></i>
                                Reviews</a>--}}
                        </div>
                        <div class="tab-content" id="nav-tab-review-content">
                            <div class="tab-pane fade show active" id="nav-overview"
                                 role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="casino-review-tab">
                                    <h6><i class="fa fa-thumbs-o-up"
                                           aria-hidden="true"></i> Casino Review</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span class="plus-icon">+</span>
                                                    200% welcome offer up to CA$2500 +
                                                    50 bonus spins
                                                </li>
                                                <li>
                                                    <span class="plus-icon">+</span>
                                                    Live dealer games
                                                </li>
                                                <li>
                                                    <span class="plus-icon">+</span>
                                                    Mobile Friendly
                                                </li>
                                                <li>
                                                    <span class="plus-icon">+</span>
                                                    Licensed by MGA and UKGC
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span class="minus-icon">-</span>
                                                    Limited payment opions
                                                </li>
                                                <li>
                                                    <span class="minus-icon">-</span>
                                                    No telephone support
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-module">
                                        <p>
                                            With a huge C$7,000 welcome bonus and 120
                                            free spins available on your first three
                                            deposits, Dream Vegas Casino is certainly
                                            turning heads as well as reels. Plus the
                                            fact that it features more than 1,000 games,
                                            a wealth of payment methods for Canadian
                                            players and an excellent VIP Club for the
                                            high rollers among you means this brand is
                                            definitely worth checking out.
                                        </p>
                                        <p>
                                            While still relatively new, having been
                                            launched in 2018, this online casino holds
                                            three highly regarded licences: UKGC, MGA
                                            and Swedish Gaming Authority
                                            (Spelinspktionen). So, you can rest assured
                                            that everything is done by the book and your
                                            security is of paramount concern.
                                            So, if you’ve been dreaming of Vegas, but
                                            would rather not visit the real thing, look
                                            no further.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade show" id="nav-details"
                                 role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="detail-review-tab">
                                    <h6>
                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                        Details
                                    </h6>
                                    <div class="row details-items">
                                        <div class="col-md-3">
                                            <p><strong>Website</strong></p>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="#">
                                                https://www.dreamvegas.com
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row details-items">
                                        <div class="col-md-3">
                                            <p><strong>Website</strong></p>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="#">
                                                https://www.dreamvegas.com
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row details-items">
                                        <div class="col-md-3">
                                            <p><strong>Website</strong></p>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="#">
                                                https://www.dreamvegas.com
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row details-items">
                                        <div class="col-md-3">
                                            <p><strong>Website</strong></p>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="#">
                                                https://www.dreamvegas.com
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--<div class="tab-pane fade show" id="nav-reviews"
                                role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="user-review-div">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                                        class="img img-rounded img-fluid review-user-img" />
                                                    <p
                                                        class="text-secondary review-time">
                                                        15 Minutes Ago</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <p>
                                                        <a class="float-left"
                                                            href="#"><strong>User
                                                                1</strong></a>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <p class="review-comment">Lorem
                                                        Ipsum is simply dummy text
                                                        of the pr make but also the leap
                                                        into electronic typesetting,
                                                        remaining essentially unchanged.
                                                        It was popularised in the 1960s
                                                        with the release of Letraset
                                                        sheets containing Lorem Ipsum
                                                        passages, and more recently with
                                                        desktop publishing software like
                                                        Aldus PageMaker including
                                                        versions of Lorem Ipsum.</p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                                        class="img img-rounded img-fluid review-user-img" />
                                                    <p
                                                        class="text-secondary review-time">
                                                        15 Minutes Ago</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <p>
                                                        <a class="float-left"
                                                            href="#"><strong>User
                                                                1</strong></a>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <p class="review-comment">Lorem
                                                        Ipsum is simply dummy text
                                                        of the pr make but also the leap
                                                        into electronic typesetting,
                                                        remaining essentially unchanged.
                                                        It was popularised in the 1960s
                                                        with the release of Letraset
                                                        sheets containing Lorem Ipsum
                                                        passages, and more recently with
                                                        desktop publishing software like
                                                        Aldus PageMaker including
                                                        versions of Lorem Ipsum.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-review-tab">
                                    <h6>Leave a Comment</h6>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Comment</label>
                                            <textarea class="form-control" name="" id=""
                                                cols="20" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Websites</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <button type="button" class="btn-submit">Submit
                                            Comment</button>
                                    </form>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="popular-casino">
                            <h6>Popular Casino 2019</h6>
                            <ul class="casino-list">
                                <li>
                                    <a href="" class="casino-widget">
                                        <div class="casino-top casino-inner">
                                            <img src="{{asset('asset/frontend/img/logo/10-bet.jpg')}}"
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
                                            <img src="{{asset('asset/frontend/img/logo/21com.jpg')}}"
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
                                            <img src="{{asset('asset/frontend/img/logo/22bet.jpg')}}"
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

            <div class="review-tablet-view">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="top-banner">
                            <div class="casino-content position-absolute">
                                <h1>Dream Vegas Casino</h1>
                                <div class="casino-rating">
                                    <div class="casino-star-rating">
                                <span><i
                                        class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                        <span><i
                                                class="text-warning fa fa-star"></i></span>
                                    </div>
                                    <span class="star-status">
                                8/10
                            </span>
                                </div>
                                <div class="casino-bonus">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <span class="bonus-amount">Up to C$7,000 Bonus</span>
                                    <span class="spins-amount">+ 120 Free Spins</span>
                                </div>
                                <div class="review-casino-btn">
                                    <button class="btn btn-primary play-btn mx-auto d-block">Play Now</button>
                                </div>
                            </div>
                            <div class="casino-logo position-absolute">
                                <img src="{{('../asset/frontend/img/logo/dreamvegas.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" data-toggle="tab"
                               href="#nav-overview"><i class="fa fa-eye"
                                                       aria-hidden="true"></i> Overview</a>
                            <a class="nav-item nav-link" data-toggle="tab"
                               href="#nav-details"><i class="fa fa-bars"
                                                      aria-hidden="true"></i> Details</a>
                            {{--<a class="nav-item nav-link" data-toggle="tab"
                                href="#nav-reviews" aria-controls="nav-profile"><i
                                    class="fa fa-comments-o" aria-hidden="true"></i>
                                Reviews</a>--}}
                        </div>
                        <div class="tab-content" id="nav-tab-review-content">
                            <div class="tab-pane fade show active" id="nav-overview"
                                 role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="casino-review-tab">
                                    <h6><i class="fa fa-thumbs-o-up"
                                           aria-hidden="true"></i> Casino Review</h6>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span class="plus-icon">+</span>
                                                    200% welcome offer up to CA$2500 +
                                                    50 bonus spins
                                                </li>
                                                <li>
                                                    <span class="plus-icon">+</span>
                                                    Live dealer games
                                                </li>
                                                <li>
                                                    <span class="plus-icon">+</span>
                                                    Mobile Friendly
                                                </li>
                                                <li>
                                                    <span class="plus-icon">+</span>
                                                    Licensed by MGA and UKGC
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <span class="minus-icon">-</span>
                                                    Limited payment opions
                                                </li>
                                                <li>
                                                    <span class="minus-icon">-</span>
                                                    No telephone support
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-module">
                                        <p>
                                            With a huge C$7,000 welcome bonus and 120
                                            free spins available on your first three
                                            deposits, Dream Vegas Casino is certainly
                                            turning heads as well as reels. Plus the
                                            fact that it features more than 1,000 games,
                                            a wealth of payment methods for Canadian
                                            players and an excellent VIP Club for the
                                            high rollers among you means this brand is
                                            definitely worth checking out.
                                        </p>
                                        <p>
                                            While still relatively new, having been
                                            launched in 2018, this online casino holds
                                            three highly regarded licences: UKGC, MGA
                                            and Swedish Gaming Authority
                                            (Spelinspktionen). So, you can rest assured
                                            that everything is done by the book and your
                                            security is of paramount concern.
                                            So, if you’ve been dreaming of Vegas, but
                                            would rather not visit the real thing, look
                                            no further.
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade show" id="nav-details"
                                 role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="detail-review-tab">
                                    <h6>
                                        <i class="fa fa-tasks" aria-hidden="true"></i>
                                        Details
                                    </h6>
                                    <div class="row details-items">
                                        <div class="col-md-3">
                                            <p><strong>Website</strong></p>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="#">
                                                https://www.dreamvegas.com
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row details-items">
                                        <div class="col-md-3">
                                            <p><strong>Website</strong></p>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="#">
                                                https://www.dreamvegas.com
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row details-items">
                                        <div class="col-md-3">
                                            <p><strong>Website</strong></p>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="#">
                                                https://www.dreamvegas.com
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row details-items">
                                        <div class="col-md-3">
                                            <p><strong>Website</strong></p>
                                        </div>
                                        <div class="col-md-9">
                                            <a href="#">
                                                https://www.dreamvegas.com
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--<div class="tab-pane fade show" id="nav-reviews"
                                role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="user-review-div">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                                        class="img img-rounded img-fluid review-user-img" />
                                                    <p
                                                        class="text-secondary review-time">
                                                        15 Minutes Ago</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <p>
                                                        <a class="float-left"
                                                            href="#"><strong>User
                                                                1</strong></a>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <p class="review-comment">Lorem
                                                        Ipsum is simply dummy text
                                                        of the pr make but also the leap
                                                        into electronic typesetting,
                                                        remaining essentially unchanged.
                                                        It was popularised in the 1960s
                                                        with the release of Letraset
                                                        sheets containing Lorem Ipsum
                                                        passages, and more recently with
                                                        desktop publishing software like
                                                        Aldus PageMaker including
                                                        versions of Lorem Ipsum.</p>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                                        class="img img-rounded img-fluid review-user-img" />
                                                    <p
                                                        class="text-secondary review-time">
                                                        15 Minutes Ago</p>
                                                </div>
                                                <div class="col-md-10">
                                                    <p>
                                                        <a class="float-left"
                                                            href="#"><strong>User
                                                                1</strong></a>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                        <span class="float-right"><i
                                                                class="text-warning fa fa-star"></i></span>
                                                    </p>
                                                    <div class="clearfix"></div>
                                                    <p class="review-comment">Lorem
                                                        Ipsum is simply dummy text
                                                        of the pr make but also the leap
                                                        into electronic typesetting,
                                                        remaining essentially unchanged.
                                                        It was popularised in the 1960s
                                                        with the release of Letraset
                                                        sheets containing Lorem Ipsum
                                                        passages, and more recently with
                                                        desktop publishing software like
                                                        Aldus PageMaker including
                                                        versions of Lorem Ipsum.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-review-tab">
                                    <h6>Leave a Comment</h6>
                                    <form action="">
                                        <div class="form-group">
                                            <label for="">Comment</label>
                                            <textarea class="form-control" name="" id=""
                                                cols="20" rows="10"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Websites</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <button type="button" class="btn-submit">Submit
                                            Comment</button>
                                    </form>
                                </div>
                            </div>--}}
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
