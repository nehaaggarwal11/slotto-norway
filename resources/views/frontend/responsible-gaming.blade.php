@extends('layouts.frontend')
@section('title','Privacy Policy Page')
@section('meta_tags')
    <title>{{ $responsible->seo_title }}</title>
    <meta content="{{ $responsible->seo_keyword }}" name="keywords">
    <meta content="{{ $responsible->seo_description }}" name="description">
@endsection
@section('content')
    <section id="responsible-section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ @$responsible->heading}}</h1>
                    {!! @$responsible->responsible_gaming_description !!}
                </div>
            </div>
        </div>
    </section>

@endsection
