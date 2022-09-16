<html lang="en">


@include('includes.head')

<body>
    <noscript>
        <strong>We're sorry but comics laravel doesn't work properly without JavaScript enabled. Please enable it to
            continue.</strong>
    </noscript>
    <div class="bg">
        @include('includes.header')
        <main class="bg">
            @include('includes.main')

        </main>
        @include('includes.footertop')
        @include('includes.footerbottom')


    </div>
    <!-- built files will be auto injected -->


</body>

</html>

//!!TODO aggiungere e ciclare l'array tramite config_
//?? gestione main