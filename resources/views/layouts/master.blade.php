<!Doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Taskoo</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">

  <!-- Alexis CSS -->
  <link href="{{ asset('css/alexis.css') }}" rel="stylesheet" type="text/css">
  <!-- Global CSS -->
  <link href="{{ asset('css/global.css') }}" rel="stylesheet" type="text/css">

  <!--Bootstrap? Haha -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>
  @include('includes.headers.navigation')
  @yield('content')
  @include('includes.footers.footer')
</body>
</html>