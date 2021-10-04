@extends('layouts.frontend')

@section('title','FAQ Page')
@section('meta_tags')
    <title>{{ @$data->seo_title }}</title>
    <meta content="{{ @$data->seo_keyword }}" name="keywords">
    <meta content="{{ @$data->seo_description }}" name="description">
@endsection
@section('content')
    <section id="faq-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7 offset-md-1 faq_content">
                    <h1>{{ $data->heading }}</h1>
                    <div class="faq-accordion">
                        <div class="panel-group" id="accordion" role="tablist"
                                aria-multiselectable="true">
                            @foreach($faq_questions as $faqs) 
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab"
                                        id="heading{{ $faqs->id }}">
                                        <h4 class="panel-title">
                                            <a class="collapsed" data-toggle="collapse"
                                            data-parent="#accordion"
                                            href="#collapse{{ $faqs->id }}"
                                            aria-expanded="false"
                                            aria-controls="collapse{{ $faqs->id }}">{{ $faqs->question }}
                                            </a>
                                        </h4>

                                    </div>
                                    <div id="collapse{{ $faqs->id }}"
                                        class="panel-collapse collapse" role="tabpanel"
                                        aria-labelledby="heading{{ $faqs->id }}">
                                        <div class="panel-body">
                                            <p>{{ $faqs->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach 
                        </div>
                    </div>
                </div>
                <div class="col-md-3 faq_popular_casino">
                    @include('partials.popular-casino-widget')
                </div>
            </div>
        </div>
    </section>

@endsection
