@extends('layouts.frontend')

@section('title','Casino Bonus')
@section('meta_tags')
    <title>{{ $games->seo_title }}</title>
    <meta content="{{ $games->seo_keyword }}" name="keywords">
    <meta content="{{ $games->seo_description }}" name="description">
@endsection
@section('content')
    <section id="single-game-section">
        <div class="game-top-banner" style="background: url('{{ $games->bg_image ? $games->bg_image->url : '' }}') no-repeat center center / cover;">
            <div class="game-banner-content position-absolute">
                <img class="game-bg-logo" src="{{ $games->bg_image_logo ? $games->bg_image_logo->url : asset('asset/frontend/img/logo/game.png') }}" alt="{{ $games->bg_image_logo_alt_text }}">
                <h1>{{$games->bg_image_text}}</h1>
                <button onclick="window.location.href = '{{$games->bg_image_button_link}}'" target="_blank" class="play-single-btn">{{$games->bg_image_button_text}}</button>
            </div>
        </div>

        <div class="single-game-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 offset-md-2 pull-md-2">
                        {{--<div class="play-game-frame">
                           <h4>Game Frame Section</h4>
                        </div>--}}
                        @if($games->game_link)
                        <iframe
                            src="{{$games->game_link}}"
                            class="game-frame"></iframe>
                        @endif    

                        <div class="play-game-content">
                            <h2>{{$games->name}}</h2>
                            <table class="table-responsive single-game-table d-none d-lg-block d-xl-block">
                                <tr>
                                    <td>RTP (Tilbakebetalingsprosent)</td>
                                    <td>{{$games->rtp_game}}</td>
                                </tr>
                                <tr>
                                    <td>Layout</td>
                                    <td>{{$games->layout}}</td>
                                </tr>
                                <tr>
                                    <td>Gevinstlinjer</td>
                                    <td>{{$games->gevinstlinjer}}</td>
                                </tr>
                                <tr>
                                    <td>Maks mynt gevinst</td>
                                    <td>{{$games->maks_mynt_gevinst}}</td>
                                </tr>
                                <tr>
                                    <td>Volatilitet</td>
                                    <td>{{$games->volatilitet_game}}</td>
                                </tr>
                                <tr>
                                    <td>Min. innsats</td>
                                    <td>{{$games->min_innsats}}</td>
                                </tr>
                                <tr>
                                    <td>Maks innsats</td>
                                    <td>{{$games->maks_innsats}}</td>
                                </tr>
                            </table>
                            <div class="play-game-list mobile-game-table d-lg-none d-xl-none">
                                <p>RTP (Tilbakebetalingsprosent) <span>{{$games->rtp_game}}</span></p>
                                <p>Layout <span>{{$games->layout}}</span></p>
                                <p>Gevinstlinjer <span>{{$games->gevinstlinjer}}</span></p>
                                <p>Maks mynt gevinst <span>{{$games->maks_mynt_gevinst}}</span></p>
                                <p>Volatilitet <span>{{$games->volatilitet_game}}</span></p>
                                <p>Min. innsats <span>{{$games->min_innsats}}</span></p>
                                <p>Maks innsats <span>{{$games->maks_innsats}}</span></p>
                            </div>
                            {!! $games->description !!}
                            {{-- <p>Gonzo's Quest har et Sør- Amerikansk azteker tema der vi blir med eventyreren Gonzo på
                                jakt etter Eldorado, en by som er fullstendig dekket av gull!. Spillet var det første av
                                sitt slag som var basert på en "skred" funksjon ( avalanche), og ble lansert i 2013 av
                                den svenske spillprodusenten NetEnt. Med sitt innovative spilleoppsett, lekker grafikk
                                og store gevinster, ble denne spilleautomaten raskt en stor hit blant gamblere på nett,
                                og er fortsatt den dag i dag en av de mest populære spilleautomatene for nordmenn. </p>
                            <h4>Spilleoppsett</h4>
                            <p>Gonzo's Quest har fem rekker vannrett og 3 rader ned. På denne spilleautomaten er det
                                altså ingen hjul. Her ramler det ned store steinblokker inn på spillbrettet hver gang du
                                trykker på spinn knappen, og nye faller på plass for hvert spinn. Dette kalles en skred
                                funksjon istedenfor hjul som spinner og stopper opp på visse symboler.

                                Spillet har totalt 20 gevinstlinjer som betales fra venstre til høyre og byr på rikelig
                                med muligheter for å justere innsats mellom 2- 500 kroner per spinn. For å justere
                                myntverdiene bruker du "Level" og "Coin value" tastene som du finner på hver sin side av
                                spinn knappen i midten.
                                Spillet har også en autospinn funksjon hvor du kan velge at spilleautomaten kjører 10-
                                1000 spinn uten at du trenger å trykke på spinn knappen. Du har også en egen knapp for
                                Max Bet som velger automatisk høyeste innsats i spillet når du spinner.
                            </p>
                            <h4>Bonusfunksjoner på Gonzo's Quest</h4>
                            <p>Avalanche- For hver gang du spinner og får en gevinst, får du ytterligere en sjanse i
                                spillet uten at dette koster deg noe. Denne funksjonen kalles da "Avalanche Freefall".
                                Øverst til høyre har du i tillegg en multiplikator stige som øker for hver eneste gang
                                du lander gevinst, uten at du behøver å spinne på nytt. </p>
                            <p>
                                Free Fall Symbolet - Dette symbolet fungerer som en scatter, hvor du får 10 free falls
                                om du lander minst 3 av disse i radene. Disse symbolene må da lande i en av
                                gevinstlinjene, og trigges ikke om de kommer vilkårlig plassert i spillet slik som en
                                vanlig scatter på spilleautomater.
                            </p>
                            <p>Wild Symbol- Denne erstatter alle andre symboler i spillet som kan utbetale gevinst. Den
                                erstatter ikke Free Fall symbolet.</p>
                            <h4>Gevinstmuligheter</h4>
                            <p>Gonso'z Quest byr på 187 500 mynter i toppgevinst. selv om RTP er noe lav og få
                                gevinstlinjer, har du bonusfunksjoner i spillet som hjelper deg ofte for å holde ut
                                lengre i spillet.
                                Hoved Symbolene i spillet er gudebilder innrisset i steinblokkene som ramler ned på
                                hjulene.
                            </p>
                            <p>Utbetalingene er fra:
                            <ul>
                                <li>3- 50 x linje innsats med tre like</li>
                                <li>10- 250 x linje innsats med 4 like</li>
                                <li>50- 2500 x innsats per linje om du får 5 like symboler</li>
                            </ul>
                            </p>
                            <p>Spiller du med 2 kroner per spinn, blir dette fordelt på 20 gevinstlinjer, altså 0,2
                                kroner per linje. Slik kan du beregne hvor stor utbetalingene blir på de forskjellige
                                symbolene i spillet. I tillegg kan du få multiplikatorer opptil 15 ganger innsats om du
                                lander gevinster under Free Falls, noe som virkelig setter fart på spillkontoen.</p> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
