@extends('layouts.frontend')

@section('title','Home Page')
@section('content')
    <section id="news-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h4 class="news-heading">Slottomat</h4>
                    <p>
                        Flott at du stikker innom nyhetssidene våre! Vi holder deg oppdatert rundt alt som rører seg
                        innen online casino. Dette gjelder både lanseringer av spill, vilkår og masse mer som kan være
                        interessant for ivrige lesere av Slottomat.com<br>
                        I og med at vi er veldig opptatte av spilleautomater ( og det vet vi dere er også), så sjekker
                        vi jevnlig flere ganger i måneden over kjente spillprodusenter på nett etter de ferskeste
                        nyhetene.<br>
                        Det skjer veldig mye nytt for tiden, spesielt med tanke på spilleoppsett, gevinstlinjer og
                        bonusfunksjoner på spilleautomater. Den tiden med 3 hjul, 5 gevinstlinjer og frukt symboler er
                        for lengst forbi, så det er viktig å holde seg oppdatert på nyvinninger slik at du forstår hva
                        du egentlig satser penger på.<br>
                        I tillegg gir vi vurderinger av spillet og tips til hvordan du kan holde ut lengst mulig for å
                        sanke inn den store jackpoten, eller om jackpoten er noe å jakte på i det hele tatt.<br>
                        Utenom spill kan det være fint å følge med på hva som skjer med de stadig innskjerpende reglene
                        fra det norske lotteritilsynet. Som du sikkert kjenner til kommer det stadig nye regelendringer
                        rundt betaling, markedsføring og beskatning av gevinster.<br>
                        Derfor er det viktig for oss å skrive om betalingsløsninger du fortsatt kan bruke, og hvordan ta
                        ut gevinster raskest mulig.<br>
                        Teknologiutviklingen innen casino bransjen skjer raskt for tiden, med masse spennende nyheter
                        som kommer i løpet av de neste årene. På dette område skal vi sørge for å holde deg oppdatert på
                        alle spennende nye casino som kommer inn. Da skriver vi om spillutvalg, plattform de bruker, og
                        ikke minst alle de heftige bonusene du kan hente!<br>
                        Vi tar for oss alle vesentlige detaljer i våre anmeldelser, slik at du kan gjøre et sikkert
                        valg, og å være inneforstått med hvordan online casino faktisk fungerer. Da får du en langt
                        hyggeligere brukeropplevelse uten en masse kjedelige overraskelser.<br>
                </div>
            </div>


            <div class="news-allscreen-view">
                <div class="row">
                    <div class="col-md-8 offset-md-1">
                        <h4 class="tips-heading">Discover our Latest casino tips below
                        </h4>

                        <form action="#">
                            <div class="search-bar">
                                <input type="text" placeholder="Search..." id="search-text">
                                <div class="search"></div>
                            </div>
                            <div class="form-group select-search-bar">
                                <select class="form-control search-select-option" name="category">
                                    <option hidden>Select Category</option>
                                    <option>Bcasino</option>
                                    <option>Casino Bonus News</option>
                                    <option>Casino Of The Month</option>
                                    <option>Casino Offers</option>
                                </select>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-8 offset-md-1">
                        <div class="row justify-content-center">
                            <div class="col-md-4 mb-4">
                                <div class="single-blog blog-2 mt-30">
                                    <div class="blog-image">
                                        <a href="{{url('news-1')}}"><img
                                                src="https://image.freepik.com/free-vector/casino-related-icons_24911-45136.jpg"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a href="{{url('news-1')}}">Spilleautomaten Reel
                                                Rush 2 er her !</a></h4>
                                        <p>Det er sjeldent spilleautomat oppfølgere blir noe særlig suksess. Men med
                                            NetEnts nye Reel...</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-1')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="single-blog blog-2 mt-30">
                                    <div class="blog-image">
                                        <a href="{{url('news-2')}}"><img
                                                src="https://image.freepik.com/free-vector/casino-related-icons_24911-45136.jpg"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a href="{{url('news-2')}}">Ozzy Osbourne
                                                spilleautomat</a></h4>
                                        <p>NetEnt's mest spennende nykommer i år er Ozzy Osbourne spilleautomat med med
                                            et oppsett av...</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-2')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="single-blog blog-2 mt-30">
                                    <div class="blog-image">
                                        <a href="{{url('news-3')}}"><img
                                                src="https://image.freepik.com/free-vector/casino-related-icons_24911-45136.jpg"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a href="{{url('news-3')}}">Legacy of Dead fra Play
                                                N’ Go</a>
                                        </h4>
                                        <p>Er dette den nyeste i serien fra Play N’ Go som omhandler egyptisk mytologi.
                                            Selv om tema beg...</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-3')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-md-4 mb-4">
                                <div class="single-blog blog-2 mt-30">
                                    <div class="blog-image">
                                        <a href="{{url('news-single')}}"><img
                                                src="{{ asset('asset/frontend/img/blogs/1.jpg')}}"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a
                                                href="{{url('news-single')}}">Get great
                                                casino bonuses and play Christmas
                                                slots</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-single')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="single-blog blog-2 mt-30">
                                    <div class="blog-image">
                                        <a href="{{url('news-single')}}"><img
                                                src="{{ asset('asset/frontend/img/blogs/2.jpg')}}"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a
                                                href="{{url('news-single')}}">How
                                                to setup dedicated hosting account.</a>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-single')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="single-blog blog-2 mt-30">
                                    <div class="blog-image">
                                        <a href="{{url('news-single')}}"><img
                                                src="{{ asset('asset/frontend/img/blogs/3.jpg')}}"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a
                                                href="{{url('news-single')}}">How
                                                to setup dedicated hosting account.</a>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-single')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>--}}
                        </div>
                    </div>
                    <div class="col-md-2 mt-30">
                        <div class="popular-casino">
                            <h6>Popular Casino 2019</h6>
                            <ul class="casino-list">
                                <li>
                                    <a href="" class="casino-widget">
                                        <div class="casino-top casino-inner">
                                            <img src="{{('../asset/frontend/img/logo/10-bet.jpg')}}"
                                                 alt="" class="casino-img">
                                            10Bet Casino
                                        </div>
                                        <div class="casino-bottom casino-inner">
                                            <svg class="casino-widget___svg" width="32"
                                                 height="32"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                    fill="#fff">
                                                </path>
                                            </svg>
                                            100% up to C$100 Bonus
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="" class="casino-widget">
                                        <div class="casino-top casino-inner">
                                            <img src="{{('../asset/frontend/img/logo/21com.jpg')}}"
                                                 alt="" class="casino-img">
                                            21.com Casino
                                        </div>
                                        <div class="casino-bottom casino-inner">
                                            <svg class="casino-widget___svg" width="32"
                                                 height="32"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                    fill="#fff">
                                                </path>
                                            </svg>
                                            122% up to C$300 Bonus + 210 Free Spins
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="" class="casino-widget">
                                        <div class="casino-top casino-inner">
                                            <img src="{{('../asset/frontend/img/logo/22bet.jpg')}}"
                                                 alt="" class="casino-img">
                                            22Bet Casino
                                        </div>
                                        <div class="casino-bottom casino-inner">
                                            <svg class="casino-widget___svg" width="32"
                                                 height="32"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                    fill="#fff">
                                                </path>
                                            </svg>
                                            122% up to C$300 Bonus
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="news-tablet-view">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h4 class="tips-heading">Discover our Latest casino tips below
                        </h4>

                        <form action="#">
                            <div class="search-bar">
                                <input type="text" placeholder="Search..." id="search-text">
                                <div class="search"></div>
                            </div>
                            <div class="form-group select-search-bar">
                                <select class="form-control search-select-option" name="category">
                                    <option hidden>Select Category</option>
                                    <option>Bcasino</option>
                                    <option>Casino Bonus News</option>
                                    <option>Casino Of The Month</option>
                                    <option>Casino Offers</option>
                                </select>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1 pull-md-1">
                        <div class="row justify-content-center mt-30">
                            <div class="col-md-4 mt-4">
                                <div class="single-blog blog-2">
                                    <div class="blog-image">
                                        <a href="{{url('news-single')}}"><img
                                                src="{{ asset('asset/frontend/img/blogs/1.jpg')}}"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a
                                                href="{{url('news-single')}}">Get great
                                                casino bonuses and play Christmas
                                                slots</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-single')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="single-blog blog-2">
                                    <div class="blog-image">
                                        <a href="{{url('news-single')}}"><img
                                                src="{{ asset('asset/frontend/img/blogs/2.jpg')}}"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a
                                                href="{{url('news-single')}}">How
                                                to setup dedicated hosting account.</a>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-single')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="single-blog blog-2">
                                    <div class="blog-image">
                                        <a href="{{url('news-single')}}"><img
                                                src="{{ asset('asset/frontend/img/blogs/3.jpg')}}"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a
                                                href="{{url('news-single')}}">How
                                                to setup dedicated hosting account.</a>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-single')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="single-blog blog-2">
                                    <div class="blog-image">
                                        <a href="{{url('news-single')}}"><img
                                                src="{{ asset('asset/frontend/img/blogs/1.jpg')}}"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a
                                                href="{{url('news-single')}}">Get great
                                                casino bonuses and play Christmas
                                                slots</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-single')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="single-blog blog-2">
                                    <div class="blog-image">
                                        <a href="{{url('news-single')}}"><img
                                                src="{{ asset('asset/frontend/img/blogs/2.jpg')}}"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a
                                                href="{{url('news-single')}}">How
                                                to setup dedicated hosting account.</a>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-single')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mt-4">
                                <div class="single-blog blog-2">
                                    <div class="blog-image">
                                        <a href="{{url('news-single')}}"><img
                                                src="{{ asset('asset/frontend/img/blogs/3.jpg')}}"
                                                alt="news"></a>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="news-blog-title"><a
                                                href="{{url('news-single')}}">How
                                                to setup dedicated hosting account.</a>
                                        </h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur
                                            adipisicing
                                            elit.</p>
                                        <a class="btn read-blog-btn mx-auto d-block"
                                           href="{{url('news-single')}}">Read Blog</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-30">
                    <div class="col-md-10 offset-md-1">
                        <div class="popular-casino">
                            <h6>Popular Casino 2019</h6>
                            <ul class="casino-list">
                                <li>
                                    <a href="" class="casino-widget">
                                        <div class="casino-top casino-inner">
                                            <img src="{{('../asset/frontend/img/logo/10-bet.jpg')}}"
                                                 alt="" class="casino-img">
                                            10Bet Casino
                                        </div>
                                        <div class="casino-bottom casino-inner">
                                            <svg class="casino-widget___svg" width="32"
                                                 height="32"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                    fill="#fff">
                                                </path>
                                            </svg>
                                            100% up to C$100 Bonus
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="" class="casino-widget">
                                        <div class="casino-top casino-inner">
                                            <img src="{{('../asset/frontend/img/logo/21com.jpg')}}"
                                                 alt="" class="casino-img">
                                            21.com Casino
                                        </div>
                                        <div class="casino-bottom casino-inner">
                                            <svg class="casino-widget___svg" width="32"
                                                 height="32"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                    fill="#fff">
                                                </path>
                                            </svg>
                                            122% up to C$300 Bonus + 210 Free Spins
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="" class="casino-widget">
                                        <div class="casino-top casino-inner">
                                            <img src="{{('../asset/frontend/img/logo/22bet.jpg')}}"
                                                 alt="" class="casino-img">
                                            22Bet Casino
                                        </div>
                                        <div class="casino-bottom casino-inner">
                                            <svg class="casino-widget___svg" width="32"
                                                 height="32"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 fill-rule="evenodd" clip-rule="evenodd">
                                                <path
                                                    d="M22 22h-20c-1.104 0-2-.896-2-2v-12c0-1.104.896-2 2-2h1.626l.078.283c.194.631.518 1.221.95 1.717h-2.154c-.276 0-.5.224-.5.5v5.5h20v-5.5c0-.276-.224-.5-.5-.5h-2.154c.497-.569.853-1.264 1.029-2h1.625c1.104 0 2 .896 2 2v12c0 1.104-.896 2-2 2zm-20-5v2.5c0 .276.224.5.5.5h19c.276 0 .5-.224.5-.5v-2.5h-20zm8.911-5h-2.911c.584-1.357 1.295-2.832 2-4-.647-.001-1.572.007-2 0-2.101-.035-2.987-1.806-3-3-.016-1.534 1.205-3.007 3-3 1.499.006 2.814.872 4 2.313 1.186-1.441 2.501-2.307 4-2.313 1.796-.007 3.016 1.466 3 3-.013 1.194-.899 2.965-3 3-.428.007-1.353-.001-2 0 .739 1.198 1.491 2.772 2 4h-2.911c-.241-1.238-.7-2.652-1.089-3.384-.388.732-.902 2.393-1.089 3.384zm-2.553-7.998c-1.131 0-1.507 1.918.12 1.998.237.012 2.235 0 2.235 0-1.037-1.44-1.52-1.998-2.355-1.998zm7.271 0c1.131 0 1.507 1.918-.12 1.998-.237.012-2.222 0-2.222 0 1.037-1.44 1.507-1.998 2.342-1.998z"
                                                    fill="#fff">
                                                </path>
                                            </svg>
                                            122% up to C$300 Bonus
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
