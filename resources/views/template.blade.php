<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>MusicShop</title>
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}" />
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/reset.css') }}" />
        <link href="https://fonts.googleapis.com/css?family=Chivo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    </head>
    <body>
        <header>
            @include('parts/header')
        </header>
        <main>
        <section class="">
            @yield('content')
        </section>
        </main>
        <footer>
            @include('parts/footer')
        </footer>
    </body>
</html>