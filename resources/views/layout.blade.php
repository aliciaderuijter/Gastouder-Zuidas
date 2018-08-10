<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Mommy's Daycare| {{ config('app.name', 'Laravel') }}</title>

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