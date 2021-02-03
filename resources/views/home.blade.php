<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <img src="{{ asset('img/marchio-sito-test.png') }}" alt="">
            <ul class="list-inline">
                <li><a href="">Home</a></li>
                <li class="active"><a href="">Prodotti</a></li>
                <li><a href="">News</a></li>
            </ul>
        </header>
        <main>
            <section class="container">
                <h2>LE LUNGHE</h2>
                <div class="card-container">
                    @foreach ($lunghe as $pasta)
                    <div class="card">
                        <img src="{{ $pasta['src']}}" alt="">
                    </div>
                @endforeach
                </div>
            </section>
            
            <section class="container">
                <h2>LE CORTE</h2>
                <div class="card-container">
                    @foreach ($corte as $pasta)
                    <div class="card">
                        <img src="{{ $pasta['src']}}" alt="">
                    </div>
                @endforeach
                </div>
            </section>

            <section class="container">
                <h2>LE CORTISSIME</h2>
                <div class="card-container">
                    @foreach ($cortissime as $pasta)
                    <div class="card">
                        <img src="{{ $pasta['src']}}" alt="">
                    </div>
                @endforeach
                </div>
            </section>
        </main>
        <footer>
            <div>
                <img src="{{ asset('img/marchio-sito-test.png') }}" alt="">
                <ul>
                    <li>Ragione sociale: La Molisana S.P.A.</li>
                    <li>Sede legale: Contrada Colle delle Api, 100/A</li>
                    <li>86100 - cAMPOBASSO (CB)</li>
                    <li>Pec: lamolisana@pec.it</li>
                    <li>Tel: +39 08744981</li>
                    <li>Fax: +39 0874 629584</li>
                    <li>info@lamolisana.it (per segnalazioni degli utenti)</li>
                    <li>commerciale@lamolisana.it</li>
                    <li>export@lamolisana.it</li>
                    <li>numero verde 8008118081</li>
                    <li>telefono 3801292455</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="">Il Pastifico</a></li>
                    <li><a href="">Grano decorticato a pietra</a></li>
                    <li><a href="">Il Molise c'è</a></li>
                    <li><a href="">Filiera Integrata</a></li>
                    <li><a href="">100 anni di pasta</a></li>
                    <li><a href="">Sartoria della pasta</a></li>
                    <li><a href="">Spaghetto Quadrato</a></li>
                    <li><a href="">Le Persone</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="">Le Classiche</a></li>
                    <li><a href="">Le Integrali</a></li>
                    <li><a href="">Le Speciali</a></li>
                    <li><a href="">Le Biologiche</a></li>
                    <li><a href="">Le Gluten-Free</a></li>
                    <li><a href="">Le Semole</a></li>
                    <li><a href="">Le Extra di Lusso</a></li>
                </ul>
            </div>
            <div>
                <ul>
                    <li><a href="">Collezione da Chef</a></li>
                    <li><a href="">Grandi Cucine</a></li>
                    <li><a href="">Le Speciali</a></li>
                    <li><a href="">Biologiche</a></li>
                    <li><a href="">Quadrate</a></li>
                </ul>
            </div>
        </footer>
    </body>
</html>
