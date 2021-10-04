@extends('layouts.frontend')

@section('title','Cookies Page')
@section('content')
    <section id="cookie-section-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Bruk av Informasjonskapsler</h3>

                    <h4>1. Vi bruker Informasjonskapsler</h4>
                    <p>Vi bruker informasjonskapsler på vår nettside. Denne nettsiden om nformasjonskapsler informerer
                        deg om hvilke typer informasjonskapsler vi bruker på våre nettsider, hvordan vi bruker de, og
                        hvordan du kan avvise våre informasjonskapsler. Vi mottar ingen personlig informasjon om våre
                        brukere ved bruk av informasjonskapsler. Ved å bruke våre nettsider, aksepterer du bruken av
                        informasjonskapsler og annen sporingsteknologi vi bruker som er spesifisert i disse
                        retningslinjene for informasjonskapsler.</p>
                    <p>Disse retningslinjene for informasjonskapsler bør leses i sammenheng med vår Personvernerklæring,
                        som informerer deg om dine rettigheter som et dataobjekt på dine personlige data som vi
                        behandler.></p>
                    <p>For spørsmål rundt våre retningslinjer for informasjonskapsler, kan du kontakte oss gjennom
                        kontraktskjema på vår nettside, eller ved å sende oss en epost til [info@example.com]. </p>

                    <h4>2. Hva er informasjonskapsler? </h4>
                    <p>Informasjonskapsler er innsamlet data i form av små tekstfiler lagret i din nettleser, eller i
                        harddisken på din datamaskin, eller eldre mobile enheter når du besøker en nettside- eller
                        applikasjoner. Informasjonskapsler hjelper å forbedre brukeropplevelsen på vår nettside, samt å
                        huske dine preferanser når du besøker nettsiden ved en senere anledning. Informasjonskapsler vi
                        bruker på vår nettside samler ikke personlig informasjon fra din harddisk eller datamaskin.</p>
                    <p>Det er forskjellige typer informasjonskapsler. Vi er autorisert til å bruke informasjonskapsler
                        uten din tillatelse, med forbehold om at slike informasjonskapsler er nødvendig for å operere
                        vår nettside. Men om vi bruker informasjonskapsler som ikke er ansett som nødvendig for driften
                        av nettsiden, kan vi kun bruke de etter samtykke fra deg. Du kan trekke ditt samtykke når som
                        helst.</p>

                    <h4>3. Typer informasjonskapsler vi bruker på vår nettside</h4>
                    <p>For tiden bruker vi to hovedtyper av informasjonskapsler på vår nettside som er kun nødvendige
                        drift, og informasjonskapsler for markedføring. Noen av disse informasjonskapsler er fra vår
                        nettside, og noen fra tredjeparts-tjenester som vi bruker.</p>
                    <h5>Informasjonskapsler på vår nettside</h5>
                    <table class="table-striped table-responsive cookie-table mb-4">
                        <thead>
                        <th>Navn på informasjonskapsel</th>
                        <th>Kategori</th>
                        <th>Funksjon</th>
                        <th>Tjeneste
                            leverandør
                        </th>
                        <th>Type</th>
                        <th>Utløp</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>wc_cart_hash_#</td>
                            <td>Nødvendig</td>
                            <td>Nødvendig for å bruke enkle funksjoner som navigering og tilgang til sikre områder på
                                nettsiden
                            </td>
                            <td><a href="">www.slottomat.com</a></td>
                            <td>HTML</td>
                            <td>Konstant</td>
                        </tr>
                        <tr>
                            <td>wc_fragments_</td>
                            <td>Nødvendig</td>
                            <td>Nødvendig for å bruke enkle funksjoner som navigering og tilgang til sikre områder på
                                nettsiden
                            </td>
                            <td><a href="">www.slottomat.com</a></td>
                            <td>HTML</td>
                            <td>Per sesjon</td>
                        </tr>
                        <tr>
                            <td>GPS</td>
                            <td>Markedsføring</td>
                            <td>Registrerer en unik ID på mobile enheter for å igangsette sporingsbasert teknologi på
                                geografisk GPS område
                            </td>
                            <td><a href="">Youtube</a></td>
                            <td>HTTP</td>
                            <td>1 Dag</td>
                        </tr>
                        <tr>
                            <td>IDE</td>
                            <td>Markedsføring</td>
                            <td>Brukes av Google Double Click for å registrere og rapportere brukerens handlinger på
                                nettsiden etter å ha sett- eller klikket på markedsføreres annonser med hensikten å måle
                                effektiviteten av annonsen og fremtidige målrettede annonser til brukeren.
                            </td>
                            <td><a href="">doubleclick.net</a></td>
                            <td>HTTP</td>
                            <td>1 År</td>
                        </tr>
                        <tr>
                            <td>test_cookie</td>
                            <td>Markedsføring</td>
                            <td>Brukes for å se om brukerens nettleser støtter informasjonskapsler.</td>
                            <td><a href="">doubleclick.net</a></td>
                            <td>HTTP</td>
                            <td>1 Dag</td>
                        </tr>
                        <tr>
                            <td>VISITOR_INFO1_LIVE</td>
                            <td>Markedsføring</td>
                            <td>Prøver å estimere brukerens båndbredde på nettsider med integrerte Youtube videoer.</td>
                            <td><a href="">youtube.com</a></td>
                            <td>HTTP</td>
                            <td>179 Dager</td>
                        </tr>
                        <tr>
                            <td>VISITOR_INFO1_LIVE</td>
                            <td>Markedsføring</td>
                            <td>Prøver å estimere brukerens båndbredde på nettsider med integrerte Youtube videoer.</td>
                            <td><a href="">youtube.com</a></td>
                            <td>HTTP</td>
                            <td>179 Dager</td>
                        </tr>
                        <tr>
                            <td>YSC</td>
                            <td>Markedsføring</td>
                            <td>Registrerer en unik ID for statistikk over hvilke videoer fra Youtube brukeren har
                                sett.
                            </td>
                            <td><a href="">youtube.com</a></td>
                            <td>HTTP</td>
                            <td>Per sesjon</td>
                        </tr>
                        <tr>
                            <td>Yt-remote-cast-installed

                                Yt-remote-fast-check-period

                                Yt-remote-session-app

                                yt-remote-session-name
                            </td>
                            <td>Markedsføring</td>
                            <td>Lagrer brukerens foretrukne innstillinger for videoavspiller av implementerte Youtube
                                videoer.
                            </td>
                            <td><a href="">youtube.com</a></td>
                            <td>HTML</td>
                            <td>Per sesjon</td>
                        </tr>
                        <tr>
                            <td>Yt-remote-connected-device

                                yt-remote-device-id
                            </td>
                            <td>Markedsføring</td>
                            <td>Lagrer brukerens foretrukne innstillinger for videoavspiller av implementerte Youtube
                                videoer.
                            </td>
                            <td><a href="">youtube.com</a></td>
                            <td>HTML</td>
                            <td>Konstant</td>
                        </tr>
                        </tbody>
                    </table>

                    <h5>1. Nødvendige Informasjonskapsler</h5>
                    <p>Kun nødvendige informasjonskapsler er laget for å gjøre nettsiden brukelig og muliggjør
                        navigering av nettsiden. Uten bruken av nødvendige informasjonskapsler vil enkelte funksjoner på
                        vår nettside ikke være tilgjengelig. Vi krever ingen godkjenning for å bruke kun nødvendige
                        informasjonskapsler på vår nettside.</p>
                    <h5>2. Informasjonskapsler til markedsføring</h5>
                    <p>Informasjonskapsler til markedsføring sporer brukere på nettsiden og viser relevante annonser.
                        Informasjonskapsler innen markedsføring gir oss muligheten til å måle effektiviteten på våre
                        markedsføringskampanjer. Disse informasjonskapslene er tjenester plassert av en tredjepart som
                        vi samarbeider med. Vær oppmerksom på at vi kun mottar anonym informasjon fra bruken av slike
                        informasjonskapsler. </p>

                    <h4>4. Hvordan blokkere informasjonskapsler?</h4>
                    <p>Du kan velge å enten akseptere eller avslå informasjonskapsler ved å endre innstillinger i din
                        nettleser på et hvilket som helst tidspunkt, og i tillegg slette informasjonskapsler. For å lære
                        mer om hvordan du behandler informasjonskapsler i din nettleser, vennligst besøk link til
                        foretrukne nettleser nedenfor: </p>
                    <ul>
                        <li>Google Chrome</li>
                        <li>Mozilla Firefox</li>
                        <li>Microsoft Edge</li>
                        <li>Internet Explorer</li>
                        <li>Opera</li>
                        <li>Safari</li>
                    </ul>
                    <p>Vær oppmerksom på at å blokkere informasjonskapsler kan føre til at du ikke får tilgang til
                        enkelte tjenester på vår nettside, som kan føre til en dårlig brukeropplevelse.</p>
                    <p>For å lære mer om hvordan du sletter informasjonskapsler, vennligst besøk
                        https://www.aboutinformasjonskapsler.org/how-to-delete-informasjonskapsler/.</p>
                    <h4>5. Endringer i denne Cookie Policy</h4>
                    <p>Selskapet forbeholder seg retten til å når som helst oppdatere disse retningslinjene for
                        informasjonskapsler.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
