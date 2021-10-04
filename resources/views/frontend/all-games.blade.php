@extends('layouts.frontend')

@section('title','All Games')
@section('meta_tags')
    <title>{{ $data->seo_title }}</title>
    <meta content="{{ $data->seo_keyword }}" name="keywords">
    <meta content="{{ $data->seo_description }}" name="description">
@endsection
@section('content')
    <section id="games-new-section">
        @php($bg_image = \App\StaticPage::getMediaField('all-game', 'bg_image'))
        <div class="game-top-banner" style="background: url('{{ $bg_image->url }}') no-repeat center center / cover;" aria-label="{{ @$data->bg_image_alt_text }}">
            <div class="game-banner-content position-absolute">
                <h1>{{ @$data->bg_image_heading }}</h1>
                <p>{{ @$data->bg_image_text }} </p>
            </div>
        </div>
        <div class="games-section-content">
            <div class="container-fluid">

                <div class="row mt-30 mb-60">
                    <div class="offset-md-3 col-md-3">
                        <div class="top-widget space50">
                            <form>
                                <div class="search-bar">
                                    <input type="text" placeholder="Søk..." id="search">
                                    <div class="search"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row mt-30">
                    <div class="col-md-2 filter-screen">
                        <form method="post" action="{{ route('frontend.all-games') }}" id="games_filter_form">
                          @csrf
                            <div class="filter">
                                <div class="vertical-filters">
                                    <span>Filter</span>
                                    <a href="{{ route('frontend.all-games') }}" class="float-right reset-filter">Nullstill
                                    </a>
                                </div>
                                <div class="vertical-filters-filters provider-container">
                                    <a data-toggle="collapse" href="#providerCollapse" aria-expanded="false"
                                    aria-controls="myCollapseExample">
                                    <span class="vertical-filters-header">Provider <i
                                            class="fa fa-chevron-down"></i></span>
                                    </a>
                                    <ul class="brand-list collapse" id="providerCollapse">
                                        @foreach($games_data->unique('provider') as $game)
                                            @if(!empty($game->provider))
                                                <li>
                                                    <div class="form-group">
                                                        <input id="{{ Str::slug($game->provider) }}" name="provider[]" type="checkbox" {{ request()->input("provider") && in_array($game->provider, request()->input("provider")) ? "checked='checked'": "" }} value="{{ $game->provider }}">
                                                        <label for="{{ Str::slug($game->provider) }}">{{ $game->provider }}</label>
                                                    </div>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="vertical-filters-filters provider-container">
                                    <span class="vertical-filters-header">RTP</span>
                                    <ul class="brand-list">
                                        @foreach($games_data->unique('rtp') as $game)
                                            @if(!empty($game->rtp))

                                                <li>
                                                    <label class="form-check-label rtp-label" id="filter{{ $game->rtp }}" for="{{ $game->rtp }}">
                                                        <input name="rtp" type="radio" class="form-check-input"
                                                            {{ $game->rtp == request()->input("rtp") ? "checked": "" }}
                                                            value="{{ $game->rtp }}" id="{{ $game->rtp }}">
                                                            <span>{{ $game->rtp }}</span>
                                                        <div class="common-radioIndicator"></div>
                                                    </label>
                                                </li>
                                            @endif

                                        @endforeach
                                    </ul>
                                </div>
                                <div class="vertical-filters-filters provider-container mb-3">
                                    <span class="vertical-filters-header">Volatilitet</span>
                                    <ul class="brand-list">
                                        @foreach(@$games_data->unique('volatilitet') as $game)
                                            @if(!empty($game->volatilitet))
                                                <li>
                                                    <label class="form-check-label rtp-label" id="filter{{ $game->volatilitet }}">
                                                        <input name="volatilitet" type="radio" class="form-check-input"
                                                            {{ $game->volatilitet == request()->input("volatilitet") ? "checked": ""}}
                                                            value="{{ $game->volatilitet }}"><span>{{ $game->volatilitet }}</span>
                                                        <div class="common-radioIndicator"></div>
                                                    </label>
                                                </li>
                                            @endif
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="vertical-filters-filters provider-container mb-3">
                                    <span class="vertical-filters-header">GPI</span>
                                    <ul class="brand-list">
                                        @foreach($games_data->unique('gpi') as $game)
                                            @if(!empty($game->gpi))
                                                <li>
                                                    <label class="form-check-label rtp-label" id="filter{{ $game->gpi }}">
                                                        <input name="gpi" type="radio" class="form-check-input"
                                                            {{ $game->gpi == request()->input("gpi") ? "checked": "" }}
                                                            value="{{ $game->gpi }}"><span>{{ $game->gpi }}</span>
                                                        <div class="common-radioIndicator"></div>
                                                    </label>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                                {{-- <div class="py-3 px-3">
                                    <button type="submit" class="btn btn-block btn-danger">Filter</button>
                                </div> --}}
                            </div>
                        </form>
                    </div>
                    <div class="col-md-2 offset-md-1 filter-mobile mb-4">
                        <button type="button" class="btn btn-primary" data-toggle="modal" id="filter-model"
                                data-target="#filterModal">
                            Filters
                        </button>
                    </div>
                    <div class="col-md-6">
                        <div class="row" id="game_ajax"></div>
                        <div class="row" id="game_list">
                            @foreach($games as $game)
                                <div class="col-6 col-md-3 mb-4 game-content">
                                    <div class="content">
                                        <a href="{{ $game->route }}">
                                            <div class="content-overlay"></div>
                                            @if($game)
                                            <img class="content-image"
                                                src="{{ $game->logo ? $game->logo->getUrl('thumb') : asset('asset/frontend/img/logo/game.png') }}" alt="{{ $game->logo_alt_text }}">
                                            @endif
                                            <div class="content-details fadeIn-top">
                                                <h5>Spill demo</h5>
                                                <p>Les anmeldelse</p>                                                    </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-3 game-popular-casino">
                        @include('partials.popular-casino-widget')
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 offset-md-2 gratis-slot-text">
                        <h4>Alt om gratis spilleautomater</h4>
                        <p>Når nye spilleautomater lanseres fra produsenter, så prøver vi bestandig spillene først for å se om de faktisk er noe bra. Etterpå plukker vi ut både gode og dårlige spill, og skriver detaljerte anmeldelser. Årsaken til at vi tar med dårlige nye spilleautomater (eller ihvertfall de vi vurderer er dårlige) er for at våre lesere skal informeres om slike spill, før de eventuelt kaster bort penger på de.</p>
                        <p>Dette betyr selvfølgelig ikke at du ikke kan gjøre opp din egen mening om spill, og kanskje du foretrekker noen av de nye spilleautomatene som vi slakter. Derfor får du også muligheten til å spille spilleautomatene gratis på våre nettsider, slik at du kan få gjort opp din egen mening i tillegg. </p>
                        <p>Det viktigste for oss er at du skal få tilstrekkelig informasjon om spilleautomater som lanseres, og få en nøytral vurdering på hvor gode eller dårlige spillene er. Selv om NetEnt, Play'n Go, og Pragmatic Play står for mange populære spill, så betyr ikke dette at alt de produserer er gull verdt. </p>
                        <p>For å finne spilleautomater du blir fornøyd med, så er det lurt å bruke litt tid på research før du putter på penger. Heldigvis så har vi gjort dette veldig enkelt med gode søkefunksjoner på spillsidene våre!</p>

                        <h4>Slik spiller du gratis spilleautomater</h4>
                        <p>Å spille gratis kan nesten være like gøy som å spille med ekte penger på enkelte spilleautomater. Og det beste av alt med å spille hos Slottomat, er at du ikke trenger å registrere en konto for å prøve alle spillene.</p>
                        <p>Hver eneste uke samler vi inn nye spill som vi tror våre lesere vil like, og det eneste du trenger å gjøre er å trykke på spinn knappen for å teste de ut på egenhånd.</p>
                        <p>Pengene på gratis spilleautomater er fiktive, så du trenger ikke å bekymre deg om at du spiller på noen andres regning. Du kan velge innsatser og funksjoner på spillene akkurat som om du spilte med ekte penger. I alle demoversjoner så får du de samme funksjonene som du ellers ville har fått om du spilte med ekte penger.</p>
                        <p>Du trenger ikke laste ned spilleautomatene på mobil eller PC, da alle spillene er integrert på vår nettside.</p>

                        <h4>Hvorfor spille gratis spilleautomater først?</h4>
                        <p>Enkelte sier mener det er lurt å “trene” på spilleautomater før du setter i gang med å spille, men dette er bare tøv. Spilleautomater er et spill basert på flaks, så det viktigste er å velge ut spill som kan betale godt når gevinster inntreffer.</p>
                        <p>I tillegg så er det viktig å finne spilleautomater som passer til ditt budsjett og kriterier for underholdning. Enkelte synes det er like gøy med en 3-hjuls fruktautomat, som et spill med Megaways eller andre mer moderne oppsett.</p>
                        <p>Selv om “trening” er kanskje ikke så viktig, så er det greit å finne ut av hva slag gevinstpotensialet spilleautomaten har. I tillegg hvilke fordeler du får som gratisspinn, wilds, eller multiplikatorer som kan hjelpe deg med å sanke mer gevinst. </p>
                        <p>Hos oss kan du både lese om alle fordeler og ulemper i spillene, slik at du er forberedt på hva som venter deg, før du setter i gang med å satse dine egne penger.</p>
                        <p>Til slutt så er det vel artig å teste ut nye spill uten å risikere egne penger? For de som har 3 eller 4 forskjellige favoritter hos sitt casino, så vil de fleste variere litt etterhvert. Men hvilke spill man skal velge er det ikke bestandig så lett å bestemme seg for.</p>
                        <p>Nettcasino har som regel hundrevis av spill tilgjengelig, men de skrive veldig lite om spillene, og ser som regel bare et pent spill bilde på nettsidene. I tillegg så har de veldig få søkekriterier som hjelper deg å velge spilleautomater ut i fra dine kriterier. </p>
                        <p>Derfor har vi laget vår egen søkemotor for gratis spilleautomater, som kan hjelpe deg med å finne spillene som passer best for akkurat deg!</p>

                        <h4>Slik bruker du søkefunksjoner på våre gratis spilleautomater</h4>
                        <p>Hos Slottomat får du mange forskjellige kriterier du kan søke opp spill på til venstre for spilleautomatene.</p>
                        <p><strong>Provider-</strong> Klikker du på denne så får du opp alle spillprodusenter som står bak de gratis spilleautomatene på vår nettside. Her kan du velge opptil flere produsenter som du liker, og da får du kun opp spill fra disse.</p>
                        <p><strong>RTP-</strong> Dette betyr tilbakebetalingsprosent. Mange føler at det er viktig å søke opp spill på denne kriteriene, fordi den gir deg en viss peiling på hvor mye du kan forvente tilbake i løpet av et visst antall spinn, selv om dette er kun spekulasjon. </p>
                        <p>Mange mener det er større sjanser for at du treffer på gevinster på en spilleautomat med høy RTP enn du ville gjort på en med lav RTP. Men om gevinstene som tikker inn dekker opp for hvor mye du faktisk har brukt på spillet sier det ingenting om.</p>
                        <p><strong>Volatilitet-</strong> Mange foretrekker heller spill med høy volatilitet enn høy RTP. Årsaken er at det tikker ikke inn gevinster så ofte på spilleautomater med høy volatilitet, men når du først treffer så kommer det som oftest gode utbetalinger. På spilleautomater så varierer verdiene på symbolene veldig. Så på spilleautomater med høy volatilitet, så får du de spilleautomatene med høye symbolverdier, eller bonusfunksjoner som hjelper til med å dra opp gevinstene betraktelig. </p>
                        <p><strong>GPI-</strong> Dette er en eksklusivt utviklet søkefunksjon som du kun finner hos Slottomat! GPI betyr "gevinst på innsats", og forteller deg om jackpoten er høy eller lav på spilleautomaten. Enkelte spill kan ha fattige 800x innsats i toppgevinst, mens andre spill kan opptil 50,000x innsats i gevinst. Her har vi også inkludert gratis spilleautomater med progressiv jackpot som "høy", i og med at de betaler som regel langt mer enn det du satser. </p>
                        <p>Men med denne søkefunksjonen så må du også være klar over at den ofte filtrerer vekk spill som har godt betalte symboler. Ofte er det slik at spilleautomater som har store jackpoter betaler relativt lite i hovedspillet, og vice versa.</p>

                        <h4>Les våre anmeldelser av spilleautomater</h4>
                        <p>Det er ikke all informasjon du får rundt spilleautomaten ved å bruke søkefunksjonene våres. For å finne ut om spilleautomaten har et godt gevinstpotensialet, eller har godt betalte symboler, så lønner det seg å lese våre anmeldelser.</p>
                        <p>Vi baserer våre anmeldelser på gratis spill og ekte spill i løpet av 2-500 runder, og vil så konkludere volatilitet, RTP, og GPI, slik at du får vite alle aspekter rundt spilleautomatens gevinstpotensialet.</p>
                        <p>Underholdningsverdi på spilleautomaten kan vi selvfølgelig være uenig om, da alle har forskjellig smak. Men vi skriver også litt om design, grafikk, og underholdningsverdien, i og med at dette er også en viktig faktor om du skal sitte lenge å spille. </p>
                        <p>Selv om enkelte spill kan være litt kjedelige i lengden, så betyr det absolutt ikke at du bør styre unna om gevinstpotensialet er bra. Heldigvis er det noe som heter autospinn funksjon på de fleste spilleautomater, slik at du kan gjøre noe annet i mellomtiden mens hjulene går.</p>
                        <p>Så søkefunksjonene kan hjelpe deg med å filtrere ut spill som er aktuelle for deg, men det er anmeldelsene som er avgjørende for hvilke spill du har lyst til å satse penger på.</p>

                        <h4>Spill gratis spilleautomater på mobil</h4>
                        <p>Våre nettsider er spesiallaget for å tilpasse seg alle typer enheter du vil spille på. Når du bruker våre spilleautomater på mobil, så trenger ingen ekstra programvare for å kunne kjøre spillene.</p>
                        <p>Men for å få best mulig opplevelse, så anbefaler vi at du benytter deg av enten Chrome eller en Safari nettleser, avhengig av om du har en Android eller Apple smarttelefon.Våre gratis spilleautomater vil da automatisk tilpasse seg din skjermoppløsning og gi deg den optimale spillopplevelsen uten en masse styr for å komme i gang.</p>
                        <p>Men det beste er at du ikke trenger noe som helst konto for å spille hos oss. Alt er åpent og tilgjengelig for de som har lyst til å lære seg mer om spilleautomater, og du kan kose deg mens du er på farten på mobil eller nettbrett.</p>
                        <p>Å skape en god spillside som dette tar lang tid. derfor er vi stolte over å kunne presentere et av de største utvalgene på norsk en norsk nettside av gratis spilleautomater- og flere blir det!</p>

                        <h4>Nye spilleautomater 2021 finner du her</h4>
                        <p>Slottomat sitt spillutvalg på gratis spilleautomater blir bare større og større for hver eneste uke. Årsaken er at det lanseres veldig mange nye spill fra de store produsentene på nett for tiden som Play'n Go, NetEnt, og Pragmatic Play.Hver uke kommer det hundrevis av nye spill på markedet, og jobben vår er å finne de beste spillene som er verdt å spille. Vi bruker mange forskjellige nettsider for å finne frem til populære nye spilleautomater fra nettcasino, og er ganske nøysom om hvilke spill vi ønsker å publisere på våre nettsider.</p>
                        <p>Årsaken er at det er mye svindel på nett, og det er stadig nye aktører som dukker opp med falske spilleautomater. Vi har til og med opplevd at ganske kjente nettcasino har benyttet seg av spillprodusenter som ikke spiller etter reglene. </p>
                        <p>Derfor er det viktig år vi velger ut nye gratis spilleautomater, at de kommer fra pålitelige kilder og produsenter folk stoler på.Selvfølgelig er det mange spennende nykommere som lager gode spilleautomater, men vi er ekstra nøye med å undersøke disse aktørene før vi vil anbefale de til andre. </p>
                        <p>Derfor kan du føle deg trygg på at vi kun lanserer nye spilleautomater fra pålitelige og lisensierte spillprodusenter fra enten Curacao eller Malta Gaming Authority. </p>
                        <p>Her er en del nye spillprodusenter du bør absolutt sjekke ut:
                            <strong>GameBurger-</strong> Vi har ikke så mange spill fra denne produsenten, men det de produserer for tiden er absolutt lovende. Et av deres nyeste spill heter Hyper Strike, og har fått mye oppmerksomhet på grunn av hyper Strike symbolet. denne kan lande vilkårlig på de 5 hjulene på spilleautomaten og fortsatt utbetale gevinst, selv om de ikke klaffer med gevinstlinjene!
                        </p>
                        <p><strong>JustForTheWin-</strong> Dette er en produsent som følger i samme stil som Red Tiger- små jackpotter med veldig godt betalte symboler i hovedspillet. Treasure Skyland er et godt eksempel på dette, hvor gevinstene spennende seg fra 4- 20x innsats med 5 like i en gevinstlinje over 10 symboler. For de som er kjent med spilleautomater, så er dette veldig gode gevinstmuligheter på alle symbolene!</p>
                        <p><strong>Relax Gaming-</strong> Leter du etter spilleautomater med de største jackpottene, så har Relax Gaming flere spill du bør bryne deg på. En av våre favoritter er Money Train 2 som kan utbetale opptil 50,000x innsats på et enkelt spinn! På vanlige spilleautomater uten progressiv jackpot, så er dette veldig mye å hente. Det er veldig sjeldent du finner spill fra denne produsenten med mindre gevinst enn 10,000x innsats.</p>

                        <h4>Prøv de beste spilleautomater</h4>
                        <p>Spilleautomater har lenge vært nordmenns favoritt spill på casino, og det er ofte de samme spillene som går igjen på topplister over de mest spilte.</p>
                        <p>Øverst på denne nettsiden finner du disse gratis spilleautomatene som nordmenn like best på nett til enhver tid. Slik holder du deg oppdatert på nye trender i markedet, og hvilke som nordmenn ser på som lønnsomme spill å bruke. </p>
                        <p>Du kan prøve klassikere gratis som Book of Dead , Starburst og Jackpot 6000 , og Gonzo’s Quest, som har lenge vært øverst på pallen over populære spill de siste årene- Men hvorfor er disse spillene så populær blant spillere?</p>
                        <p>De har verken flest gevinstlinjer, heftigste grafikk, eller de største gevinstene på markedet. Men de har noe som mange spill ikke har- Brukervennlighet.</p>
                        <p>Når du setter i gang med disse spillene, så skjønner du gangen i det med en gang. Kombiner dette med bonusfunksjoner som gjør nytte for seg, og brukbart gevinstpotensialet, så har du et spilleautomat klassiker!</p>
                        <p>Hos oss så kan du prøve alt av artige klassiske spilleautomater på nett samlet på en og samme plass. Så her får du både de nyeste og heftigste spillene, i tillegg til de som er mest populær på markedet til enhver tid!</p>

                        <h4>Nye gratis spilleautomater hver uke</h4>
                        <p>Det tar litt tid å teste nye spill som kommer ut, men målet vårt er å bli den største spillsiden for gratis spilleautomater for det norske markedet. Allerede mener vi vi har rundt 100 spill mer enn mange andre konkurrerende sider, og vi skrive som regel rundt 20 nye anmeldelser hver eneste måned.</p>
                        <p>Derfor kan du forvente deg ca. 5 nye spill i uka hos oss, ferdig testet slik at du ikke trenger å gjøre det! Vi følger med på 30+ forskjellige spillprodusenter kontinuerlig, og snapper opp nye lanseringer så snart de er tilgjengelig.</p>
                        <p>Men vi vil gjerne høre fra deg om hvilke spilleautomater du liker. det finnes sikkert tusenvis av spill som har blitt lansert de siste 20 årene som vi ikke har her på nettsidene. Så bare bruk søkefeltet for å se om du finner dine favoritter. Om ikke, ta gjerne kontakt med oss, så skal vi legge til spilleautomater som dere synes er bra. </p>
                        <p>I tillegg så gjør vi sjekk hos våre casino om disse spillene er tilgjengelige, og kan gi deg eksklusive bonuser og tilbud!</p>
                        <p>Om du liker å følge med på alt nytt som skjer innenfor spilleautomater, meld deg på vårt nyhetsbrev, så får du også 10 free spins fra et av våre casino, uten at du behøver å sette inn penger!</p>
                    </div>
                </div>
                <div class="modal" id="filterModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                {{-- <h4 class="modal-title">Filters</h4>--}}
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form method="get" action="{{ route('frontend.all-games') }}" id="games_filter_mobile_form">
                                    <div class="filter">
                                        <div class="vertical-filters">
                                            <span>FILTERS</span>
                                            <a href="{{ route('frontend.all-games') }}" class="float-right reset-filter">Nullstill
                                            </a>
                                        </div>
                                        <div class="vertical-filters-filters provider-container">
                                            <a data-toggle="collapse" href="#providerCollapse" aria-expanded="false"
                                            aria-controls="myCollapseExample">
                                            <span class="vertical-filters-header">Provider <i
                                                class="fa fa-chevron-down"></i></span>
                                                </a>
                                                <ul class="brand-list collapse" id="providerCollapse">
                                                    @foreach($games_data->unique('provider') as $game)
                                                        @if(!empty($game->provider))
                                                                <li>
                                                                    <div class="form-group">
                                                                        <input id="{{ Str::slug($game->provider) }}" name="provider[]" type="checkbox" {{ request()->input("provider") && in_array($game->provider, request()->input("provider")) ? "checked='checked'": "" }} value="{{ $game->provider }}">
                                                                        <label for="{{ Str::slug($game->provider) }}">{{ $game->provider }}</label>
                                                                    </div>
                                                                </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                        </div>
                                        <div class="vertical-filters-filters provider-container">
                                            <span class="vertical-filters-header">RTP</span>
                                            <ul class="brand-list">
                                                @foreach($games_data->unique('rtp') as $game)
                                                    @if(!empty($game->rtp))
                                                            <li>
                                                                <label class="form-check-label rtp-label" id="filter{{ $game->rtp }}">
                                                                    <input name="rtp" type="radio" class="form-check-input"
                                                                        {{ $game->rtp == request()->input("rtp") ? "checked": "" }}
                                                                        value="{{ $game->rtp }}" id="{{ $game->rtp }}"><span>{{ $game->rtp }}</span>
                                                                    <div class="common-radioIndicator"></div>
                                                                </label>
                                                            </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="vertical-filters-filters provider-container mb-3">
                                            <span class="vertical-filters-header">Volatility</span>
                                                <ul class="brand-list">
                                                    @foreach($games_data->unique('volatilitet') as $game)
                                                        @if(!empty($game->volatilitet))
                                                            <li>
                                                                <label class="form-check-label rtp-label" id="filter{{ $game->volatilitet }}">
                                                                    <input name="volatilitet" type="radio" class="form-check-input"
                                                                        {{ $game->volatilitet == request()->input("volatilitet") ? "checked": "" }}
                                                                        value="{{ $game->volatilitet }}"><span>{{ $game->volatilitet }}</span>
                                                                    <div class="common-radioIndicator"></div>
                                                                </label>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                        </div>
                                        <div class="vertical-filters-filters provider-container mb-3">
                                            <span class="vertical-filters-header">GPI</span>
                                                <ul class="brand-list">
                                                    @foreach($games_data->unique('gpi') as $game)
                                                        @if(!empty($game->gpi))
                                                            <li>
                                                                <label class="form-check-label rtp-label" id="filter{{ $game->gpi }}">
                                                                    <input name="gpi" type="radio" class="form-check-input"
                                                                        {{ $game->gpi == request()->input("gpi") ? "checked": "" }}
                                                                        value="{{ $game->gpi }}"><span>{{ $game->gpi }}</span>
                                                                    <div class="common-radioIndicator"></div>
                                                                </label>
                                                            </li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

<script>
    $("#search").on('keyup',function(){
        var value = $(this).val();
        $.ajax({
            type : 'post',
            url : "{{ route('frontend.all-games')}}",
            data:{
              "_token":"{{ csrf_token() }}",
                search: value,
            },
            success:function(data){
                $('#game_list').hide();
                $('#game_ajax').html(data);
            },

            error: function(jqXHR, textStatus, errorThrown) {
                 console.log("AJAX error: " + textStatus + ' : ' + errorThrown)
            }
        })
    });

 </script>

@endsection
