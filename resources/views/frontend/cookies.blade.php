@extends('layouts.frontend')

@section('title','Cookies Page')
@section('meta_tags')
    <title>{{ @$cookies->seo_title }}</title>
    <meta content="{{ @$cookies->seo_keyword }}" name="keywords">
    <meta content="{{ @$cookies->seo_description }}" name="description">
@endsection
@section('content')
    <section id="cookie-section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ @$cookies->heading }}</h1>
                    {!! @$cookies->cookies_description !!}
                </div>
            </div>
        </div>
    </section>
@endsection
