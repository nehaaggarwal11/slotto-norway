@extends('layouts.frontend')

@section('title','Site Map')
@section('content')
<section id="site-map-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="section-title-item">
                    <h2 class="section-title" style="display: block;">Nettstedskart
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <ul class="category-section">
                    <li><h3>Casino</h3>
                    <ul class="subcategory-section">
                        <li><a href="{{url ('casino-bonus')}}">Casino Bonus</a>
                        <ul class="nestedsubcategory-section">
                            <li>Casino 1</li>
                            <li>Casino 2</li>
                        </ul>
                        </li>
                        <li><a href="{{url ('new-casino')}}">Nye Casino</a>
                            <ul class="nestedsubcategory-section">
                                <li>Casino 1</li>
                                <li>Casino 2</li>
                            </ul>
                        </li>
                    </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="category-section">
                    <li><h3>Games</h3>
                        <ul class="subcategory-section">
                            <li><a href="{{url ('games')}}">Alle Spill</a>
                                <ul class="nestedsubcategory-section">
                                    <li>Spill 1</li>
                                    <li>Spill 2</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="category-section">
                    <li><h3>News</h3>
                        <ul class="subcategory-section">
                            <li><a href="{{url ('news')}}">Alle Nyheter</a>
                                <ul class="nestedsubcategory-section">
                                    <li>Nyheter 1</li>
                                    <li>Nyheter 2</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="category-section">
                    <li><h3>Pages</h3>
                        <ul class="subcategory-section">
                            <li><a href="{{url ('about')}}">Om Oss</a></li>
                            <li><a href="{{url ('faq')}}">FAQ</a></li>
                            <li><a href="{{url ('responsible-gaming')}}">Ansvarlig Spill</a></li>
                            <li><a href="{{url ('general')}}">Generell Informasjon</a></li>
                            <li><a href="{{url ('privacy')}}">Personvernerklæring</a></li>
                            <li><a href="{{url ('terms')}}">Vilkår og Betingelser</a></li>
                            <li><a href="#">Informasjonskapsler</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
