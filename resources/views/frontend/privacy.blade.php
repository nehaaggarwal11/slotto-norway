@extends('layouts.frontend')

@section('title','Privacy Policy Page')
@section('meta_tags')
    <title>{{ $privacy->seo_title }}</title>
    <meta content="{{ $privacy->seo_keyword }}" name="keywords">
    <meta content="{{ $privacy->seo_description }}" name="description">
@endsection
@section('content')
    <section id="privacy-section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ @$privacy->heading }}</h1>
                    {!! @$privacy->privacy_description !!}

                </div>
            </div>
        </div>
    </section>

@endsection
