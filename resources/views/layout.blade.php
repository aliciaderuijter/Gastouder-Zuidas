<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mommy's Daycare | Gastouder Zuidas</title>
    <meta property="og:title" content="Mommy's daycare | Gastouder Zuidas" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.gastouder-zuidas.nl" />
    <meta property="og:image" content="http://www.gastouder-zuidas.nl/images/logo.png" />

    <meta name="description"
          content="Kleinschalig kinderopvang in Buitenveldert op een steenworp afstand van de Zuidas. De woning is een lichte ruimte met voldoende speelgoed, ingericht voor zowel peuters als kleuters. De locatie in Amsterdam Zuid is goed bereikbaar zowel met auto (de ring A10) als met het openbaar vervoer (5,24,51 en Noord-zuid lijn).">

    <meta name="keywords" content="gastouder, zuidas, zuid, buitenveldert, kleinschalig, baby, peuter, ehbo">
    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
		window.Laravel = @json([
			'csrfToken' => csrf_token(),
		])
    </script>

    @yield('head')
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div id="app">

    @yield('content')


</div>

<!-- Scripts -->

<script src="{{ mix('/js/app.js') }}"></script>
@yield('scripts')
</body>
</html>