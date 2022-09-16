<div class="container">
    <ul class="card-container d-flex">

        @foreach($comics as $comic)
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