<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>MusicShop</title>
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/app.css') }}" />
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