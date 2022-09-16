@extends('layouts.main')

@section('title', 'DESCRIPTION')


@section('main-content')
<header>
    <figure>
        <span>
            {{ $comic['type'] }}
        </span>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        <div> VIEW GALLERY </div>
    </figure>
</header>
<div class="container">
    <section id="presentation">
        <h1>{{ $comic['title'] }}</h1>
        <div class="isavaible">
            <span> U.S. Price: {{$comic['price']}}</span>
        </div>
        <p> {{$comic['description']}}</p>
    </section>
    <section id="more-info">
        <div class="talent">
            <h3> TALENT </h3>
            <div>art by: {{$comic['description']}}</div>
            <div>written by: {{$comic['price']}}</div>
        </div>
        <div class="specs">
            <h3> SPECS </h3>
            <div>Series: {{ $comic['series']}}</div>
            <div>U.S. Price: {{$comic['price']}}</div>
            <div>On Sale Date: {{$comic['sale_date']}}</div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="dc">
                <h5></h5>
                <i></i>
            </div>
            <div class="shop-dc">
                <h5></h5>
                <i></i>
            </div>
            <div class="locator">
                <h5></h5>
                <i></i>
            </div>
            <div class="subscription">
                <h5></h5>
                <i></i>
            </div>
        </div>
    </footer>
</div>
@endsection