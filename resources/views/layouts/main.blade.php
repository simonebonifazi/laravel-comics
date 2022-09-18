<html lang="en">


@include('includes.head')

<body>
    <noscript>
        <strong>We're sorry but comics laravel doesn't work properly without JavaScript enabled. Please enable it to
            continue.</strong>
    </noscript>
    <div class="bg">
        @include('includes.header')
        <!-- da trsportare poi tramite include -->
        <section id="jumbotron">

        </section>
        <!-- da trsportare poi tramite include -->
        <main class="bg">
            @yield('main-content')
        </main>
        @include('includes.footertop')
        @include('includes.footerbottom')


    </div>
    <!-- built files will be auto injected -->


</body>

</html>