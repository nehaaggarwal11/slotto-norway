@extends('layouts.frontend')

@section('title','Terms Page')
@section('meta_tags')
    <title>{{ $terms->seo_title }}</title>
    <meta content="{{ $terms->seo_keyword }}" name="keywords">
    <meta content="{{ $terms->seo_description }}" name="description">
@endsection
@section('content')
    <section id="terms-section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>{{ @$terms->heading}}</h1>
                    {!! @$terms->terms_description !!}


                </div>
            </div>
        </div>
    </section>

@endsection
