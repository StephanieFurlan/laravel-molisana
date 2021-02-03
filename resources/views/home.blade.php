@extends('layouts/base')
@section('content')
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
@endsection