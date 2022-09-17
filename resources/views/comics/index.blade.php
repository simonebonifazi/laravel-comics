@extends('layouts.main')

@section('title', 'HOME')

@section('main-content')
<div class="container">
    <ul class="card-container d-flex">
        @foreach($comics as $index => $comic)
        <li class="card">
            <a href="{{ route('comics.show') }}">
                <figure>
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </figure>
                <figcaption>{{ $comic['title'] }}</figcaption>
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endsection