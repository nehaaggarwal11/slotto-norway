@extends('layouts.frontend')

@section('title','Review Page')
@section('meta_tags')
    <title>{{ $sport->seo_title }}</title>
    <meta content="{{ $sport->seo_keyword }}" name="keywords">
    <meta content="{{ $sport->seo_description }}" name="description">
@endsection
@section('content')
    <section id="review-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 mb-30 offset-lg-1">
                    <div class="top-banner sport-top-banner" style="background-image: url('{{ @$sport->bg_image->url }}');">
                        <div class="casino-content position-absolute">
                            <h1>{{ $sport->name }}</h1>
                            <div class="casino-rating">
                                <div class="casino-star-rating">
                                    @if($sport->rating)
                                        <p>
                                            @for($i = 0; $i < $sport->rating; $i++)
                                                <span class="fa fa-star text-orange"></span>
                                            @endfor
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <div class="casino-bonus sport-bonus">
                                <i class="fa fa-2x fa-gift" aria-hidden="true"></i>
                                <span class="bonus-amount">{{ $sport->banner_info }}</span>
                                {{--<span class="bonus-amount">Up to {{ $sport->bonus }}% Bonus</span>
                                <span class="spins-amount">+ {{ $sport->spins }} Free Spins</span>--}}
                            </div>
                            <div class="review-casino-btn sport-casino-btn">
                                <button class="btn btn-primary play-btn mx-auto d-block" onclick="window.location.href ='{{$sport->link}}'">Spill Nå</button>
                            </div>
                        </div>
                        <div class="casino-logo position-absolute">
                        <img src="{{ @$sport->logo_image->url }}" alt="{{ @$sport->logo_image_alt_text }}">
                        </div>
                    </div>

                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-overview"><i class="fa fa-eye" aria-hidden="true"></i> Oversikt</a>
                        <a class="nav-item nav-link" data-toggle="tab" href="#nav-details"><i class="fa fa-bars" aria-hidden="true"></i> Detaljer</a>
                    </div>

                    <div class="tab-content" id="nav-tab-review-content">
                        <div class="tab-pane fade show active" id="nav-overview" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="casino-review-tab">
                                <h6><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Casino Anmeldelse</h6>
                                {!! $sport->overview !!}
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="nav-details" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="detail-review-tab">
                                <h6><i class="fa fa-tasks" aria-hidden="true"></i> Detaljer</h6>
                                {!! $sport->detail !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    @include('partials.popular-casino-widget')
                </div>
            </div>
        </div>
    </section>

@endsection
