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
      <li><a href="#">SETTING&nbsp;&nbsp;</a></li>
      <li><a href="#thirdPage">LOGOUT&nbsp;&nbsp;</a></li>
    </ul>

</div>
</div>
</nav>

<div class="container main">
  <div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 homeSidebar">
      <br /><br />

<a href="#" data-toggle="tooltip" data-placement="right" title="He build walls, roofs, doors, or even your whole house!"><div class="row"><img src="{{asset('img/wrench.png')}}" width="30em">&nbsp;&nbsp;Mechanic</div></a>
<a href="#" data-toggle="tooltip" data-placement="right" title="Can work with appliances, automobile, and even your bike!"><div class="row"><img src="{{asset('img/hammer.png')}}" width="30em">&nbsp;&nbsp;Carpenter</div></a>
<a href="#" data-toggle="tooltip" data-placement="right" title="Fixes electrical problems such as wirings, switches or even your phone charger!"><div class="row"><img src="{{asset('img/bolt.png')}}" width="30em">&nbsp;&nbsp;Electrician</div></a>
<a href="#" data-toggle="tooltip" data-placement="right" title="Can create any program or application depending on your needs!"><div class="row"><img src="{{asset('img/coding.png')}}" width="30em">&nbsp;&nbsp;Programmer</div></a>
<a href="#" data-toggle="tooltip" data-placement="right" title="Need a help with in your household like cleaning, cooking, or washing of clothes? They're here just for you!"><div class="row"><img src="{{asset('img/broom.png')}}" width="30em">&nbsp;&nbsp;House Helper</div></a>
<a href="#" data-toggle="tooltip" data-placement="right" title="He is the one doing the dirty work such as clogged toilets, cleaning pipes and more!"><div class="row"><img src="{{asset('img/plumbering.png')}}" width="30em">&nbsp;&nbsp;Plumber</div></a>
<a href="#" data-toggle="tooltip" data-placement="right" title="They are your type...ist! They can encode your records on different microsoft office applications!"><div class="row"><img src="{{asset('img/typewriter.png')}}" width="30em">&nbsp;&nbsp;Encoder</div></a>
<a href="#" data-toggle="tooltip" data-placement="right" title="They teach different subject matter based on what you want to learn!"><div class="row"><img src="{{asset('img/tutorial.png')}}" width="30em">&nbsp;&nbsp;Tutor</div></a>
    <!--  <div class="dropdown">
   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Search for Worker
   <span class="caret"></span></button>
   <ul class="dropdown-menu">
     <li><a href="#">Mechanic</a></li>
     <li><a href="#">Carpenter</a></li>
     <li><a href="#">Electrician</a></li>
     <li><a href="#">Tutor</a></li>
     <li><a href="#">House Keeper</a></li>
     <li><a href="#">House Helper</a></li>
     <li><a href="#">Plumber</a></li>
     <li><a href="#">Encoder</a></li>
     <li><a href="#">Programmer</a></li>
   </ul>
 </div>
-->
    </div>
    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 geoMap">Input here the Geomapping</div>
  </div>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>
