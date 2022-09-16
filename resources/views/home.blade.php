@extends('layouts.main')

@section('title', 'HOME')

@section('main-content')
<div class="container">
    <ul class="card-container d-flex">
        @foreach($comics as $index => $comic)
        <li class="card">
            <figure>
                <a href="#">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </a>
            </figure>
            <figcaption>{{ $comic['title'] }}</figcaption>
        </li>
        @endforeach
    </ul>
</div>
@endsection