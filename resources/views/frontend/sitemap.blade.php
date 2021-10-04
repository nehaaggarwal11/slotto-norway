@extends('layouts.frontend')

@section('title','Sitemap')
@section('meta_tags')
    <title>{{ @$sitemap->seo_title }}</title>
    <meta content="{{ @$sitemap->seo_keyword }}" name="keywords">
    <meta content="{{ @$sitemap->seo_description }}" name="description">
@endsection
@section('content')
<style>
    #site-map-section h3, #site-map-section p a {color: #fff; text-align: left;}
    #site-map-section h3 {font-weight: 600;font-size: 24px;text-decoration: underline;}
    #site-map-section p {margin-bottom:10px}
    #site-map-section p a {transition: none;font-size: 20px;font-weight: bold;}
    #site-map-section p a:hover, #site-map-section p a:focus {color: #da1f15;}
</style>
<section id="site-map-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title-item">
                    <h1 class="section-title">{{ $sitemap->heading }}</h1>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-3">
                <h3>CASINOS</h3>
                @foreach($casinos as $casino)
                    <p><a href="{{ $casino->route }}" target="_blank">{{ $casino->name }}</a></p>
                @endforeach
            </div>
            <div class="col-md-3">
                <h3>Spill</h3>
                @foreach($games as $game)
                    <p><a href="{{ $game->route }}" target="_blank">{{ $game->name }}</a></p>
                @endforeach
            </div>
            <div class="col-md-3">
                <h3>Nyheter</h3>
                @foreach($news as $new)
                    <p><a href="{{ $new->route }}" target="_blank">{{ $new->name }}</a></p>
                @endforeach
            </div>
            <div class="col-md-3">
                <h3>Sider</h3>
                <p><a href="{{ route('frontend.page.about-us') }}" target="_blank">Om Oss</a></p>
                <p><a href="{{ route('frontend.faq')}}" target="_blank">FAQ</a></p>
                <p><a href="{{ route('frontend.page.responsible-gaming')}}" target="_blank">Ansvarpg Spill</a></p>
                <p><a href="{{ route('frontend.page.general-information')}}" target="_blank">Generell Informasjon</a></p>
                <p><a href="{{ route('frontend.page.privacy-policy')}}" target="_blank">Personvernerklæring</a></p>
                <p><a href="{{ route('frontend.page.terms')}}" target="_blank">Vilkår og Betingelser</a></p>
                <p><a href="{{ route('frontend.page.cookies')}}" target="_blank">Informasjonskapsler</a></p>
            </div>
        </div>
    </div>
</section>
@endsection
