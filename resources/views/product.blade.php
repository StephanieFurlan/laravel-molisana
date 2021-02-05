@extends('layouts/base')
@section('content')

    <div class="wrapper">
        <div class="container">
            <h2>{{ $product['titolo']}}</h2>
            <img src="{{ $product['src-h'] }}" alt="">
            <img src="{{ $product['src-p'] }}" alt="">
            <p>{{ $product['descrizione'] }}</p>
            @php
                // setting previous and next product
                $next = $id + 1;
                if ($id == $maxId) {
                    $next = 0;
                }
                $prev = $id - 1;
                if ($id == 0) {
                    $prev = $maxId;
                }
            @endphp
            <a id="chevron-left" href="{{ route('product', ['id' => $prev])}}">
                <i  class="fas fa-chevron-left"></i>
            </a>
            <a id="chevron-right" href="{{ route('product', ['id' => $next])}}">
                <i  class="fas fa-chevron-right"></i>
            </a>
        </div>
    </div>

@endsection