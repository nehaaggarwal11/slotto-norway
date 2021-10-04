@extends('layouts.frontend')

@section('title','General Information Page')
@section('meta_tags')
    <title>{{ $general->seo_title }}</title>
    <meta content="{{ $general->seo_keyword }}" name="keywords">
    <meta content="{{ $general->seo_description }}" name="description">
@endsection
@section('content')
    <section id="general-section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ @$general->heading }}</h1>
                    {!! @$general->general_description !!}
                </div>
            </div>
        </div>
    </section>

@endsection
