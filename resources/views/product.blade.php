@extends('layouts/base')
@section('content')

    <div class="wrapper">
        <div class="container">
            <h2>{{ $product['titolo']}}</h2>
            <img src="{{ $product['src-h'] }}" alt="">
            <img src="{{ $product['src-p'] }}" alt="">
            <p>{{ $product['descrizione'] }}</p>
            
            
                
            
            <a id="chevron-left" href="">
                <i  class="fas fa-chevron-left"></i>
            </a>
            <a id="chevron-right" href="">
                <i  class="fas fa-chevron-right"></i>
            </a>
            
        </div>
    </div>

@endsection