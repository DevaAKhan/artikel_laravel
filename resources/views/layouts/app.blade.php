<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Teliti-Remaja.com</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('assets/startbootstrap/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('assets/startbootstrap/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/startbootstrap/css/clean-blog.min.css') }}" rel="stylesheet">

  <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
@livewireStyles

</head>

<body>

  <!-- Navigation -->
  @section('header')
        @include('layouts.front.inc.header')
    @show

    

    
  

  <!-- Main Content -->
  @yield('content')
  {{isset($slot) ? $slot : null}}

   

  <hr>
  
  <!-- Footer -->
  @section('footer')
        @include('layouts.front.inc.footer')
    @show
  

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('assets/startbootstrap/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('assets/startbootstrap/js/clean-blog.min.js') }}"></script>
  @livewireScripts
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
  @stack('scripts')

</body>

</html>