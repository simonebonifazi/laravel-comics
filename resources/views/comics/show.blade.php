@extends('layouts.main')

@section('title', 'DESCRIPTION')


@section('main-content')
<div id="show">

    <!-- preview section -->
    <div class="head">
    </div>
    <figure class="preview">
        <span>
            {{ $comic['type'] }}
        </span>
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        <div> VIEW GALLERY </div>
    </figure>

    <!-- details section -->
    <div class="container">
        <section id="presentation">
            <div>

                <h1> {{ $comic['title'] }}</h1>
                <div class="isavaible">
                    <div class="divisor">
                        <div>
                            <span> U.S. Price: </span> {{$comic['price']}}
                        </div>
                        <span> AVAIBLE</span>
                    </div>
                    <div class="check-availability">
                        Check Availability
                        <!-- aggiungere Fontawesome
                        <i class="fa-solid fa-chevron-down"></i> 
                    -->
                    </div>
                </div>
                <p class="description"> {{$comic['description']}}</p>

            </div>

            <figure>
                <img src="{{asset('images/adv.jpg')}}" alt="adv">
                <p> advertisement</p>
            </figure>
        </section>
    </div>
    <section id="more-info">
        <div class="container">

            <div class="talent">
                <h3> TALENT </h3>
                <div>art by:
                    @foreach($comic['artists'] as $artist)
                    <span> {{$artist}} @if($loop->last) . @else , @endif </span>
                    @endforeach
                </div>
                <div>written by:
                    @foreach($comic['writers'] as $writer)
                    <span> {{$writer}} @if($loop->last) . @else , @endif </span>
                    @endforeach
                </div>
            </div>
            <div class="specs">
                <h3> SPECS </h3>
                <div>Series: {{ $comic['series']}}</div>
                <div>U.S. Price: {{$comic['price']}}</div>
                <div>On Sale Date: {{$comic['sale_date']}}</div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="dc">
                <h5></h5>
                <i></i>
                <figure>
                    <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="icons">
                </figure>
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