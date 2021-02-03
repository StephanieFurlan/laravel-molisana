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

        </footer>
    </body>
</html>
