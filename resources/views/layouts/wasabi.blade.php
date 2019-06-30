<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link rel="stylesheet" href="/css/style.css">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&display=swap" rel="stylesheet">
</head>
<body>
  <main>
    <div id="background-img"></div>
    @yield('content')
  </main>
</body>
</html>
