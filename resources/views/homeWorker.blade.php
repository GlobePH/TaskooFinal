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
<link href="{{asset('css/alexis.css')}}" rel="stylesheet" type="text/css">

<!--Bootstrap? Haha -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    </head>

    <body>

<nav class="navbar navbar-alexis">

<div class="container main">

  <div class="row">

  <div class="navbar-header" align="center">
    <center><img class="img-responsive logo" src="{{asset('img/welder.png')}}" ><strong>TASKOO</strong></center>
  </div>
    <ul class="nav navbar-nav nav-alexis" align="center">
      <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HOME&nbsp;&nbsp;</a></li>
      <li><a href="#">SETTINGS&nbsp;&nbsp;</a></li>
      <li><a href="#thirdPage">LOGOUT&nbsp;&nbsp;</a></li>
    </ul>

</div>
</div>
</nav>

<div class="container main">
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 homeSidebar">
      <br />
      <center><img src="{{asset('img/wrench.png')}}" width="100em"></center>
      <div class="row" align="center"><strong>Alexis</strong></div><br />
      <div class="row"align="center">XP: <strong>100</strong></div>
      <div class="row"align="center">Skill: <strong>Mechanic</strong></div>
      <div class="row"align="center"><img src="{{asset('img/rank/rook.png')}}" width="30em">&nbsp;&nbsp;Rank: <strong>Average</strong></div>
    </div>
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 geoMap">Input here the Geomapping</div>
  </div>
</div>


</body>
</html>
