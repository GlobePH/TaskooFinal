<!Doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taskoo</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

  <!-- Alexis CSS -->
  <link href="{{ asset('css/alexis.css') }}" rel="stylesheet" type="text/css">
  <!-- Global CSS -->
  <link href="{{ asset('css/global.css') }}" rel="stylesheet" type="text/css">

  <!--Bootstrap? Haha -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" />
  <!-- Google Maps JS API -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfPuh1ktG-4McBM_1_L1rQkRg6cMOgJVE"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.25/gmaps.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" />
  
  @yield('css')
</head>

<body>
  @include('includes.headers.navigation')
  @yield('content')
  @include('includes.footers.footer')
  <br /><br />
</body>
</html>
