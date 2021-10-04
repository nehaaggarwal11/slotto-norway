@extends('layouts.frontend')

@section('title','News')
@section('meta_tags')
<title>{{ $news->seo_title }}</title>
<meta content="{{ $news->seo_keyword }}" name="keywords">
<meta content="{{ $news->seo_description }}" name="description">
@endsection
@section('content')
@if(session('success'))
<div class="alert alert-success mt-4" role="alert" id="success-msg">
    {{ session('success') }}
</div>
@endif
<section id="single-news-section">
    <div class="container-fluid">
        <div class="news-allscreen-view">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 offset-lg-1">
                    <div class="top-banner"
                        aria-label="{{ $news->bg_image_alt_text }}"
                        style="background-image: url('{{ @$news->bg_image->url }}');">
                    </div>

                    <div class="entry-main">
                        <div class="entry-meta"></div>
                        <div class="entry-header">
                            <h1>{{$news->name}}</h1>
                        </div>
                        <div class="entry-content">
                            {!! $news->description !!}
                        </div>
                    </div>
                    <div class="section-comment">
                        <h2>Kommentarer <span>({{ $comments->count() }})</span>
                        </h2>
                        <ul class="comments-list list-unstyled">
                            @foreach($comments as $comment)
                            <li>
                                <article class="comment clearfix">
                                    <div class="comment-inner">
                                        <header class="comment-header">
                                            <cite
                                                class="comment-author">{{ $comment->name }}</cite>
                                            <time class="comment-datetime"
                                                datetime="2019-10-27">{{ $comment->created_at->format('F d, Y') }}
                                            </time>
                                        </header>
                                        <div class="comment-body">
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="section-reply-form">
                        <h2>Legg igjen kommentar</h2>
                        <form action="{{ route("frontend.news.comment") }}"
                            method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Navn</label>
                                        <input type="text" name="name"
                                            class="form-control">
                                        <input type="hidden" name="news_id"
                                            value="{{ $news->id }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>E- post</label>
                                        <input type="email" name="email"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kommentarer</label>
                                        <textarea class="form-control"
                                            name="comment" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" id="netent">
                                    <label id="accept-label" for="netent">Jeg
                                        aksepterer <a
                                            href="{{ route('frontend.page.terms') }}">vilkår</a>
                                        and <a
                                            href="{{ route('frontend.page.privacy-policy') }}">Personvernerklæring</a>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-comment"
                                        value="Send inn">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 mt-4">
                    @include('partials.popular-casino-widget')
                </div>
            </div>
        </div>

        <div class="news-tablet-view">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="top-banner"
                        aria-label="{{ $news->bg_image_alt_text }}"
                        style="background-image: url('{{ @$news->bg_image->url }}');">
                    </div>
                    <div class="entry-main">
                        <div class="entry-meta"></div>
                        <div class="entry-header">
                            <h2>{{$news->name}}</h2>
                        </div>
                        <div class="entry-content">
                            {!! $news->description !!}
                        </div>
                    </div>

                    <div class="section-comment">
                        <h2>Kommentarer <span>({{ $comments->count() }})</span>
                        </h2>
                        <ul class="comments-list list-unstyled">
                            @foreach($comments as $comment)
                            <li>
                                <article class="comment clearfix">
                                    <div class="comment-inner">
                                        <header class="comment-header">
                                            <cite
                                                class="comment-author">{{ $comment->name }}</cite>
                                            <time class="comment-datetime"
                                                datetime="2019-10-27">{{ $comment->created_at->format('F d, Y') }}
                                            </time>
                                        </header>
                                        <div class="comment-body">
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                </article>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="section-reply-form">
                        <h2>Legg igjen kommentar</h2>
                        <form action="{{ route("frontend.news.comment") }}"
                            method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Navn</label>
                                        <input type="text" name="name"
                                            class="form-control">
                                        <input type="hidden" name="news_id"
                                            value="{{ $news->id }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>E- post</label>
                                        <input type="email" name="email"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Kommentarer</label>
                                        <textarea class="form-control"
                                            name="comment" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="checkbox" id="netent">
                                    <label id="accept-label" for="netent">Jeg
                                        aksepterer <a
                                            href="{{ route('frontend.page.terms') }}">vilkår</a>
                                        and <a
                                            href="{{ route('frontend.page.privacy-policy') }}">Personvernerklæring</a>
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-comment"
                                        value="Send inn">
                                </div>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="row mt-30">
                <div class="col-md-10 offset-md-1">
                    @include('partials.popular-casino-widget')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection