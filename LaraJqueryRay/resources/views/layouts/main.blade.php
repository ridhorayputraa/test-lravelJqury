<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Styles -->
        <!-- <style>
          
        </style> -->
    </head>
    <body class="antialiased">
      <div class="wrapper">

        @include('partials.sidebar')
        <div class="main">
        <!-- @yield('container') -->
        <div class="main-nav">
          <img id='menu-button' src="{{ asset('image/Hamburger.svg') }}"/>
        </div>


        <div class="content">
          <div class="content-upper">
            <p class="box-text">A</p>
          </div>
          <div class="content-middle">
            <p class="box-text">B</p>
            <p class="box-text">C</p>
            <p class="box-text">D</p>
          </div>
          <div class="content-bottom">
            <p class="box-text">E</p>
          </div>
        </div>

      </div>
      <script src="{{ asset('js/script.js') }}"></script>
    </div>
    </body>
</html>
