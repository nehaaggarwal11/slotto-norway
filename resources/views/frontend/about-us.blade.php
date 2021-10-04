@extends('layouts.frontend')

@section('title','About Page')
@section('meta_tags')
    <title>{{ $about->seo_title }}</title>
    <meta content="{{ $about->seo_keyword }}" name="keywords">
    <meta content="{{ $about->seo_description }}" name="description">
@endsection
@section('content')
    <style> ul {
            color: white;
        }

        #about-section-page p {
            font-weight: normal;
        }</style>
    <section id="about-section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ $about->heading }}</h1>
                    {!! $about->about_description !!}
                </div>
            </div>
        </div>
    </section>
@endsection
